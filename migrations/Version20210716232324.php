<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210716232324 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE patient ADD utilisateur_patient_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT FK_1ADAD7EB5931506F FOREIGN KEY (utilisateur_patient_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_1ADAD7EB5931506F ON patient (utilisateur_patient_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE patient DROP FOREIGN KEY FK_1ADAD7EB5931506F');
        $this->addSql('DROP INDEX IDX_1ADAD7EB5931506F ON patient');
        $this->addSql('ALTER TABLE patient DROP utilisateur_patient_id');
    }
}
