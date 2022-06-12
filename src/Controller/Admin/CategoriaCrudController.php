<?php

namespace App\Controller\Admin;

use App\Entity\Categoria;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;


class CategoriaCrudController extends AbstractCrudController
{
    private $em;

    public function __construct(EntityManagerInterface $em) {
        $this->em = $em;
    }

    public static function getEntityFqcn(): string
    {
        return Categoria::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
        ->update(Crud::PAGE_INDEX, Action::NEW, function(Action $action) {
            return $action->setLabel("Añadir categoría");
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
        });
    }

    
    public function configureFields(string $pageName): iterable
    {
        $categoriaRepository = $this->em->getRepository(Categoria::class);
        $categoriasPadre = $categoriaRepository->findAllParents();
        
        yield IdField::new('id')->hideOnForm();
        yield AssociationField::new('parents')->onlyOnForms()->setFormTypeOptions(["choices" => $categoriasPadre])->setLabel('Categorías');
        yield BooleanField::new('primaria')->renderAsSwitch(false);
        yield TextField::new('codigo');
        yield TextField::new('nombre');
    }
}
