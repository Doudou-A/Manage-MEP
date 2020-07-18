<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200716152038 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE project_sub_folder');
        $this->addSql('ALTER TABLE sub_folder ADD project_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sub_folder ADD CONSTRAINT FK_5EF34681166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
        $this->addSql('CREATE INDEX IDX_5EF34681166D1F9C ON sub_folder (project_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE project_sub_folder (project_id INT NOT NULL, sub_folder_id INT NOT NULL, INDEX IDX_46553DB3166D1F9C (project_id), INDEX IDX_46553DB3421FFFC (sub_folder_id), PRIMARY KEY(project_id, sub_folder_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE project_sub_folder ADD CONSTRAINT FK_46553DB3166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE project_sub_folder ADD CONSTRAINT FK_46553DB3421FFFC FOREIGN KEY (sub_folder_id) REFERENCES sub_folder (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sub_folder DROP FOREIGN KEY FK_5EF34681166D1F9C');
        $this->addSql('DROP INDEX IDX_5EF34681166D1F9C ON sub_folder');
        $this->addSql('ALTER TABLE sub_folder DROP project_id');
    }
}
