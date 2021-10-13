<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211013154531 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prog_moyens DROP FOREIGN KEY FK_2E21B459D27201D7');
        $this->addSql('ALTER TABLE charg_fige_outillages DROP FOREIGN KEY FK_741E8F2F3C866CBD');
        $this->addSql('ALTER TABLE recurrance_polym DROP FOREIGN KEY FK_3A8E16BFFFE1E93');
        $this->addSql('ALTER TABLE charg_fige DROP FOREIGN KEY FK_B8CAC2A16C346E29');
        $this->addSql('ALTER TABLE polym_real DROP FOREIGN KEY FK_D14CD140A5AF1127');
        $this->addSql('ALTER TABLE charg_fige_outillages DROP FOREIGN KEY FK_741E8F2F4D6CE55C');
        $this->addSql('ALTER TABLE outillages_prog_moyens DROP FOREIGN KEY FK_F0BCBBE84D6CE55C');
        $this->addSql('ALTER TABLE polym_real DROP FOREIGN KEY FK_D14CD14049DEFD00');
        $this->addSql('ALTER TABLE charge DROP FOREIGN KEY charge_ibfk_1');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649A0905086');
        $this->addSql('ALTER TABLE charg_fige DROP FOREIGN KEY FK_B8CAC2A162BB7AEE');
        $this->addSql('ALTER TABLE demandes DROP FOREIGN KEY FK_BD940CBB5EC1162');
        $this->addSql('ALTER TABLE outillages_prog_moyens DROP FOREIGN KEY FK_F0BCBBE8C9ECABC3');
        $this->addSql('ALTER TABLE polym_real DROP FOREIGN KEY FK_D14CD140A0A1C920');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649ED5CA9E6');
        $this->addSql('ALTER TABLE recurrance_polym DROP FOREIGN KEY FK_3A8E16BFA8E3DFCE');
        $this->addSql('DROP TABLE articles');
        $this->addSql('DROP TABLE articles_outillages');
        $this->addSql('DROP TABLE caract_moyens');
        $this->addSql('DROP TABLE cat_moyens');
        $this->addSql('DROP TABLE category_moyens');
        $this->addSql('DROP TABLE charg_fige');
        $this->addSql('DROP TABLE charg_fige_outillages');
        $this->addSql('DROP TABLE charge');
        $this->addSql('DROP TABLE charge_fige');
        $this->addSql('DROP TABLE chargement');
        $this->addSql('DROP TABLE conf_smenu');
        $this->addSql('DROP TABLE conf_ssmenu');
        $this->addSql('DROP TABLE confapply');
        $this->addSql('DROP TABLE const_menu');
        $this->addSql('DROP TABLE demande');
        $this->addSql('DROP TABLE demandes');
        $this->addSql('DROP TABLE migration_versions');
        $this->addSql('DROP TABLE moyens');
        $this->addSql('DROP TABLE outillages');
        $this->addSql('DROP TABLE outillages_prog_moyens');
        $this->addSql('DROP TABLE planning');
        $this->addSql('DROP TABLE polym_crea');
        $this->addSql('DROP TABLE polym_real');
        $this->addSql('DROP TABLE postes');
        $this->addSql('DROP TABLE prog_moyens');
        $this->addSql('DROP TABLE prog_polym');
        $this->addSql('DROP TABLE recurrance_polym');
        $this->addSql('DROP TABLE services');
        $this->addSql('DROP TABLE type_recurrance');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE datas_polyms ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE articles (id INT AUTO_INCREMENT NOT NULL, reference INT NOT NULL, designation VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, serie TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE articles_outillages (articles_id INT NOT NULL, outillages_id INT NOT NULL, INDEX IDX_97E58CE11EBAF6CC (articles_id), INDEX IDX_97E58CE14D6CE55C (outillages_id), PRIMARY KEY(articles_id, outillages_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE caract_moyens (id INT AUTO_INCREMENT NOT NULL, id_cat_moyen INT NOT NULL, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE cat_moyens (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, nb_moyens INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE category_moyens (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE charg_fige (id INT AUTO_INCREMENT NOT NULL, moyen_id INT NOT NULL, programme_id INT NOT NULL, code VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, statut TINYINT(1) NOT NULL, pourc SMALLINT NOT NULL, INDEX IDX_B8CAC2A16C346E29 (moyen_id), INDEX IDX_B8CAC2A162BB7AEE (programme_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE charg_fige_outillages (charg_fige_id INT NOT NULL, outillages_id INT NOT NULL, INDEX IDX_741E8F2F3C866CBD (charg_fige_id), INDEX IDX_741E8F2F4D6CE55C (outillages_id), PRIMARY KEY(charg_fige_id, outillages_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE charge (id INT AUTO_INCREMENT NOT NULL, polym_id INT DEFAULT NULL, Ordre_Fab INT NOT NULL, Poste_W INT NOT NULL, Reference_Pcs INT NOT NULL, Designation_Pcs VARCHAR(34) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, Num_Prog VARCHAR(11) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, Conf INT NOT NULL, Date_Creation DATETIME DEFAULT NULL, Date_Deb DATE NOT NULL, Date_Fin DATETIME NOT NULL, Date_Pilote DATETIME DEFAULT NULL, Statut VARCHAR(10) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, chargement_id INT DEFAULT NULL, UNIQUE INDEX Conf (Conf), INDEX chargement_id (chargement_id), INDEX polymId (polym_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE charge_fige (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE chargement (id INT AUTO_INCREMENT NOT NULL, nom_chargement VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, id_planning INT DEFAULT NULL, date_plannif DATE NOT NULL, remplissage INT NOT NULL, programme VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE conf_smenu (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, id_smenu1 VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, id_smenu2 VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, id_smenu3 VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, id_smenu4 VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, id_smenu5 VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, id_smenu6 VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, id_smenu7 VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE conf_ssmenu (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, id_smenu1 VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, id_smenu2 VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, id_smenu3 VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, id_smenu4 VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, id_smenu5 VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, id_smenu6 VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, id_smenu7 VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE confapply (id INT AUTO_INCREMENT NOT NULL, titre_menu VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, titre_smenu VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, titre_ssmenu VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE const_menu (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE demande (id INT AUTO_INCREMENT NOT NULL, polym VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date_propose DATE NOT NULL, heure_propose TIME NOT NULL, outillage VARCHAR(300) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE demandes (id INT AUTO_INCREMENT NOT NULL, cycle_id INT NOT NULL, date_propose DATETIME NOT NULL, heure_propose DATETIME DEFAULT NULL, outillages VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, plannifie TINYINT(1) NOT NULL, commentaires VARCHAR(300) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, date_creation DATETIME NOT NULL, date_modif DATETIME DEFAULT NULL, moyen_utilise_id INT DEFAULT NULL, date_heure_fin DATETIME DEFAULT NULL, reccurance TINYINT(1) NOT NULL, user_crea VARCHAR(300) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, user_modif VARCHAR(300) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, recur_valide TINYINT(1) DEFAULT NULL, INDEX IDX_BD940CBB5EC1162 (cycle_id), INDEX moyenId (moyen_utilise_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE migration_versions (version VARCHAR(14) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, executed_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(version)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE moyens (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, category_moyens_id INT NOT NULL, id_service INT NOT NULL, description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, id_types_caracteristiques INT NOT NULL, date_maintenance DATE DEFAULT NULL, operationnel TINYINT(1) NOT NULL, activitees VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_7493DDC962CFC317 (category_moyens_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE outillages (id INT AUTO_INCREMENT NOT NULL, ref VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, designation VARCHAR(60) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, nb_empreinte INT NOT NULL, hauteur NUMERIC(2, 2) DEFAULT NULL, longueur NUMERIC(3, 2) DEFAULT NULL, largeur NUMERIC(2, 2) DEFAULT NULL, volume NUMERIC(5, 2) NOT NULL, coef_aero NUMERIC(5, 2) DEFAULT NULL, dispo TINYINT(1) NOT NULL, cycle_moulage TIME NOT NULL, tps_decharge TIME DEFAULT NULL, tps_charge TIME DEFAULT NULL, nb_thermocouples INT NOT NULL, nb_indus SMALLINT NOT NULL, date_dispo DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE outillages_prog_moyens (outillages_id INT NOT NULL, prog_moyens_id INT NOT NULL, INDEX IDX_F0BCBBE84D6CE55C (outillages_id), INDEX IDX_F0BCBBE8C9ECABC3 (prog_moyens_id), PRIMARY KEY(outillages_id, prog_moyens_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE planning (id INT AUTO_INCREMENT NOT NULL, identification VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, action VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, debut_date DATETIME NOT NULL, fin_date DATETIME NOT NULL, statut VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, num_demande_id INT DEFAULT NULL, UNIQUE INDEX num_demande_id (num_demande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE polym_crea (id INT AUTO_INCREMENT NOT NULL, Moyens TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, Polym_Plannif_id INT NOT NULL, Num_Polym VARCHAR(11) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, Date_Exe DATETIME NOT NULL, Date_Valid DATETIME DEFAULT NULL, OF1 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF2 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF3 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF4 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF5 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF6 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF7 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF8 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF9 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF10 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF11 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF12 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF13 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF14 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF15 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF16 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF17 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF18 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF19 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF20 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF21 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF22 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF23 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF24 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, OF25 VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, Commentaires TEXT CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, Programme VARCHAR(10) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, Validation VARCHAR(35) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, UNIQUE INDEX Num_Polym (Num_Polym), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE polym_real (id INT AUTO_INCREMENT NOT NULL, polym_plannif_id INT DEFAULT NULL, moyens_id INT NOT NULL, programmes_id INT NOT NULL, nom_polym VARCHAR(15) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, deb_polym DATETIME NOT NULL, statut VARCHAR(15) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, fin_polym DATETIME DEFAULT NULL, articles VARCHAR(510) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, nbr_pcs INT NOT NULL, pourc_vol_charge SMALLINT DEFAULT NULL, retard DATETIME DEFAULT NULL, INDEX UNIQ_D14CD14049DEFD00 (polym_plannif_id), INDEX UNIQ_D14CD140A5AF1127 (moyens_id), INDEX UNIQ_D14CD140A0A1C920 (programmes_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE postes (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE prog_moyens (id INT AUTO_INCREMENT NOT NULL, cate_moyen_id INT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, tps_theo INT NOT NULL, duree DATETIME NOT NULL, tps_chargement DATETIME NOT NULL, tps_dechargement DATETIME NOT NULL, thermocouples TINYINT(1) NOT NULL, spc TINYINT(1) DEFAULT NULL, date_creation DATETIME NOT NULL, date_modif DATETIME DEFAULT NULL, couleur VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, INDEX IDX_2E21B459D27201D7 (cate_moyen_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE prog_polym (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, tps_theo VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, duree DATETIME DEFAULT NULL, tps_charg DATETIME DEFAULT NULL, tps_decharg DATETIME DEFAULT NULL, id_moyen INT NOT NULL, thermocouples TINYINT(1) NOT NULL, spc TINYINT(1) DEFAULT NULL, date_creation DATETIME DEFAULT NULL, date_modif DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE recurrance_polym (id INT AUTO_INCREMENT NOT NULL, num_planning_id INT NOT NULL, type_recurrance_id INT NOT NULL, date_finrecurrance DATETIME NOT NULL, num_heritage INT DEFAULT NULL, UNIQUE INDEX UNIQ_3A8E16BFFFE1E93 (num_planning_id), INDEX UNIQ_3A8E16BFA8E3DFCE (type_recurrance_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE services (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, id_chef INT NOT NULL, nb_pers INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE type_recurrance (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, nbr_jour_cycle INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, service_id INT NOT NULL, poste_id INT NOT NULL, username VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, email VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date_creation DATETIME NOT NULL, password VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', is_active TINYINT(1) NOT NULL, INDEX IDX_8D93D649ED5CA9E6 (service_id), INDEX IDX_8D93D649A0905086 (poste_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE charg_fige ADD CONSTRAINT FK_B8CAC2A162BB7AEE FOREIGN KEY (programme_id) REFERENCES prog_moyens (id)');
        $this->addSql('ALTER TABLE charg_fige ADD CONSTRAINT FK_B8CAC2A16C346E29 FOREIGN KEY (moyen_id) REFERENCES moyens (id)');
        $this->addSql('ALTER TABLE charg_fige_outillages ADD CONSTRAINT FK_741E8F2F3C866CBD FOREIGN KEY (charg_fige_id) REFERENCES charg_fige (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE charg_fige_outillages ADD CONSTRAINT FK_741E8F2F4D6CE55C FOREIGN KEY (outillages_id) REFERENCES outillages (id)');
        $this->addSql('ALTER TABLE charge ADD CONSTRAINT charge_ibfk_1 FOREIGN KEY (polym_id) REFERENCES polym_real (id)');
        $this->addSql('ALTER TABLE demandes ADD CONSTRAINT FK_BD940CBB5EC1162 FOREIGN KEY (cycle_id) REFERENCES prog_moyens (id)');
        $this->addSql('ALTER TABLE outillages_prog_moyens ADD CONSTRAINT FK_F0BCBBE84D6CE55C FOREIGN KEY (outillages_id) REFERENCES outillages (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE outillages_prog_moyens ADD CONSTRAINT FK_F0BCBBE8C9ECABC3 FOREIGN KEY (prog_moyens_id) REFERENCES prog_moyens (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE polym_real ADD CONSTRAINT FK_D14CD14049DEFD00 FOREIGN KEY (polym_plannif_id) REFERENCES planning (id)');
        $this->addSql('ALTER TABLE polym_real ADD CONSTRAINT FK_D14CD140A0A1C920 FOREIGN KEY (programmes_id) REFERENCES prog_moyens (id)');
        $this->addSql('ALTER TABLE polym_real ADD CONSTRAINT FK_D14CD140A5AF1127 FOREIGN KEY (moyens_id) REFERENCES moyens (id)');
        $this->addSql('ALTER TABLE prog_moyens ADD CONSTRAINT FK_2E21B459D27201D7 FOREIGN KEY (cate_moyen_id) REFERENCES category_moyens (id)');
        $this->addSql('ALTER TABLE recurrance_polym ADD CONSTRAINT FK_3A8E16BFA8E3DFCE FOREIGN KEY (type_recurrance_id) REFERENCES type_recurrance (id)');
        $this->addSql('ALTER TABLE recurrance_polym ADD CONSTRAINT FK_3A8E16BFFFE1E93 FOREIGN KEY (num_planning_id) REFERENCES demandes (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649A0905086 FOREIGN KEY (poste_id) REFERENCES postes (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649ED5CA9E6 FOREIGN KEY (service_id) REFERENCES services (id)');
        $this->addSql('ALTER TABLE datas_polyms DROP created_at');
    }
}
