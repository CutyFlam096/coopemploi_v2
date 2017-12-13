#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Utilisateur
#------------------------------------------------------------

CREATE TABLE Utilisateur(
        id_utilisateur             int (11) Auto_increment  NOT NULL ,
        nom_utilisateur            Char (255) NOT NULL ,
        prenom_utilisateur         Char (255) NOT NULL ,
        date_naissance_utilisateur Date NOT NULL ,
        actif                      Bool ,
        telephone_utilisateur      Varchar (15) ,
        email_utilisateur          Varchar (255) ,
        H/F                        Bool ,
        Nom_profil_utilisateur     Varchar (255) ,
        mdp_profil_utilisateur     Varchar (255) ,
        type_utilisateur           Varchar (1) ,
        statut                     Varchar (1) NOT NULL ,
        id_adresse                 Int NOT NULL ,
        id_projet                  Int NOT NULL ,
        id_type_profil             Int NOT NULL ,
        emargement                 Bool ,
        id_reunion                 Int NOT NULL ,
        id_coop                    Int NOT NULL ,
        PRIMARY KEY (id_utilisateur ) ,
        UNIQUE (Nom_profil_utilisateur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: adresse
#------------------------------------------------------------

CREATE TABLE adresse(
        id_adresse         int (11) Auto_increment  NOT NULL ,
        rue1_adresse       Varchar (512) NOT NULL ,
        rue2_adresse       Varchar (512) ,
        Code_commune_INSEE Int NOT NULL ,
        PRIMARY KEY (id_adresse )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Type profil
#------------------------------------------------------------

CREATE TABLE Type_profil(
        id_type_profil          int (11) Auto_increment  NOT NULL ,
        designation_type_profil Varchar (255) NOT NULL ,
        PRIMARY KEY (id_type_profil )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Projet
#------------------------------------------------------------

CREATE TABLE Projet(
        id_projet          int (11) Auto_increment  NOT NULL ,
        nom_projet         Varchar (255) NOT NULL ,
        SIREN              Varchar (9) ,
        NIC                Varchar (4) ,
        check_digit_SIRET  Varchar (1) ,
        description_projet Varchar (2056) ,
        id_utilisateur     Int NOT NULL ,
        id_secteur_projet  Int NOT NULL ,
        PRIMARY KEY (id_projet )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: secteur projet
#------------------------------------------------------------

CREATE TABLE secteur_projet(
        id_secteur_projet          int (11) Auto_increment  NOT NULL ,
        designation_secteur_projet Varchar (255) NOT NULL ,
        PRIMARY KEY (id_secteur_projet )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Reunion information collective
#------------------------------------------------------------

CREATE TABLE Reunion_information_collective(
        id_reunion               int (11) Auto_increment  NOT NULL ,
        date_heure_debut_reunion Datetime ,
        date_heure_fin_reunion   Datetime ,
        id_utilisateur           Int NOT NULL ,
        id_lieu                  Int NOT NULL ,
        PRIMARY KEY (id_reunion )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Lieu
#------------------------------------------------------------

CREATE TABLE Lieu(
        id_lieu          int (11) Auto_increment  NOT NULL ,
        designation_lieu Varchar (255) ,
        place_lieu       Int ,
        id_adresse       Int NOT NULL ,
        PRIMARY KEY (id_lieu )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Coop Emploi
#------------------------------------------------------------

CREATE TABLE Coop_Emploi(
        id_coop          int (11) Auto_increment  NOT NULL ,
        designation_coop Varchar (255) NOT NULL ,
        telephone_coop   Varchar (15) NOT NULL ,
        email            Varchar (255) NOT NULL ,
        id_adresse       Int NOT NULL ,
        PRIMARY KEY (id_coop )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: entretient individuel
#------------------------------------------------------------

CREATE TABLE entretient_individuel(
        id_entretient              int (11) Auto_increment  NOT NULL ,
        date_entretient            Date ,
        rapport_entretient         Varchar (2048) ,
        id_utilisateur             Int NOT NULL ,
        id_utilisateur_Utilisateur Int NOT NULL ,
        PRIMARY KEY (id_entretient )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Commune
#------------------------------------------------------------

CREATE TABLE Commune(
        Code_commune_INSEE Int NOT NULL ,
        Nom_commune        Varchar (255) NOT NULL ,
        Code_postal        Varchar (5) NOT NULL ,
        PRIMARY KEY (Code_commune_INSEE )
)ENGINE=InnoDB;

ALTER TABLE Utilisateur ADD CONSTRAINT FK_Utilisateur_id_adresse FOREIGN KEY (id_adresse) REFERENCES adresse(id_adresse);
ALTER TABLE Utilisateur ADD CONSTRAINT FK_Utilisateur_id_projet FOREIGN KEY (id_projet) REFERENCES Projet(id_projet);
ALTER TABLE Utilisateur ADD CONSTRAINT FK_Utilisateur_id_type_profil FOREIGN KEY (id_type_profil) REFERENCES Type_profil(id_type_profil);
ALTER TABLE Utilisateur ADD CONSTRAINT FK_Utilisateur_id_reunion FOREIGN KEY (id_reunion) REFERENCES Reunion_information_collective(id_reunion);
ALTER TABLE Utilisateur ADD CONSTRAINT FK_Utilisateur_id_coop FOREIGN KEY (id_coop) REFERENCES Coop_Emploi(id_coop);
ALTER TABLE adresse ADD CONSTRAINT FK_adresse_Code_commune_INSEE FOREIGN KEY (Code_commune_INSEE) REFERENCES Commune(Code_commune_INSEE);
ALTER TABLE Projet ADD CONSTRAINT FK_Projet_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur);
ALTER TABLE Projet ADD CONSTRAINT FK_Projet_id_secteur_projet FOREIGN KEY (id_secteur_projet) REFERENCES secteur_projet(id_secteur_projet);
ALTER TABLE Reunion_information_collective ADD CONSTRAINT FK_Reunion_information_collective_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur);
ALTER TABLE Reunion_information_collective ADD CONSTRAINT FK_Reunion_information_collective_id_lieu FOREIGN KEY (id_lieu) REFERENCES Lieu(id_lieu);
ALTER TABLE Lieu ADD CONSTRAINT FK_Lieu_id_adresse FOREIGN KEY (id_adresse) REFERENCES adresse(id_adresse);
ALTER TABLE Coop_Emploi ADD CONSTRAINT FK_Coop_Emploi_id_adresse FOREIGN KEY (id_adresse) REFERENCES adresse(id_adresse);
ALTER TABLE entretient_individuel ADD CONSTRAINT FK_entretient_individuel_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur);
ALTER TABLE entretient_individuel ADD CONSTRAINT FK_entretient_individuel_id_utilisateur_Utilisateur FOREIGN KEY (id_utilisateur_Utilisateur) REFERENCES Utilisateur(id_utilisateur);
