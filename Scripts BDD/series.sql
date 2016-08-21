
CREATE DATABASE Series CHARACTER SET "utf8";
USE Series;

CREATE TABLE utilisateurs (
	id smallint(2) unsigned PRIMARY KEY AUTO_INCREMENT,
	nom_ut varchar(255) NOT NULL,
	prenom_ut varchar(255) NOT NULL,
	pseudo_ut varchar(255) NOT NULL,
	mdp_ut varchar(255) NOT NULL,
	mail_ut varchar(255) NOT NULL,
	date_naiss date NOT NULL,
	photo_ut varchar(255)

) ENGINE=INNODB;

CREATE TABLE series (
	id smallint(2) unsigned PRIMARY KEY AUTO_INCREMENT,
	nom_ser varchar(255) NOT NULL,
	nom_original_ser varchar(255) NOT NULL,
	synopsis_ser varchar(255) NOT NULL,
	resume_ser text,
	annee_prod_ser year(4) NOT NULL,
	poster_ser varchar(255),
	ut_id int(4)

) ENGINE=INNODB;

CREATE TABLE saisons (
	id smallint(2) unsigned PRIMARY KEY AUTO_INCREMENT,
	nom_sais varchar(255) NOT NULL,
	num_sais smallint(4) NOT NULL,
	resum_sais varchar(255) NOT NULL,
	annee_prod_sais year(5) NOT NULL,
	poster_sais varchar(255),
	serie_id int(4)
) ENGINE=INNODB;


CREATE TABLE episodes (
	id smallint(2) unsigned PRIMARY KEY AUTO_INCREMENT,
	num_ep smallint(4) NOT NULL,
	nom_ep varchar(255) NOT NULL,
	nom_original_ep varchar(255) NOT NULL,
	resume_ep varchar(255) NOT NULL,
	ep_sais int(4),
	rea_id int(4)
		
) ENGINE=INNODB;


CREATE TABLE genres (
	id smallint(2) unsigned PRIMARY KEY AUTO_INCREMENT,
	libelle varchar(255) NOT NULL,
	age_cons varchar(255) NOT NULL
		
) ENGINE=INNODB;


CREATE TABLE acteurs (
	id smallint(2) unsigned PRIMARY KEY AUTO_INCREMENT,
	nom_act varchar(255) NOT NULL,
	prenom_act varchar(255) NOT NULL,
	jouer_id int(4)

) ENGINE=INNODB;

CREATE TABLE producteurs (
	id smallint(2) unsigned PRIMARY KEY AUTO_INCREMENT,
	nom_prod varchar(255) NOT NULL,
	prenom_prod varchar(255) NOT NULL
	
) ENGINE=INNODB;


CREATE TABLE realisateurs (
	id smallint(2) unsigned PRIMARY KEY AUTO_INCREMENT,
	nom_rea varchar(255) NOT NULL,
	prenom_rea varchar(255) NOT NULL
		
) ENGINE=INNODB;


CREATE TABLE jouer (
	id smallint(2) unsigned PRIMARY KEY AUTO_INCREMENT,
	role varchar(255) NOT NULL,
	ser_id int(4),
	act_id int(4)
		
) ENGINE=INNODB;

CREATE TABLE noter_ser (
	id int(4) unsigned PRIMARY KEY AUTO_INCREMENT,
	note tinyint(1) unsigned NOT NULL,
	note_ut int(4),
	ser_id int(4)
		
) ENGINE=INNODB;

CREATE TABLE noter_crit (
	id int(4) unsigned PRIMARY KEY AUTO_INCREMENT,
	note tinyint(1) unsigned NOT NULL,
	ut_id int(4),
	crit_id int(4)
	 
) ENGINE=INNODB;

CREATE TABLE messages (
	id int(4) unsigned PRIMARY KEY AUTO_INCREMENT,
	date date NOT NULL,
	mess text NOT NULL,
	mess_ser int(4)
	
) ENGINE=INNODB;

CREATE TABLE crit_ut (
	id int(4) unsigned PRIMARY KEY AUTO_INCREMENT,
	date date NOT NULL,
	libelle varchar(10) NOT NULL,
	mess text NOT NULL,
	crit_ut text
	
) ENGINE=INNODB;

ALTER TABLE series
ADD CONSTRAINT fk_ut_id FOREIGN KEY (ut_id) REFERENCES utilisateurs(id);

ALTER TABLE saisons
ADD CONSTRAINT fk_serie_id FOREIGN KEY (serie_id) REFERENCES series(id);

ALTER TABLE episodes
ADD CONSTRAINT fk_ep_sais FOREIGN KEY (ep_sais) REFERENCES saisons(id);
 
ALTER TABLE episodes
ADD CONSTRAINT fk_rea FOREIGN KEY(rea_id) REFERENCES realisateurs(id);

ALTER TABLE jouer
ADD CONSTRAINT fk_joue FOREIGN KEY (act_id) REFERENCES acteurs(id);

ALTER TABLE jouer
ADD CONSTRAINT fk_role FOREIGN KEY (ser_id) REFERENCES series(id);

ALTER TABLE noter_ser
ADD CONSTRAINT fk_note_ser_id FOREIGN KEY (ser_id) REFERENCES series(id);

ALTER TABLE noter_ser
ADD CONSTRAINT fk_note_ut_id FOREIGN KEY (note_ut) REFERENCES utilisateurs(id);

ALTER TABLE noter_crit
ADD CONSTRAINT fk_note_crit_id FOREIGN KEY (crit_id) REFERENCES crit_ut(id);

ALTER TABLE noter_crit
ADD CONSTRAINT fk_ut_id FOREIGN KEY (ut_id) REFERENCES utilisateurs(id);

ALTER TABLE messages
ADD CONSTRAINT fk_mess_ser_id FOREIGN KEY (mess_ser) REFERENCES utilisateurs(id);

ALTER TABLE crit_ut
ADD CONSTRAINT fk_crit_ut_id FOREIGN KEY (crit_ut) REFERENCES utilisateurs(id);