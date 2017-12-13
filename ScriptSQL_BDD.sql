#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Utilisateur
#------------------------------------------------------------

CREATE TABLE Utilisateur(
        id_utilisateur                int (11) Auto_increment  NOT NULL ,
        nom_utilisateur               Char (255) NOT NULL ,
        prenom_utilisateur            Char (255) NOT NULL ,
        date_naissance_utilisateur    Date NOT NULL ,
        actif                         Bool ,
        telephone_utilisateur         Varchar (15) ,
        email_utilisateur             Varchar (255) ,
        H_F                           Bool ,
        Nom_profil_utilisateur        Varchar (255) ,
        mdp_profil_utilisateur        Varchar (255) ,
        statut                        Varchar (1) NOT NULL ,
        date_inscription              Date ,
        date_confirmation_inscription Date ,
        confirmation_inscription      Bool ,
        id_adresse                    Int NOT NULL ,
        id_projet                     Int NOT NULL ,
        id_type_profil                Int NOT NULL ,
        emargement                    Bool ,
        id_reunion                    Int NOT NULL ,
        id_coop                       Int NOT NULL ,
        id_type_utilisateur           Int NOT NULL ,
        PRIMARY KEY (id_utilisateur ) ,
        UNIQUE (Nom_profil_utilisateur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: adresse
#------------------------------------------------------------

CREATE TABLE adresse(
        id_adresse      int (11) Auto_increment  NOT NULL ,
        rue1_adresse    Varchar (512) NOT NULL ,
        rue2_adresse    Varchar (512) ,
        Id_code_commune Int ,
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
        Portable           Varchar (15) ,
        fixe               Varchar (15) ,
        mail               Varchar (255) ,
        chemin_logo        Varchar (512) ,
        description_logo   Varchar (512) ,
        id_utilisateur     Int NOT NULL ,
        id_secteur_projet  Int NOT NULL ,
        id_adresse         Int NOT NULL ,
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
        id_utilisateur_conseiller Int NOT NULL ,
        PRIMARY KEY (id_entretient )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Commune
#------------------------------------------------------------

CREATE TABLE Commune(
        Id_code_commune    int (11) Auto_increment  NOT NULL ,
        Code_commune_INSEE Varchar (5) NOT NULL ,
        Nom_commune        Varchar (255) NOT NULL ,
        Code_postal        Varchar (5) NOT NULL ,
        PRIMARY KEY (Id_code_commune )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: type utilisateur
#------------------------------------------------------------

CREATE TABLE type_utilisateur(
        id_type_utilisateur          int (11) Auto_increment  NOT NULL ,
        designation_type_utilisateur Varchar (255) ,
        PRIMARY KEY (id_type_utilisateur ) ,
        UNIQUE (designation_type_utilisateur )
)ENGINE=InnoDB;

ALTER TABLE Utilisateur ADD CONSTRAINT FK_Utilisateur_id_adresse FOREIGN KEY (id_adresse) REFERENCES adresse(id_adresse);
ALTER TABLE Utilisateur ADD CONSTRAINT FK_Utilisateur_id_projet FOREIGN KEY (id_projet) REFERENCES Projet(id_projet);
ALTER TABLE Utilisateur ADD CONSTRAINT FK_Utilisateur_id_type_profil FOREIGN KEY (id_type_profil) REFERENCES Type_profil(id_type_profil);
ALTER TABLE Utilisateur ADD CONSTRAINT FK_Utilisateur_id_reunion FOREIGN KEY (id_reunion) REFERENCES Reunion_information_collective(id_reunion);
ALTER TABLE Utilisateur ADD CONSTRAINT FK_Utilisateur_id_coop FOREIGN KEY (id_coop) REFERENCES Coop_Emploi(id_coop);
ALTER TABLE Utilisateur ADD CONSTRAINT FK_Utilisateur_id_type_utilisateur FOREIGN KEY (id_type_utilisateur) REFERENCES type_utilisateur(id_type_utilisateur);
ALTER TABLE adresse ADD CONSTRAINT FK_adresse_Id_code_commune FOREIGN KEY (Id_code_commune) REFERENCES Commune(Id_code_commune);
ALTER TABLE Projet ADD CONSTRAINT FK_Projet_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur);
ALTER TABLE Projet ADD CONSTRAINT FK_Projet_id_secteur_projet FOREIGN KEY (id_secteur_projet) REFERENCES secteur_projet(id_secteur_projet);
ALTER TABLE Projet ADD CONSTRAINT FK_Projet_id_adresse FOREIGN KEY (id_adresse) REFERENCES adresse(id_adresse);
ALTER TABLE Reunion_information_collective ADD CONSTRAINT FK_Reunion_information_collective_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur);
ALTER TABLE Reunion_information_collective ADD CONSTRAINT FK_Reunion_information_collective_id_lieu FOREIGN KEY (id_lieu) REFERENCES Lieu(id_lieu);
ALTER TABLE Lieu ADD CONSTRAINT FK_Lieu_id_adresse FOREIGN KEY (id_adresse) REFERENCES adresse(id_adresse);
ALTER TABLE Coop_Emploi ADD CONSTRAINT FK_Coop_Emploi_id_adresse FOREIGN KEY (id_adresse) REFERENCES adresse(id_adresse);
ALTER TABLE entretient_individuel ADD CONSTRAINT FK_entretient_individuel_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur);
ALTER TABLE entretient_individuel ADD CONSTRAINT FK_entretient_individuel_id_utilisateur_conseiller FOREIGN KEY (id_utilisateur_conseiller) REFERENCES Utilisateur(id_utilisateur);

INSERT INTO Commune
VALUES(
(1,10227,"MAROLLES SOUS LIGNIERES",10130),
(2,10166,"LES GRANDES CHAPELLES",10170),
(3,10232,"MERREY SUR ARCE",10110),
(4,10182,"JUVANCOURT",10310),
(5,10190,"LAUBRESSEL",10270),
(6,10173,"ISLE AUMONT",10800),
(7,10196,"LIGNIERES",10130),
(8,10230,"MERGEY",10600),
(9,10212,"MACHY",10320)
)


INSERT INTO adresse
VALUES(
1,"3 rue de la baguette","",1
)

INSERT INTO Coop_Emploi
VALUES(1,"COOP Emploi","0247474747","Coop@emploi.eu",1
)

INSERT INTO Utilisateur
VALUES (
1,"SMITH","JOHN",19900123,1,"0247450809","john.smith123456789@gmail.com",0,"J0hn","root",1,20171213,20171213,1,1,1,0,1,1,1
)

INSERT INTO TYPE profil
VALUES(
1,"candidat"
)

INSERT INTO Lieu 
VALUES(
1,"salle des fête",15,1
)

INSERT INTO Reunion_information_collective
VALUES(
1,20170115110005,20170115110006,1,1
)

INSERT INTO Projet
VALUES(1,"Projtest",0100115156,15236,1,"projet de test","021449844","54545115","test@proj.com","C:\test.ico","icone de test",1,1,1
)

INSERT INTO secteur_projet
VAlUES(
1,"secteur de test"
)

