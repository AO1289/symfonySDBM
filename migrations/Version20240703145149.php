<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240703145149 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, marque_id INT DEFAULT NULL, couleur_id INT DEFAULT NULL, type_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prix_achat DOUBLE PRECISION DEFAULT NULL, volume INT DEFAULT NULL, titrage DOUBLE PRECISION DEFAULT NULL, INDEX IDX_23A0E664827B9B2 (marque_id), INDEX IDX_23A0E66C31BA576 (couleur_id), INDEX IDX_23A0E66C54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E664827B9B2 FOREIGN KEY (marque_id) REFERENCES marque (id)');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66C31BA576 FOREIGN KEY (couleur_id) REFERENCES couleur (id)');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66C54C8C93 FOREIGN KEY (type_id) REFERENCES typebiere (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E664827B9B2');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66C31BA576');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66C54C8C93');
        $this->addSql('DROP TABLE article');
    }
}
