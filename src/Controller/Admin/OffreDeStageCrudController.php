<?php

namespace App\Controller\Admin;

use App\Entity\OffreDeStage;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\{AssociationField, TextField, TextEditorField, BooleanField,};
use Symfony\Component\Validator\Constraints\Choice;

class OffreDeStageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return OffreDeStage::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('candidatures')->hideOnForm(),
            TextField::new('titre'),
            TextField::new('salaire'),
            TextField::new('duree'),
            TextEditorField::new('description'),
            BooleanField::new('brouillon'),
        ];
    }
}
