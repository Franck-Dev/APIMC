<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211013150927 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE datas_polyms (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(15) NOT NULL, recette VARCHAR(11) NOT NULL, moyen VARCHAR(55) NOT NULL, prog VARCHAR(55) NOT NULL, date_deb DATETIME NOT NULL, duree TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE datas_results_polyms (id INT AUTO_INCREMENT NOT NULL, num_polym_id INT NOT NULL, piece_id INT NOT NULL, vit1min INT NOT NULL, vit1max INT NOT NULL, temp1max INT NOT NULL, duree_pal1 INT NOT NULL, vit2min INT DEFAULT NULL, vit2max INT DEFAULT NULL, temp2max INT DEFAULT NULL, duree_pal2 INT DEFAULT NULL, vit3min INT DEFAULT NULL, vit3max INT DEFAULT NULL, temp3max INT DEFAULT NULL, duree_pal3 INT DEFAULT NULL, vide1min INT DEFAULT NULL, vide1max INT DEFAULT NULL, vide2min INT DEFAULT NULL, vide2max INT DEFAULT NULL, press1min INT DEFAULT NULL, press1max INT DEFAULT NULL, press2min INT DEFAULT NULL, press2max INT DEFAULT NULL, press3min INT DEFAULT NULL, press3max INT DEFAULT NULL, temp_press_in INT DEFAULT NULL, temp_press_out INT DEFAULT NULL, temp_vide_out INT DEFAULT NULL, vide_tempal_fin INT DEFAULT NULL, INDEX IDX_BE0B6CA5B6275550 (num_polym_id), INDEX IDX_BE0B6CA5C40FCFA8 (piece_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE datas_results_polyms ADD CONSTRAINT FK_BE0B6CA5B6275550 FOREIGN KEY (num_polym_id) REFERENCES datas_polyms (id)');
        $this->addSql('ALTER TABLE datas_results_polyms ADD CONSTRAINT FK_BE0B6CA5C40FCFA8 FOREIGN KEY (piece_id) REFERENCES datas_pieces (id)');
        $this->addSql('DROP TABLE acces_api');
        $this->addSql('DROP TABLE datas_prod');
        $this->addSql('DROP TABLE results_polym');
        $this->addSql('ALTER TABLE datas_pieces CHANGE ref ref INT NOT NULL, CHANGE oldref old_ref INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE datas_results_polyms DROP FOREIGN KEY FK_BE0B6CA5B6275550');
        $this->addSql('CREATE TABLE acces_api (id INT AUTO_INCREMENT NOT NULL, nom_apply VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, token VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, droit_acces VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, is_actived TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE datas_prod (id INT AUTO_INCREMENT NOT NULL, ref_fab_id INT NOT NULL, ordre_fab INT NOT NULL, num_polym VARCHAR(15) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, prog VARCHAR(15) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, moyen_util VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date_deb DATETIME NOT NULL, duree_polym TIME NOT NULL, UNIQUE INDEX UNIQ_D640685EB60B584A (ref_fab_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE results_polym (id INT AUTO_INCREMENT NOT NULL, refpcs_id INT NOT NULL, vit1_min SMALLINT NOT NULL, vit1_max SMALLINT NOT NULL, temp_max SMALLINT NOT NULL, duree_pal1 SMALLINT NOT NULL, vit2_min SMALLINT DEFAULT NULL, vit2_max SMALLINT DEFAULT NULL, temp2_max SMALLINT DEFAULT NULL, duree_pal2 SMALLINT DEFAULT NULL, vit3_min SMALLINT DEFAULT NULL, vit3_max SMALLINT DEFAULT NULL, temp3_max SMALLINT DEFAULT NULL, duree_pal3 SMALLINT DEFAULT NULL, vit_froid_min SMALLINT NOT NULL, vit_froid_max SMALLINT NOT NULL, vide1_min INT DEFAULT NULL, vide1_max INT DEFAULT NULL, vide2_min INT DEFAULT NULL, vide2_max INT DEFAULT NULL, vide3_min INT DEFAULT NULL, vide3_max INT DEFAULT NULL, pres_min SMALLINT DEFAULT NULL, pres_max SMALLINT DEFAULT NULL, temp_go_pres SMALLINT DEFAULT NULL, temp_out_pres SMALLINT DEFAULT NULL, pres_vide_out SMALLINT DEFAULT NULL, INDEX IDX_B63C99B17D0B3BF1 (refpcs_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE datas_prod ADD CONSTRAINT FK_D640685EB60B584A FOREIGN KEY (ref_fab_id) REFERENCES datas_pieces (id)');
        $this->addSql('ALTER TABLE results_polym ADD CONSTRAINT FK_B63C99B17D0B3BF1 FOREIGN KEY (refpcs_id) REFERENCES datas_pieces (id)');
        $this->addSql('DROP TABLE datas_polyms');
        $this->addSql('DROP TABLE datas_results_polyms');
        $this->addSql('ALTER TABLE datas_pieces CHANGE ref ref VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE old_ref oldref INT DEFAULT NULL');
    }
}
