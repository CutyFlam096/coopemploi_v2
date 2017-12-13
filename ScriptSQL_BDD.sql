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
        id_sexe                    Int NOT NULL ,
        id_adresse                 Int NOT NULL ,
        id_projet                  Int NOT NULL ,
        id_type_utilisateur        Int NOT NULL ,
        id_coop                    Int NOT NULL ,
        id_profil                  Int NOT NULL ,
        PRIMARY KEY (id_utilisateur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Sexe
#------------------------------------------------------------

CREATE TABLE Sexe(
        id_sexe          int (11) Auto_increment  NOT NULL ,
        designation_sexe Varchar (25) NOT NULL ,
        PRIMARY KEY (id_sexe )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: adresse
#------------------------------------------------------------

CREATE TABLE adresse(
        id_adresse     int (11) Auto_increment  NOT NULL ,
        rue1_adresse   Varchar (512) NOT NULL ,
        rue2_adresse   Varchar (512) ,
        id_code_postal Int NOT NULL ,
        PRIMARY KEY (id_adresse )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Code Postal
#------------------------------------------------------------

CREATE TABLE Code_Postal(
        id_code_postal Int NOT NULL ,
        code_postal    Varchar (5) NOT NULL ,
        id_ville       Int NOT NULL ,
        PRIMARY KEY (id_code_postal )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Ville
#------------------------------------------------------------

CREATE TABLE Ville(
        id_ville          int (11) Auto_increment  NOT NULL ,
        designation_ville Varchar (255) NOT NULL ,
        id_pays           Int NOT NULL ,
        PRIMARY KEY (id_ville )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Pays
#------------------------------------------------------------

CREATE TABLE Pays(
        id_pays          int (11) Auto_increment  NOT NULL ,
        designation_pays Varchar (255) NOT NULL ,
        PRIMARY KEY (id_pays )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Type Utilisateur
#------------------------------------------------------------

CREATE TABLE Type_Utilisateur(
        id_type_utilisateur          int (11) Auto_increment  NOT NULL ,
        designation_type_utilisateur Varchar (255) NOT NULL ,
        PRIMARY KEY (id_type_utilisateur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Projet
#------------------------------------------------------------

CREATE TABLE Projet(
        id_projet                  int (11) Auto_increment  NOT NULL ,
        nom_projet                 Varchar (255) NOT NULL ,
        SIREN                      Varchar (9) ,
        NIC                        Varchar (4) ,
        check_digit_SIRET          Varchar (1) ,
        description_projet         Varchar (2056) ,
        id_utilisateur             Int NOT NULL ,
        id_type_projet             Int NOT NULL ,
        id_utilisateur_Utilisateur Int NOT NULL ,
        PRIMARY KEY (id_projet )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Type de projet
#------------------------------------------------------------

CREATE TABLE Type_de_projet(
        id_type_projet          int (11) Auto_increment  NOT NULL ,
        designation_type_projet Varchar (255) NOT NULL ,
        PRIMARY KEY (id_type_projet )
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
# Table: Reunion
#------------------------------------------------------------

CREATE TABLE Reunion(
        id_reunion               int (11) Auto_increment  NOT NULL ,
        date_heure_debut_reunion Datetime ,
        date_heure_fin_reunion   Datetime ,
        id_utilisateur           Int NOT NULL ,
        id_lieu                  Int NOT NULL ,
        id_type_reunion          Int NOT NULL ,
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
# Table: Type Reunion
#------------------------------------------------------------

CREATE TABLE Type_Reunion(
        id_type_reunion          int (11) Auto_increment  NOT NULL ,
        designation_type_reunion Varchar (255) NOT NULL ,
        PRIMARY KEY (id_type_reunion )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Prestateur
#------------------------------------------------------------

CREATE TABLE Prestateur(
        id_prescripteur          int (11) Auto_increment  NOT NULL ,
        designation_prescripteur Varchar (255) NOT NULL ,
        PRIMARY KEY (id_prescripteur )
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
        id_entretient      int (11) Auto_increment  NOT NULL ,
        date_entretient    Date ,
        rapport_entretient Varchar (2048) ,
        id_utilisateur     Int NOT NULL ,
        id_projet          Int NOT NULL ,
        PRIMARY KEY (id_entretient )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Profil
#------------------------------------------------------------

CREATE TABLE Profil(
        id_profil      int (11) Auto_increment  NOT NULL ,
        nom_profil     Varchar (255) NOT NULL ,
        mdp_profil     Varchar (255) NOT NULL ,
        id_utilisateur Int NOT NULL ,
        PRIMARY KEY (id_profil ) ,
        UNIQUE (nom_profil )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: concerner
#------------------------------------------------------------

CREATE TABLE concerner(
        id_projet         Int NOT NULL ,
        id_secteur_projet Int NOT NULL ,
        PRIMARY KEY (id_projet ,id_secteur_projet )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: participer
#------------------------------------------------------------

CREATE TABLE participer(
        emargement     Bool ,
        id_reunion     Int NOT NULL ,
        id_utilisateur Int NOT NULL ,
        PRIMARY KEY (id_reunion ,id_utilisateur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: porter
#------------------------------------------------------------

CREATE TABLE porter(
        id_reunion        Int NOT NULL ,
        id_secteur_projet Int NOT NULL ,
        PRIMARY KEY (id_reunion ,id_secteur_projet )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: animer
#------------------------------------------------------------

CREATE TABLE animer(
        id_prescripteur Int NOT NULL ,
        id_reunion      Int NOT NULL ,
        PRIMARY KEY (id_prescripteur ,id_reunion )
)ENGINE=InnoDB;

ALTER TABLE Utilisateur ADD CONSTRAINT FK_Utilisateur_id_sexe FOREIGN KEY (id_sexe) REFERENCES Sexe(id_sexe);
ALTER TABLE Utilisateur ADD CONSTRAINT FK_Utilisateur_id_adresse FOREIGN KEY (id_adresse) REFERENCES adresse(id_adresse);
ALTER TABLE Utilisateur ADD CONSTRAINT FK_Utilisateur_id_projet FOREIGN KEY (id_projet) REFERENCES Projet(id_projet);
ALTER TABLE Utilisateur ADD CONSTRAINT FK_Utilisateur_id_type_utilisateur FOREIGN KEY (id_type_utilisateur) REFERENCES Type_Utilisateur(id_type_utilisateur);
ALTER TABLE Utilisateur ADD CONSTRAINT FK_Utilisateur_id_coop FOREIGN KEY (id_coop) REFERENCES Coop_Emploi(id_coop);
ALTER TABLE Utilisateur ADD CONSTRAINT FK_Utilisateur_id_profil FOREIGN KEY (id_profil) REFERENCES Profil(id_profil);
ALTER TABLE adresse ADD CONSTRAINT FK_adresse_id_code_postal FOREIGN KEY (id_code_postal) REFERENCES Code_Postal(id_code_postal);
ALTER TABLE Code_Postal ADD CONSTRAINT FK_Code_Postal_id_ville FOREIGN KEY (id_ville) REFERENCES Ville(id_ville);
ALTER TABLE Ville ADD CONSTRAINT FK_Ville_id_pays FOREIGN KEY (id_pays) REFERENCES Pays(id_pays);
ALTER TABLE Projet ADD CONSTRAINT FK_Projet_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur);
ALTER TABLE Projet ADD CONSTRAINT FK_Projet_id_type_projet FOREIGN KEY (id_type_projet) REFERENCES Type_de_projet(id_type_projet);
ALTER TABLE Projet ADD CONSTRAINT FK_Projet_id_utilisateur_Utilisateur FOREIGN KEY (id_utilisateur_Utilisateur) REFERENCES Utilisateur(id_utilisateur);
ALTER TABLE Reunion ADD CONSTRAINT FK_Reunion_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur);
ALTER TABLE Reunion ADD CONSTRAINT FK_Reunion_id_lieu FOREIGN KEY (id_lieu) REFERENCES Lieu(id_lieu);
ALTER TABLE Reunion ADD CONSTRAINT FK_Reunion_id_type_reunion FOREIGN KEY (id_type_reunion) REFERENCES Type_Reunion(id_type_reunion);
ALTER TABLE Lieu ADD CONSTRAINT FK_Lieu_id_adresse FOREIGN KEY (id_adresse) REFERENCES adresse(id_adresse);
ALTER TABLE Coop_Emploi ADD CONSTRAINT FK_Coop_Emploi_id_adresse FOREIGN KEY (id_adresse) REFERENCES adresse(id_adresse);
ALTER TABLE entretient_individuel ADD CONSTRAINT FK_entretient_individuel_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur);
ALTER TABLE entretient_individuel ADD CONSTRAINT FK_entretient_individuel_id_projet FOREIGN KEY (id_projet) REFERENCES Projet(id_projet);
ALTER TABLE Profil ADD CONSTRAINT FK_Profil_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur);
ALTER TABLE concerner ADD CONSTRAINT FK_concerner_id_projet FOREIGN KEY (id_projet) REFERENCES Projet(id_projet);
ALTER TABLE concerner ADD CONSTRAINT FK_concerner_id_secteur_projet FOREIGN KEY (id_secteur_projet) REFERENCES secteur_projet(id_secteur_projet);
ALTER TABLE participer ADD CONSTRAINT FK_participer_id_reunion FOREIGN KEY (id_reunion) REFERENCES Reunion(id_reunion);
ALTER TABLE participer ADD CONSTRAINT FK_participer_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur);
ALTER TABLE porter ADD CONSTRAINT FK_porter_id_reunion FOREIGN KEY (id_reunion) REFERENCES Reunion(id_reunion);
ALTER TABLE porter ADD CONSTRAINT FK_porter_id_secteur_projet FOREIGN KEY (id_secteur_projet) REFERENCES secteur_projet(id_secteur_projet);
ALTER TABLE animer ADD CONSTRAINT FK_animer_id_prescripteur FOREIGN KEY (id_prescripteur) REFERENCES Prestateur(id_prescripteur);
ALTER TABLE animer ADD CONSTRAINT FK_animer_id_reunion FOREIGN KEY (id_reunion) REFERENCES Reunion(id_reunion);
