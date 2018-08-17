<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180817174835 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE empresas DROP FOREIGN KEY FK_70DD49A5F01D3B25');
        $this->addSql('DROP INDEX UNIQ_70DD49A5F01D3B25 ON empresas');
        $this->addSql('ALTER TABLE empresas CHANGE usuarios_id usuario_id INT NOT NULL');
        $this->addSql('ALTER TABLE empresas ADD CONSTRAINT FK_70DD49A5DB38439E FOREIGN KEY (usuario_id) REFERENCES usuarios (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_70DD49A5DB38439E ON empresas (usuario_id)');
        $this->addSql('ALTER TABLE personas DROP FOREIGN KEY FK_7C826071F01D3B25');
        $this->addSql('DROP INDEX UNIQ_7C826071F01D3B25 ON personas');
        $this->addSql('ALTER TABLE personas CHANGE usuarios_id usuario_id INT NOT NULL');
        $this->addSql('ALTER TABLE personas ADD CONSTRAINT FK_7C826071DB38439E FOREIGN KEY (usuario_id) REFERENCES usuarios (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7C826071DB38439E ON personas (usuario_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE empresas DROP FOREIGN KEY FK_70DD49A5DB38439E');
        $this->addSql('DROP INDEX UNIQ_70DD49A5DB38439E ON empresas');
        $this->addSql('ALTER TABLE empresas CHANGE usuario_id usuarios_id INT NOT NULL');
        $this->addSql('ALTER TABLE empresas ADD CONSTRAINT FK_70DD49A5F01D3B25 FOREIGN KEY (usuarios_id) REFERENCES usuarios (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_70DD49A5F01D3B25 ON empresas (usuarios_id)');
        $this->addSql('ALTER TABLE personas DROP FOREIGN KEY FK_7C826071DB38439E');
        $this->addSql('DROP INDEX UNIQ_7C826071DB38439E ON personas');
        $this->addSql('ALTER TABLE personas CHANGE usuario_id usuarios_id INT NOT NULL');
        $this->addSql('ALTER TABLE personas ADD CONSTRAINT FK_7C826071F01D3B25 FOREIGN KEY (usuarios_id) REFERENCES usuarios (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7C826071F01D3B25 ON personas (usuarios_id)');
    }
}
