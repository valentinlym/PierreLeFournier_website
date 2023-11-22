<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231122111710 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidature CHANGE nom nom VARCHAR(180) NOT NULL, CHANGE prenom prenom VARCHAR(180) NOT NULL, CHANGE email email VARCHAR(180) NOT NULL');
        $this->addSql('ALTER TABLE devis ADD email VARCHAR(180) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidature CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE prenom prenom VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE devis DROP email');
    }
}
