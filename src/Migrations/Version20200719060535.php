<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200719060535 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE sub_folder_project (sub_folder_id INT NOT NULL, project_id INT NOT NULL, INDEX IDX_F794EE89421FFFC (sub_folder_id), INDEX IDX_F794EE89166D1F9C (project_id), PRIMARY KEY(sub_folder_id, project_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sub_folder_project ADD CONSTRAINT FK_F794EE89421FFFC FOREIGN KEY (sub_folder_id) REFERENCES sub_folder (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sub_folder_project ADD CONSTRAINT FK_F794EE89166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sub_folder DROP FOREIGN KEY FK_5EF34681166D1F9C');
        $this->addSql('DROP INDEX IDX_5EF34681166D1F9C ON sub_folder');
        $this->addSql('ALTER TABLE sub_folder DROP project_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE sub_folder_project');
        $this->addSql('ALTER TABLE sub_folder ADD project_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sub_folder ADD CONSTRAINT FK_5EF34681166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
        $this->addSql('CREATE INDEX IDX_5EF34681166D1F9C ON sub_folder (project_id)');
    }
}
