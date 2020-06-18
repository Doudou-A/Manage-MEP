<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200618063414 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE sub_folder ADD folder_id INT DEFAULT NULL, ADD date_last_update DATETIME DEFAULT NULL, ADD sub_folder_1 VARCHAR(255) DEFAULT NULL, ADD sub_folder_2 VARCHAR(255) DEFAULT NULL, ADD sub_folder_3 VARCHAR(255) DEFAULT NULL, ADD sub_folder_4 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE sub_folder ADD CONSTRAINT FK_5EF34681162CB942 FOREIGN KEY (folder_id) REFERENCES folder (id)');
        $this->addSql('CREATE INDEX IDX_5EF34681162CB942 ON sub_folder (folder_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE sub_folder DROP FOREIGN KEY FK_5EF34681162CB942');
        $this->addSql('DROP INDEX IDX_5EF34681162CB942 ON sub_folder');
        $this->addSql('ALTER TABLE sub_folder DROP folder_id, DROP date_last_update, DROP sub_folder_1, DROP sub_folder_2, DROP sub_folder_3, DROP sub_folder_4');
    }
}
