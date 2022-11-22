<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221120190354 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE placard (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, member_id INTEGER DEFAULT NULL, description VARCHAR(255) NOT NULL, publiée BOOLEAN NOT NULL, CONSTRAINT FK_9D30D9467597D3FE FOREIGN KEY (member_id) REFERENCES member (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_9D30D9467597D3FE ON placard (member_id)');
        $this->addSql('CREATE TABLE placard_pasta (placard_id INTEGER NOT NULL, pasta_id INTEGER NOT NULL, PRIMARY KEY(placard_id, pasta_id), CONSTRAINT FK_4907774664757A25 FOREIGN KEY (placard_id) REFERENCES placard (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_490777467FCDBC8C FOREIGN KEY (pasta_id) REFERENCES pasta (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_4907774664757A25 ON placard_pasta (placard_id)');
        $this->addSql('CREATE INDEX IDX_490777467FCDBC8C ON placard_pasta (pasta_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE placard');
        $this->addSql('DROP TABLE placard_pasta');
    }
}
