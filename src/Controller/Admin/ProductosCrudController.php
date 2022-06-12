<?php

namespace App\Controller\Admin;

use App\Entity\Categoria;
use App\Entity\Productos;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProductosCrudController extends AbstractCrudController
{
    private $em;

    public function __construct(EntityManagerInterface $em) {
        $this->em = $em;
    }

    public static function getEntityFqcn(): string
    {
        return Productos::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
        ->update(Crud::PAGE_INDEX, Action::NEW, function(Action $action) {
            return $action->setLabel("Añadir producto");
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
        $categoriaRepository = $this->em->getRepository(Categoria::class);
        $categoriasSecundarias = $categoriaRepository->findParentsNotNull();
        
        yield IdField::new('id')->hideOnForm();
        yield AssociationField::new('categoria')->onlyOnForms()->setFormTypeOptions(["choices" => $categoriasSecundarias])->setLabel('Categorías');
        yield TextField::new('codigo');
        yield TextField::new('nombre');
        yield TextField::new('descripcion');
        yield NumberField::new('pvp');
        yield Field::new('imageFile')->setFormType(VichImageType::class)->setLabel('Imagen')->onlyOnForms();
        yield Field::new('foto')->hideOnForm()->setLabel('Imagen');
        yield NumberField::new('pp');
        yield IntegerField::new('unidades');
        yield TextField::new('proveedor');
    }
   
}
