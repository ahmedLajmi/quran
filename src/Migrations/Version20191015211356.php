<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191015211356 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE soura_page (soura_id INT NOT NULL, page_id INT NOT NULL, INDEX IDX_AECCABB7F864D68F (soura_id), INDEX IDX_AECCABB7C4663E4 (page_id), PRIMARY KEY(soura_id, page_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE soura_page ADD CONSTRAINT FK_AECCABB7F864D68F FOREIGN KEY (soura_id) REFERENCES soura (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE soura_page ADD CONSTRAINT FK_AECCABB7C4663E4 FOREIGN KEY (page_id) REFERENCES page (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE soura_page');
    }
}
