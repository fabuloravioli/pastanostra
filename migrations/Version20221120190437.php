<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221120190437 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cottura (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, pasta_id INTEGER NOT NULL, typo VARCHAR(255) NOT NULL, tiempo INTEGER NOT NULL, CONSTRAINT FK_4319A54C7FCDBC8C FOREIGN KEY (pasta_id) REFERENCES pasta (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_4319A54C7FCDBC8C ON cottura (pasta_id)');
        $this->addSql('CREATE TABLE fabrication (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, parent_id INTEGER DEFAULT NULL, intitulé VARCHAR(255) NOT NULL, CONSTRAINT FK_AE0B6B7A727ACA70 FOREIGN KEY (parent_id) REFERENCES fabrication (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_AE0B6B7A727ACA70 ON fabrication (parent_id)');
        $this->addSql('CREATE TABLE fabrication_pasta (fabrication_id INTEGER NOT NULL, pasta_id INTEGER NOT NULL, PRIMARY KEY(fabrication_id, pasta_id), CONSTRAINT FK_51BFCF8D2EFC43FC FOREIGN KEY (fabrication_id) REFERENCES fabrication (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_51BFCF8D7FCDBC8C FOREIGN KEY (pasta_id) REFERENCES pasta (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_51BFCF8D2EFC43FC ON fabrication_pasta (fabrication_id)');
        $this->addSql('CREATE INDEX IDX_51BFCF8D7FCDBC8C ON fabrication_pasta (pasta_id)');
        $this->addSql('CREATE TABLE member (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE TABLE pasta (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, member_id INTEGER DEFAULT NULL, nome VARCHAR(255) NOT NULL, origine VARCHAR(255) NOT NULL, dimensioni INTEGER NOT NULL, CONSTRAINT FK_9B3BBC817597D3FE FOREIGN KEY (member_id) REFERENCES member (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_9B3BBC817597D3FE ON pasta (member_id)');
        $this->addSql('CREATE TABLE placard (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, member_id INTEGER DEFAULT NULL, description VARCHAR(255) NOT NULL, publiée BOOLEAN NOT NULL, CONSTRAINT FK_9D30D9467597D3FE FOREIGN KEY (member_id) REFERENCES member (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_9D30D9467597D3FE ON placard (member_id)');
        $this->addSql('CREATE TABLE placard_pasta (placard_id INTEGER NOT NULL, pasta_id INTEGER NOT NULL, PRIMARY KEY(placard_id, pasta_id), CONSTRAINT FK_4907774664757A25 FOREIGN KEY (placard_id) REFERENCES placard (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_490777467FCDBC8C FOREIGN KEY (pasta_id) REFERENCES pasta (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_4907774664757A25 ON placard_pasta (placard_id)');
        $this->addSql('CREATE INDEX IDX_490777467FCDBC8C ON placard_pasta (pasta_id)');
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
        $this->addSql('CREATE TABLE messenger_messages (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, body CLOB NOT NULL, headers CLOB NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL)');
        $this->addSql('CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)');
        $this->addSql('CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)');
        $this->addSql('CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE cottura');
        $this->addSql('DROP TABLE fabrication');
        $this->addSql('DROP TABLE fabrication_pasta');
        $this->addSql('DROP TABLE member');
        $this->addSql('DROP TABLE pasta');
        $this->addSql('DROP TABLE placard');
        $this->addSql('DROP TABLE placard_pasta');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
