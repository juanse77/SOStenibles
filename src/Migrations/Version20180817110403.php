<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180817110403 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE empresas (id INT AUTO_INCREMENT NOT NULL, usuarios_id INT NOT NULL, nombre VARCHAR(80) NOT NULL, cif VARCHAR(10) NOT NULL, telefono VARCHAR(15) NOT NULL, logo VARCHAR(50) DEFAULT NULL, direccion VARCHAR(128) DEFAULT NULL, descripcion VARCHAR(1024) DEFAULT NULL, UNIQUE INDEX UNIQ_70DD49A5F01D3B25 (usuarios_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personas (id INT AUTO_INCREMENT NOT NULL, usuarios_id INT NOT NULL, nombre VARCHAR(50) NOT NULL, apellidos VARCHAR(50) NOT NULL, dni VARCHAR(10) NOT NULL, telefono VARCHAR(15) NOT NULL, foto VARCHAR(50) DEFAULT NULL, fecha_nacimiento DATE DEFAULT NULL, direccion VARCHAR(128) DEFAULT NULL, biografia VARCHAR(1024) DEFAULT NULL, UNIQUE INDEX UNIQ_7C826071F01D3B25 (usuarios_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuarios (id INT AUTO_INCREMENT NOT NULL, rol SMALLINT NOT NULL, email VARCHAR(50) NOT NULL, password VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE empresas ADD CONSTRAINT FK_70DD49A5F01D3B25 FOREIGN KEY (usuarios_id) REFERENCES usuarios (id)');
        $this->addSql('ALTER TABLE personas ADD CONSTRAINT FK_7C826071F01D3B25 FOREIGN KEY (usuarios_id) REFERENCES usuarios (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE empresas DROP FOREIGN KEY FK_70DD49A5F01D3B25');
        $this->addSql('ALTER TABLE personas DROP FOREIGN KEY FK_7C826071F01D3B25');
        $this->addSql('DROP TABLE empresas');
        $this->addSql('DROP TABLE personas');
        $this->addSql('DROP TABLE usuarios');
    }
}
