<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210716203904 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE analyse (id INT AUTO_INCREMENT NOT NULL, numero_quitance INT NOT NULL, origine_prelevement VARCHAR(255) NOT NULL, date_prelevement DATE NOT NULL, heure_prelevement TIME NOT NULL, date_reception DATE NOT NULL, heure_reception TIME NOT NULL, numero_enregistrement VARCHAR(255) NOT NULL, analyse_demandee VARCHAR(255) NOT NULL, type_prelevement LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE patient (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, age INT NOT NULL, sexe VARCHAR(255) NOT NULL, tel INT NOT NULL, adresse VARCHAR(255) NOT NULL, ville_quartier VARCHAR(255) NOT NULL, type_cas VARCHAR(255) NOT NULL, nombre_visite INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE resultat (id INT AUTO_INCREMENT NOT NULL, technique LONGTEXT NOT NULL, resultat VARCHAR(255) NOT NULL, ct INT NOT NULL, resultat_anterieur VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, mot_passe VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, nom_utilisateur VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE analyse');
        $this->addSql('DROP TABLE patient');
        $this->addSql('DROP TABLE resultat');
        $this->addSql('DROP TABLE utilisateur');
    }
}
