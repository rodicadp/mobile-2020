# Host: localhost  (Version 5.5.5-10.1.36-MariaDB)
# Date: 2019-05-27 22:58:40
# Generator: MySQL-Front 6.1  (Build 1.24)


#
# Structure for table "asistenti"
#

DROP TABLE IF EXISTS `asistenti`;
CREATE TABLE `asistenti` (
  `id_asistent` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nume_asistent` varchar(50) NOT NULL,
  `prenume_asistent` varchar(50) NOT NULL,
  `specializare` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefon` int(10) unsigned NOT NULL,
  `strada` varchar(25) NOT NULL,
  `nr` int(5) unsigned NOT NULL,
  `bloc` varchar(5) NOT NULL,
  `apartament` int(5) NOT NULL,
  `localitate` varchar(25) NOT NULL,
  `judet` varchar(25) NOT NULL,
  PRIMARY KEY (`id_asistent`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "asistenti"
#

INSERT INTO `asistenti` VALUES (1,'Goia','Elisabeta','Asistent medical','elisabeta98@gmail.com',755478477,'Aurel Vlaicu',60,' ',0,'Sebes','Alba'),(2,'Szasz','Anastasia','Asistent medical','szaszanastasia@gmail.com',773611541,'Stejarului',12,' ',0,'Sebes','Alba'),(3,'Avram','Sara','Asistent medical','saraavram99@gmail.com',774125541,'Teilor',0,'9',11,'Sebes','Alba'),(4,'Paul','Daniel','Asistent medical','paul21dani@gmail.com',751774963,'Unirii',8,' ',0,'Blaj','Alba');

#
# Structure for table "medici"
#

DROP TABLE IF EXISTS `medici`;
CREATE TABLE `medici` (
  `id_medic` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nume_medic` varchar(50) NOT NULL,
  `prenume_medic` varchar(50) NOT NULL,
  `specializare` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefon` int(10) unsigned NOT NULL,
  `strada` varchar(25) NOT NULL,
  `nr` int(5) unsigned NOT NULL,
  `bloc` varchar(5) NOT NULL,
  `apartament` int(5) NOT NULL,
  `localitate` varchar(25) NOT NULL,
  `judet` varchar(25) NOT NULL,
  PRIMARY KEY (`id_medic`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "medici"
#

INSERT INTO `medici` VALUES (1,'Andone','Erast','Medic specialist','andone.erast@gmail.com',751839477,'Aviator Olteanu',7,' ',0,'Sebes','Alba'),(2,'Popa','Larisa','Medic Primar','lari.popa12@gmail.com',773698521,'Principala',0,'8',5,'Blaj','Alba'),(3,'Cibu','Valentina','Medic specialist','valentina234@gmail.com',751248963,'Unirii',56,' ',0,'Teius','Alba'),(4,'Barz','Simina','Medic specialist','simi212@gmail.com',773225441,'Disperarii',13,' ',0,'Blaj','Alba');

#
# Structure for table "medici_asistenti"
#

DROP TABLE IF EXISTS `medici_asistenti`;
CREATE TABLE `medici_asistenti` (
  `id_medic` int(10) unsigned NOT NULL,
  `id_asistent` int(10) unsigned NOT NULL,
  KEY `fk_m_a_1` (`id_medic`),
  KEY `fk_m_a_2` (`id_asistent`),
  CONSTRAINT `fk_m_a_1` FOREIGN KEY (`id_medic`) REFERENCES `medici` (`id_medic`),
  CONSTRAINT `fk_m_a_2` FOREIGN KEY (`id_asistent`) REFERENCES `asistenti` (`id_asistent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "medici_asistenti"
#

INSERT INTO `medici_asistenti` VALUES (1,1),(2,3),(3,2);

#
# Structure for table "mesaje"
#

DROP TABLE IF EXISTS `mesaje`;
CREATE TABLE `mesaje` (
  `nume` varchar(20) NOT NULL,
  `prenume` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mesaj` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "mesaje"
#

INSERT INTO `mesaje` VALUES ('Szasz','Richard','riki@yahoo.com','Aveti o clinica minunata!'),('Andone','Ciprian','cipriandone@gmail.com','Buna ziua!'),('Pop','Antonia','popanto@gmail.com','Buna!!!   Glaucomul este o boalÄƒ a ochiului care produce atrofierea nervului optic È™i Ã®ngustarea cÃ¢mpului vizual È™i pierderea progresivÄƒ a vederii.');

#
# Structure for table "pacienti"
#

DROP TABLE IF EXISTS `pacienti`;
CREATE TABLE `pacienti` (
  `id_pacient` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nume_pacient` varchar(50) NOT NULL,
  `prenume_pacient` varchar(50) NOT NULL,
  `email_pacient` varchar(50) NOT NULL,
  `telefon_pacient` int(10) unsigned NOT NULL,
  `data_` varchar(15) NOT NULL,
  PRIMARY KEY (`id_pacient`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "pacienti"
#

INSERT INTO `pacienti` VALUES (1,'Vadim','Tudor','vadimnr1@gmail.com',751666666,'10.08.2019'),(2,'Dancila','Viorica','vio_dancila@gmail.com',773456789,'12.08.2019'),(3,'Putin','Klaus','klausandputin@gmail.com',773654120,'14.12.2019'),(4,'Breazu','Alina','alinab@yahoo.com',759685142,'');

#
# Structure for table "servicii"
#

DROP TABLE IF EXISTS `servicii`;
CREATE TABLE `servicii` (
  `id_serviciu` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `denumire` varchar(100) NOT NULL,
  `pret` varchar(20) NOT NULL,
  PRIMARY KEY (`id_serviciu`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

#
# Data for table "servicii"
#

INSERT INTO `servicii` VALUES (1,'Chirurgie refractiva ambii ochi (METODA LASIK)','4800 RON'),(2,'Chirurgie refractiva ambii ochi (METODA PRK)','4400 RON'),(3,'Capsulotomie laser YAG/ochi','300 RON'),(4,'Fotocoagulare laser/sedinta','250 RON'),(5,'Iridotomie Laser YAG/sedinta','300 RON'),(6,'facoemulsificarea cristalinului (daca pacientul are deja cristalinul)','1500 RON'),(7,'Facoemulsificare + cristalin artificial foldabil, asferic, Clareon','2500 RON'),(8,'Facoemulsificare + cristalin artificial foldabil multifocal','6100 RON'),(9,'Facoemulsificare + cristalin artificial foldabil, sferic','2200 RON'),(10,'Implant de cristalin artificial suturat la sclera','3500 RON'),(11,'Vitrectomie anterioara','1500 RON'),(12,'Implant de camera anterioara (per secundam)','1550 RON'),(13,'Trabeculectomie/ochi','1500 RON'),(14,'Ciclofotocoagulare laser transsclera (IRIDEX)','2500 lei/ochi'),(15,'Masurarea presiunii intraoculare (la solicitare)','40 RON'),(16,'Tomografie nerv optic (ambii ochi)','200 RON'),(17,'Tomografie nerv optic (un ochi)','120 RON'),(18,'Vitrectomie posterioara cazuri simple','3000 RON'),(19,'Vitrectomie posterioara cazuri complexe','4000 RON'),(20,'Tomografie nerv optic (OCT) un ochi','120 RON'),(21,'Tomografie nerv optic (OCT) ambii ochi','200 RON'),(22,'Pterigion fara plastie','500 RON'),(23,'Pterigion cu plastie','1500 RON'),(24,'Interventie cross-linking/ochi','2400 RON'),(25,'Extractie fire corneene','100 RON'),(26,'Angiofluorografie','500 RON'),(27,'Biometrie','100 RON'),(28,'Pahimetrie','80 RON'),(29,'Gonioscopie','50 RON'),(30,'Strabism/muschi','1500 RON');

#
# Structure for table "programari"
#

DROP TABLE IF EXISTS `programari`;
CREATE TABLE `programari` (
  `id_programare` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_pacient` int(10) unsigned NOT NULL,
  `id_medic` int(10) unsigned NOT NULL,
  `id_serviciu` int(10) unsigned NOT NULL,
  `data_programare` varchar(50) NOT NULL,
  `ora_programare` varchar(50) NOT NULL,
  PRIMARY KEY (`id_programare`),
  KEY `fk_programari_1` (`id_medic`),
  KEY `fk_programari_2` (`id_pacient`),
  KEY `fk_programari_3` (`id_serviciu`),
  CONSTRAINT `fk_programari_1` FOREIGN KEY (`id_medic`) REFERENCES `medici` (`id_medic`),
  CONSTRAINT `fk_programari_2` FOREIGN KEY (`id_pacient`) REFERENCES `pacienti` (`id_pacient`),
  CONSTRAINT `fk_programari_3` FOREIGN KEY (`id_serviciu`) REFERENCES `servicii` (`id_serviciu`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "programari"
#

INSERT INTO `programari` VALUES (4,1,1,1,'15.05.2019','10:15-10:45'),(5,2,2,2,'16.05.2019','11:25-11:55'),(6,3,3,3,'17.05.2019','12:00-12:30');

#
# Structure for table "consultatii"
#

DROP TABLE IF EXISTS `consultatii`;
CREATE TABLE `consultatii` (
  `id_consultatie` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_programare` int(10) unsigned NOT NULL,
  `data_reteta` varchar(20) NOT NULL,
  `diagnostic` varchar(50) NOT NULL,
  `observatii` varchar(50) NOT NULL,
  PRIMARY KEY (`id_consultatie`),
  KEY `fk_consultatii_1` (`id_programare`),
  CONSTRAINT `fk_consultatii_1` FOREIGN KEY (`id_programare`) REFERENCES `programari` (`id_programare`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "consultatii"
#

INSERT INTO `consultatii` VALUES (4,4,'15.05.2019','Stare excelenta','Nu exista observatii'),(5,5,'16.05.2019','Stare buna','Sub supraveghere'),(6,6,'17.05.2019','Stare excelenta','Nu exista observatii');

#
# Structure for table "medicamente"
#

DROP TABLE IF EXISTS `medicamente`;
CREATE TABLE `medicamente` (
  `id_medicament` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_consultatie` int(10) unsigned NOT NULL,
  `denumire` varchar(50) NOT NULL,
  `indicati` varchar(50) NOT NULL,
  PRIMARY KEY (`id_medicament`),
  KEY `fk_medicamente_1` (`id_consultatie`),
  CONSTRAINT `fk_medicamente_1` FOREIGN KEY (`id_consultatie`) REFERENCES `consultatii` (`id_consultatie`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "medicamente"
#

INSERT INTO `medicamente` VALUES (4,4,'Dexagel','Inflamatie corneeana si conjunctivala.'),(5,5,'Flumetol','Toate bolile inflamatorii ale segmentului anterior'),(6,6,'Bruxicam','Bolile segmentului ocular');

#
# View "v_pct_a"
#

DROP VIEW IF EXISTS `v_pct_a`;
CREATE
  ALGORITHM = UNDEFINED
  VIEW `v_pct_a`
  AS
  SELECT
    `a`.`nume_medic` AS 'Nume_medic_specialist', `a`.`prenume_medic` AS 'Prenume_medic_specialist', `b`.`data_programare` AS 'Data_programare', `b`.`ora_programare` AS 'Ora_progmamare'
  FROM
    (`medici` a
      JOIN `programari` b ON ((`b`.`id_medic` = `a`.`id_medic`)))
  GROUP BY
    `b`.`data_programare`, `b`.`ora_programare` DESC;

#
# View "v_pct_b"
#

DROP VIEW IF EXISTS `v_pct_b`;
CREATE
  ALGORITHM = UNDEFINED
  VIEW `v_pct_b`
  AS
  SELECT
    CONCAT(`a`.`nume_medic`, ' ', `a`.`prenume_medic`) AS 'Nume si prenume medic', RTRIM(`a`.`localitate`) AS 'Localitate medic'
  FROM
    `medici` a
  ORDER BY 'Nume si prenume medic';

#
# View "v_pct_c"
#

DROP VIEW IF EXISTS `v_pct_c`;
CREATE
  ALGORITHM = UNDEFINED
  VIEW `v_pct_c`
  AS
  SELECT
    `a`.`nume_medic` AS 'Nume_medic_specialist', `a`.`prenume_medic` AS 'Prenume_medic_specialist', `a`.`localitate` AS 'Localitate medic', `a`.`judet` AS 'Judet medic'
  FROM
    `medici` a
  WHERE
    (`a`.`localitate` <> 'Sebes')
  GROUP BY
    `a`.`localitate`, `a`.`judet`;

#
# View "v_pct_d"
#

DROP VIEW IF EXISTS `v_pct_d`;
CREATE
  ALGORITHM = UNDEFINED
  VIEW `v_pct_d`
  AS
  SELECT
    `a`.`denumire` AS 'Denumire serviciu', `a`.`pret` AS 'Pret serviciu'
  FROM
    `servicii` a
  GROUP BY
    `a`.`denumire` DESC;

#
# View "v_pct_e"
#

DROP VIEW IF EXISTS `v_pct_e`;
CREATE
  ALGORITHM = UNDEFINED
  VIEW `v_pct_e`
  AS
  SELECT
    `a`.`diagnostic` AS 'Diagnostic sesizat', `b`.`denumire` AS 'Medicament recomancat', `b`.`indicati` AS 'Indicatie necesara'
  FROM
    (`consultatii` a
      JOIN `medicamente` b ON ((`b`.`id_consultatie` = `a`.`id_consultatie`)))
  GROUP BY
    `b`.`denumire` DESC;

#
# Procedure "lista_programari"
#

DROP PROCEDURE IF EXISTS `lista_programari`;
CREATE PROCEDURE `lista_programari`()
BEGIN
select id_programare, data_programare, ora_programare
from programari;
END;

#
# Procedure "preia_asistenti"
#

DROP PROCEDURE IF EXISTS `preia_asistenti`;
CREATE PROCEDURE `preia_asistenti`()
BEGIN
select id_asistent, nume_asistent, prenume_asistent, telefon
from asistenti;
END;

#
# Procedure "preia_medici"
#

DROP PROCEDURE IF EXISTS `preia_medici`;
CREATE PROCEDURE `preia_medici`()
BEGIN
select id_medic, nume_medic, prenume_medic, email, telefon
from medici;
END;
