<?php

namespace App\Controller\Admin;

use App\Entity\Placard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PlacardCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Placard::class;
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
