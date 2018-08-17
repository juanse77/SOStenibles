<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180817132702 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE likes (id INT AUTO_INCREMENT NOT NULL, usuario_id INT NOT NULL, proyecto_id INT NOT NULL, INDEX IDX_49CA4E7DDB38439E (usuario_id), INDEX IDX_49CA4E7DF625D1BA (proyecto_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personal (id INT AUTO_INCREMENT NOT NULL, persona_id INT NOT NULL, apadrinamiento_id INT NOT NULL, INDEX IDX_F18A6D84F5F88DB9 (persona_id), INDEX IDX_F18A6D84A0456085 (apadrinamiento_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE likes ADD CONSTRAINT FK_49CA4E7DDB38439E FOREIGN KEY (usuario_id) REFERENCES usuarios (id)');
        $this->addSql('ALTER TABLE likes ADD CONSTRAINT FK_49CA4E7DF625D1BA FOREIGN KEY (proyecto_id) REFERENCES proyectos (id)');
        $this->addSql('ALTER TABLE personal ADD CONSTRAINT FK_F18A6D84F5F88DB9 FOREIGN KEY (persona_id) REFERENCES personas (id)');
        $this->addSql('ALTER TABLE personal ADD CONSTRAINT FK_F18A6D84A0456085 FOREIGN KEY (apadrinamiento_id) REFERENCES apadrinamientos (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE likes');
        $this->addSql('DROP TABLE personal');
    }
}
