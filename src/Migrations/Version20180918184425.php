<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180918184425 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE proyectos_usuarios (proyectos_id INT NOT NULL, usuarios_id INT NOT NULL, INDEX IDX_5D1845C9CC33C266 (proyectos_id), INDEX IDX_5D1845C9F01D3B25 (usuarios_id), PRIMARY KEY(proyectos_id, usuarios_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE proyectos_usuarios ADD CONSTRAINT FK_5D1845C9CC33C266 FOREIGN KEY (proyectos_id) REFERENCES proyectos (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE proyectos_usuarios ADD CONSTRAINT FK_5D1845C9F01D3B25 FOREIGN KEY (usuarios_id) REFERENCES usuarios (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE likes');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE likes (id INT AUTO_INCREMENT NOT NULL, usuario_id INT NOT NULL, proyecto_id INT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_49CA4E7DDB38439E (usuario_id), INDEX IDX_49CA4E7DF625D1BA (proyecto_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE likes ADD CONSTRAINT FK_49CA4E7DDB38439E FOREIGN KEY (usuario_id) REFERENCES usuarios (id)');
        $this->addSql('ALTER TABLE likes ADD CONSTRAINT FK_49CA4E7DF625D1BA FOREIGN KEY (proyecto_id) REFERENCES proyectos (id)');
        $this->addSql('DROP TABLE proyectos_usuarios');
    }
}
