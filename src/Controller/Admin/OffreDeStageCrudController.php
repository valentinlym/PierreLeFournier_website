<?php

namespace App\Controller\Admin;

use App\Entity\OffreDeStage;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class OffreDeStageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return OffreDeStage::class;
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
