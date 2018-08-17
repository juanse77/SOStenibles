<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180817131609 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE apadrinamientos (id INT AUTO_INCREMENT NOT NULL, usuario_id INT NOT NULL, proyecto_id INT NOT NULL, INDEX IDX_A34D846DB38439E (usuario_id), INDEX IDX_A34D846F625D1BA (proyecto_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE aportaciones (id INT AUTO_INCREMENT NOT NULL, apadrinamiento_id INT NOT NULL, necesidad_id INT NOT NULL, INDEX IDX_27AA0EBDA0456085 (apadrinamiento_id), INDEX IDX_27AA0EBD9193C819 (necesidad_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE necesidades (id INT AUTO_INCREMENT NOT NULL, proyecto_id INT NOT NULL, tipo SMALLINT NOT NULL, descripcion VARCHAR(100) NOT NULL, INDEX IDX_2005D90FF625D1BA (proyecto_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE apadrinamientos ADD CONSTRAINT FK_A34D846DB38439E FOREIGN KEY (usuario_id) REFERENCES usuarios (id)');
        $this->addSql('ALTER TABLE apadrinamientos ADD CONSTRAINT FK_A34D846F625D1BA FOREIGN KEY (proyecto_id) REFERENCES proyectos (id)');
        $this->addSql('ALTER TABLE aportaciones ADD CONSTRAINT FK_27AA0EBDA0456085 FOREIGN KEY (apadrinamiento_id) REFERENCES apadrinamientos (id)');
        $this->addSql('ALTER TABLE aportaciones ADD CONSTRAINT FK_27AA0EBD9193C819 FOREIGN KEY (necesidad_id) REFERENCES necesidades (id)');
        $this->addSql('ALTER TABLE necesidades ADD CONSTRAINT FK_2005D90FF625D1BA FOREIGN KEY (proyecto_id) REFERENCES proyectos (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE aportaciones DROP FOREIGN KEY FK_27AA0EBDA0456085');
        $this->addSql('ALTER TABLE aportaciones DROP FOREIGN KEY FK_27AA0EBD9193C819');
        $this->addSql('DROP TABLE apadrinamientos');
        $this->addSql('DROP TABLE aportaciones');
        $this->addSql('DROP TABLE necesidades');
    }
}
