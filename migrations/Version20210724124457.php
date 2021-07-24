<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210724124457 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE analyse DROP FOREIGN KEY FK_351B0C7ED233E95C');
        $this->addSql('DROP INDEX UNIQ_351B0C7ED233E95C ON analyse');
        $this->addSql('ALTER TABLE analyse DROP resultat_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE analyse ADD resultat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE analyse ADD CONSTRAINT FK_351B0C7ED233E95C FOREIGN KEY (resultat_id) REFERENCES resultat (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_351B0C7ED233E95C ON analyse (resultat_id)');
    }
}
