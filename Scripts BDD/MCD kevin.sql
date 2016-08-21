#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Genres
#------------------------------------------------------------

CREATE TABLE Genres(
        idGenre      int (11) Auto_increment  NOT NULL ,
        libelleGenre Varchar (25) ,
        ageConseille Varchar (25) ,
        PRIMARY KEY (idGenre )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Producteurs
#------------------------------------------------------------

CREATE TABLE Producteurs(
        idProducteur     int (11) Auto_increment  NOT NULL ,
        nomProducteur    Varchar (25) ,
        prenomProducteur Varchar (25) ,
        PRIMARY KEY (idProducteur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Series
#------------------------------------------------------------

CREATE TABLE Series(
        idSerie          int (11) Auto_increment  NOT NULL ,
        nomSerie         Varchar (25) ,
        nomOriginalSerie Varchar (25) ,
        synopsisSerie    Varchar (25) ,
        resumeSerie      Varchar (25) ,
        anneeProdSerie   Year ,
        posterSerie      Varchar (25) ,
        idUtilisateur    Int ,
        PRIMARY KEY (idSerie )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ActeursPrincipaux
#------------------------------------------------------------

CREATE TABLE ActeursPrincipaux(
        idActeur     int (11) Auto_increment  NOT NULL ,
        nomActeur    Varchar (25) ,
        prenomActeur Varchar (25) ,
        PRIMARY KEY (idActeur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CritiquesUtilisateurs
#------------------------------------------------------------

CREATE TABLE CritiquesUtilisateurs(
        idCritique      int (11) Auto_increment  NOT NULL ,
        libelleCritique Varchar (25) ,
        idSerie         Int ,
        idUtilisateur   Int ,
        PRIMARY KEY (idCritique )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Utilisateurs
#------------------------------------------------------------

CREATE TABLE Utilisateurs(
        idUtilisateur     int (11) Auto_increment  NOT NULL ,
        nomUtilisateur    Varchar (25) ,
        prenomUtilisateur Varchar (25) ,
        pseudoUtilisateur Varchar (25) ,
        mpdUtilisateur    Varchar (25) ,
        mailUtilisateur   Varchar (25) ,
        dateNaissance     Date ,
        photoProfil       Varchar (25) ,
        PRIMARY KEY (idUtilisateur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Saisons
#------------------------------------------------------------

CREATE TABLE Saisons(
        idSaison        int (11) Auto_increment  NOT NULL ,
        nomSaison       Varchar (25) ,
        numeroSaison    Int ,
        resumeSaison    Varchar (25) ,
        anneeProduction Year ,
        posterSaison    Varchar (25) ,
        idSerie         Int ,
        PRIMARY KEY (idSaison )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Episodes
#------------------------------------------------------------

CREATE TABLE Episodes(
        idEpisode          int (11) Auto_increment  NOT NULL ,
        numeroEpisode      Int ,
        nomEpisode         Varchar (25) ,
        nomOriginalEpisode Varchar (25) ,
        resumeEpisode      Varchar (25) ,
        idSaison           Int ,
        idRealisateur      Int ,
        PRIMARY KEY (idEpisode )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Realisateurs
#------------------------------------------------------------

CREATE TABLE Realisateurs(
        idRealisateur     int (11) Auto_increment  NOT NULL ,
        nomRealisateur    Varchar (25) ,
        prenomRealisateur Varchar (25) ,
        PRIMARY KEY (idRealisateur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Messages
#------------------------------------------------------------

CREATE TABLE Messages(
        idMessage     int (11) Auto_increment  NOT NULL ,
        dateMessage   Date ,
        message       Varchar (25) ,
        idUtilisateur Int ,
        PRIMARY KEY (idMessage )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Appartenir
#------------------------------------------------------------

CREATE TABLE Appartenir(
        idSerie Int NOT NULL ,
        idGenre Int NOT NULL ,
        PRIMARY KEY (idSerie ,idGenre )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Produire
#------------------------------------------------------------

CREATE TABLE Produire(
        idSerie      Int NOT NULL ,
        idProducteur Int NOT NULL ,
        PRIMARY KEY (idSerie ,idProducteur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Jouer
#------------------------------------------------------------

CREATE TABLE Jouer(
        role     Varchar (25) ,
        idActeur Int NOT NULL ,
        idSerie  Int NOT NULL ,
        PRIMARY KEY (idActeur ,idSerie )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Suivre
#------------------------------------------------------------

CREATE TABLE Suivre(
        idSerie       Int NOT NULL ,
        idUtilisateur Int NOT NULL ,
        PRIMARY KEY (idSerie ,idUtilisateur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Noter_ser
#------------------------------------------------------------

CREATE TABLE Noter_ser(
        note          Varchar (25) ,
        idSerie       Int NOT NULL ,
        idUtilisateur Int NOT NULL ,
        PRIMARY KEY (idSerie ,idUtilisateur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Noter_crit
#------------------------------------------------------------

CREATE TABLE Noter_crit(
        note          Varchar (25) ,
        idUtilisateur Int NOT NULL ,
        idCritique    Int NOT NULL ,
        PRIMARY KEY (idUtilisateur ,idCritique )
)ENGINE=InnoDB;

ALTER TABLE Series ADD CONSTRAINT FK_Series_idUtilisateur FOREIGN KEY (idUtilisateur) REFERENCES Utilisateurs(idUtilisateur);
ALTER TABLE CritiquesUtilisateurs ADD CONSTRAINT FK_CritiquesUtilisateurs_idSerie FOREIGN KEY (idSerie) REFERENCES Series(idSerie);
ALTER TABLE CritiquesUtilisateurs ADD CONSTRAINT FK_CritiquesUtilisateurs_idUtilisateur FOREIGN KEY (idUtilisateur) REFERENCES Utilisateurs(idUtilisateur);
ALTER TABLE Saisons ADD CONSTRAINT FK_Saisons_idSerie FOREIGN KEY (idSerie) REFERENCES Series(idSerie);
ALTER TABLE Episodes ADD CONSTRAINT FK_Episodes_idSaison FOREIGN KEY (idSaison) REFERENCES Saisons(idSaison);
ALTER TABLE Episodes ADD CONSTRAINT FK_Episodes_idRealisateur FOREIGN KEY (idRealisateur) REFERENCES Realisateurs(idRealisateur);
ALTER TABLE Messages ADD CONSTRAINT FK_Messages_idUtilisateur FOREIGN KEY (idUtilisateur) REFERENCES Utilisateurs(idUtilisateur);
ALTER TABLE Appartenir ADD CONSTRAINT FK_Appartenir_idSerie FOREIGN KEY (idSerie) REFERENCES Series(idSerie);
ALTER TABLE Appartenir ADD CONSTRAINT FK_Appartenir_idGenre FOREIGN KEY (idGenre) REFERENCES Genres(idGenre);
ALTER TABLE Produire ADD CONSTRAINT FK_Produire_idSerie FOREIGN KEY (idSerie) REFERENCES Series(idSerie);
ALTER TABLE Produire ADD CONSTRAINT FK_Produire_idProducteur FOREIGN KEY (idProducteur) REFERENCES Producteurs(idProducteur);
ALTER TABLE Jouer ADD CONSTRAINT FK_Jouer_idActeur FOREIGN KEY (idActeur) REFERENCES ActeursPrincipaux(idActeur);
ALTER TABLE Jouer ADD CONSTRAINT FK_Jouer_idSerie FOREIGN KEY (idSerie) REFERENCES Series(idSerie);
ALTER TABLE Suivre ADD CONSTRAINT FK_Suivre_idSerie FOREIGN KEY (idSerie) REFERENCES Series(idSerie);
ALTER TABLE Suivre ADD CONSTRAINT FK_Suivre_idUtilisateur FOREIGN KEY (idUtilisateur) REFERENCES Utilisateurs(idUtilisateur);
ALTER TABLE Noter_ser ADD CONSTRAINT FK_Noter_ser_idSerie FOREIGN KEY (idSerie) REFERENCES Series(idSerie);
ALTER TABLE Noter_ser ADD CONSTRAINT FK_Noter_ser_idUtilisateur FOREIGN KEY (idUtilisateur) REFERENCES Utilisateurs(idUtilisateur);
ALTER TABLE Noter_crit ADD CONSTRAINT FK_Noter_crit_idUtilisateur FOREIGN KEY (idUtilisateur) REFERENCES Utilisateurs(idUtilisateur);
ALTER TABLE Noter_crit ADD CONSTRAINT FK_Noter_crit_idCritique FOREIGN KEY (idCritique) REFERENCES CritiquesUtilisateurs(idCritique);
