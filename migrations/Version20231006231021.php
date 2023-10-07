<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231006231021 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    // public function up(Schema $schema): void
    // {
    //     // this up() migration is auto-generated, please modify it to your needs
    //     $this->addSql('ALTER TABLE album ADD CONSTRAINT FK_39986E4321D25844 FOREIGN KEY (artiste_id) REFERENCES artiste (id)');
    //     $this->addSql('ALTER TABLE morceau CHANGE piste piste INT NOT NULL');
    //     $this->addSql('ALTER TABLE morceau ADD CONSTRAINT FK_36BB72081137ABCF FOREIGN KEY (album_id) REFERENCES album (id)');
    //     $this->addSql('ALTER TABLE style_album ADD CONSTRAINT FK_F34D20B8BACD6074 FOREIGN KEY (style_id) REFERENCES style (id) ON DELETE CASCADE');
    //     $this->addSql('ALTER TABLE style_album ADD CONSTRAINT FK_F34D20B81137ABCF FOREIGN KEY (album_id) REFERENCES album (id) ON DELETE CASCADE');
    // }

    public function up(Schema $schema): void
{
    // Supprimer les contraintes de clé étrangère
    $this->addSql('ALTER TABLE album DROP FOREIGN KEY FK_39986E4321D25844');
    
    // Recréer la contrainte de clé étrangère avec les bonnes valeurs
    $this->addSql('ALTER TABLE album ADD CONSTRAINT FK_39986E4321D25844 FOREIGN KEY (artiste_id) REFERENCES artiste (id)');
    
    // ... Autres opérations de migration ...
}


    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE album DROP FOREIGN KEY FK_39986E4321D25844');
        $this->addSql('ALTER TABLE morceau DROP FOREIGN KEY FK_36BB72081137ABCF');
        $this->addSql('ALTER TABLE morceau CHANGE piste piste INT DEFAULT NULL');
        $this->addSql('ALTER TABLE style_album DROP FOREIGN KEY FK_F34D20B8BACD6074');
        $this->addSql('ALTER TABLE style_album DROP FOREIGN KEY FK_F34D20B81137ABCF');
    }
}
