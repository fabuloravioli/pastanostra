<?php

namespace App\Controller\Admin;

use App\Entity\Pasta;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class PastaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Pasta::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // Id shouldn't be modified
            IdField::new('id')->hideOnForm(),
            // Completed will be rendered as a toggle only in edit
            // Title will be rendered so as to include a link, and be striked whenever completed
            TextField::new('nome')
                ->setTemplatePath('admin/fields/pasta_index_title.html.twig'),
            IntegerField::new('dimensioni'),
            TextField::new('origine'),
            AssociationField::new('cotturas')
                ->onlyOnDetail()
                ->setTemplatePath('admin/fields/pasta_cotturas.html.twig'),
            AssociationField::new('fabrications') // remplacer par le nom de l'attribut spécifique, par exemple 'bodyShape'
            ->onlyOnDetail()
                ->formatValue(function ($value, $entity) {
                    return implode(', ', $entity->getFabrications()->toArray()); // ici getBodyShapes()
                })
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        // For whatever reason show isn't in the menu, bu default
        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ;
    }

    public function configureCrud(Crud $crud): Crud
    {
        // Customize the rendering of the row to grey-out the completed Todos
        return $crud
            ->overrideTemplate('crud/index', 'admin/crud/pasta_index.html.twig')
            ;
    }

    public function configurePastaActions(Actions $actions): Actions
    {

        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ;
    }
    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
