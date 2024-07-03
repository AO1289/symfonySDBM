<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240703154439 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vendre DROP FOREIGN KEY FK_899DDA2D543EC5F0');
        $this->addSql('ALTER TABLE vendre DROP FOREIGN KEY FK_899DDA2D3D13314D');
        $this->addSql('DROP INDEX IDX_899DDA2D3D13314D ON vendre');
        $this->addSql('DROP INDEX IDX_899DDA2D543EC5F0 ON vendre');
        $this->addSql('ALTER TABLE vendre ADD annee INT NOT NULL, ADD numero_ticket INT NOT NULL, ADD quantite INT NOT NULL, DROP annee_id, DROP numero_ticket_id, DROP quantite_vendue');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vendre ADD annee_id INT DEFAULT NULL, ADD numero_ticket_id INT NOT NULL, ADD quantite_vendue INT NOT NULL, DROP annee, DROP numero_ticket, DROP quantite');
        $this->addSql('ALTER TABLE vendre ADD CONSTRAINT FK_899DDA2D543EC5F0 FOREIGN KEY (annee_id) REFERENCES ticket (id)');
        $this->addSql('ALTER TABLE vendre ADD CONSTRAINT FK_899DDA2D3D13314D FOREIGN KEY (numero_ticket_id) REFERENCES article (id)');
        $this->addSql('CREATE INDEX IDX_899DDA2D3D13314D ON vendre (numero_ticket_id)');
        $this->addSql('CREATE INDEX IDX_899DDA2D543EC5F0 ON vendre (annee_id)');
    }
}
