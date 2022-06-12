<?php

namespace App\Controller\Admin;

use App\Entity\Usuarios;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UsuariosCrudController extends AbstractCrudController
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public static function getEntityFqcn(): string
    {
        return Usuarios::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
        ->update(Crud::PAGE_INDEX, Action::NEW, function(Action $action) {
            return $action->setLabel("Añadir usuario");
        })
        ->update(Crud::PAGE_INDEX, Action::EDIT, function(Action $action) {
            return $action->setLabel("Editar");
        })
        ->update(Crud::PAGE_INDEX, Action::DELETE, function(Action $action) {
            return $action->setLabel("Eliminar");
        })
        ->update(Crud::PAGE_EDIT, Action::SAVE_AND_RETURN, function(Action $action) {
            return $action->setLabel("Guardar cambios");
        })
        ->update(Crud::PAGE_EDIT, Action::SAVE_AND_CONTINUE, function(Action $action) {
            return $action->setLabel("Guardar y continuar editando");
        })
        ->update(Crud::PAGE_NEW, Action::SAVE_AND_RETURN, function(Action $action) {
            return $action->setLabel("Crear");
        })
        ->update(Crud::PAGE_NEW, Action::SAVE_AND_ADD_ANOTHER, function(Action $action) {
            return $action->setLabel("Crear y añadir nuevo");
        });
    }

    public function configureFields(string $pageName): iterable
    {        
        yield IdField::new('id')->hideOnForm();
        yield TextField::new('usuario');
        yield TextField::new('nombre');
        yield TextField::new('apellidos');
        yield EmailField::new('email');
        yield TextField::new('direccion');
        yield NumberField::new('telefono');
        yield TextField::new('password')->setFormType(PasswordType::class)->hideOnIndex();
        
    }

    public function updateEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        $event = new BeforeEntityPersistedEvent($entityInstance);
        $this->hasPassWord($event);
        parent::updateEntity($entityManager, $entityInstance);
    }

    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        $event = new BeforeEntityPersistedEvent($entityInstance);
        $this->hasPassWord($event);
        parent::updateEntity($entityManager, $entityInstance);
    }

    public function hasPassWord(BeforeEntityPersistedEvent $event): void
    {
        $entityInstance = $event->getEntityInstance();
        if(!$entityInstance instanceof Usuarios){
            return;
        }
        $entityInstance->setPassword($this->passwordHasher->hashPassword($entityInstance,$entityInstance->getPlainPassword()));
    }
}
