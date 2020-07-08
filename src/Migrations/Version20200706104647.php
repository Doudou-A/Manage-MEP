<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200706104647 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE sub_folder_sub_folder (sub_folder_source INT NOT NULL, sub_folder_target INT NOT NULL, INDEX IDX_F7A435EA759FC2DB (sub_folder_source), INDEX IDX_F7A435EA6C7A9254 (sub_folder_target), PRIMARY KEY(sub_folder_source, sub_folder_target)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sub_folder_sub_folder ADD CONSTRAINT FK_F7A435EA759FC2DB FOREIGN KEY (sub_folder_source) REFERENCES sub_folder (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sub_folder_sub_folder ADD CONSTRAINT FK_F7A435EA6C7A9254 FOREIGN KEY (sub_folder_target) REFERENCES sub_folder (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sub_folder DROP FOREIGN KEY FK_5EF34681162CB942');
        $this->addSql('DROP INDEX IDX_5EF34681162CB942 ON sub_folder');
        $this->addSql('ALTER TABLE sub_folder DROP level, DROP sub_folder, DROP sub_folder_2, DROP sub_folder_3, DROP sub_folder_4, CHANGE folder_id on_folder_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sub_folder ADD CONSTRAINT FK_5EF346819B8BF801 FOREIGN KEY (on_folder_id) REFERENCES folder (id)');
        $this->addSql('CREATE INDEX IDX_5EF346819B8BF801 ON sub_folder (on_folder_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE sub_folder_sub_folder');
        $this->addSql('ALTER TABLE sub_folder DROP FOREIGN KEY FK_5EF346819B8BF801');
        $this->addSql('DROP INDEX IDX_5EF346819B8BF801 ON sub_folder');
        $this->addSql('ALTER TABLE sub_folder ADD level INT NOT NULL, ADD sub_folder VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ADD sub_folder_2 VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ADD sub_folder_3 VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ADD sub_folder_4 VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE on_folder_id folder_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sub_folder ADD CONSTRAINT FK_5EF34681162CB942 FOREIGN KEY (folder_id) REFERENCES folder (id)');
        $this->addSql('CREATE INDEX IDX_5EF34681162CB942 ON sub_folder (folder_id)');
    }
}
