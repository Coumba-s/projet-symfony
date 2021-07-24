<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210724125046 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE resultat ADD analyse_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE resultat ADD CONSTRAINT FK_E7DB5DE21EFE06BF FOREIGN KEY (analyse_id) REFERENCES analyse (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E7DB5DE21EFE06BF ON resultat (analyse_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE resultat DROP FOREIGN KEY FK_E7DB5DE21EFE06BF');
        $this->addSql('DROP INDEX UNIQ_E7DB5DE21EFE06BF ON resultat');
        $this->addSql('ALTER TABLE resultat DROP analyse_id');
    }
}
