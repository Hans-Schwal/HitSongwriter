#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

CREATE DATABASE IF NOT EXISTS `hitsongwriter` CHARACTER SET `utf8`;
USE `hitsongwriter`;

#------------------------------------------------------------
# Table: roles
#------------------------------------------------------------

CREATE TABLE roles(
        id    Int  Auto_increment  NOT NULL ,
        name  Varchar(20) NOT NULL ,        
	CONSTRAINT roles_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        id               Int  Auto_increment  NOT NULL ,
        lastName         Varchar (50) NOT NULL ,
        firstName        Varchar (50) NOT NULL ,
        mail             Varchar (50) NOT NULL ,
        userName         Varchar (50) NOT NULL ,
        password         Varchar (65) NOT NULL ,
        id_roles_defines Int NOT NULL
	,CONSTRAINT users_PK PRIMARY KEY (id)

	,CONSTRAINT users_roles_FK FOREIGN KEY (id_roles_defines) REFERENCES roles(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: compositionCategory
#------------------------------------------------------------

CREATE TABLE compositionCategory(
        id           Int  Auto_increment  NOT NULL ,
        categoryName Varchar (50) NOT NULL ,
        firstDegree  Int NOT NULL ,
        secondDegree Int NOT NULL ,
        thirdDegree  Int NOT NULL ,
        fourthDegree Int NOT NULL
	,CONSTRAINT compositionCategory_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: savedProgressions
#------------------------------------------------------------

CREATE TABLE savedProgressions(
        id                     Int  Auto_increment  NOT NULL ,
        scaleName              Varchar (50) NOT NULL ,
        scaleDegrees           Varchar (50) NOT NULL ,
        id_users               Int NOT NULL ,
        id_compositionCategory Int NOT NULL
	,CONSTRAINT savedProgressions_PK PRIMARY KEY (id)

	,CONSTRAINT savedProgressions_users_FK FOREIGN KEY (id_users) REFERENCES users(id)
	,CONSTRAINT savedProgressions_compositionCategory0_FK FOREIGN KEY (id_compositionCategory) REFERENCES compositionCategory(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: popularProgressions
#------------------------------------------------------------

CREATE TABLE popularProgressions(
        id                     Int  Auto_increment  NOT NULL ,
        progressionName        Varchar (50) NOT NULL ,
        scaleDegrees           Varchar (50) NOT NULL ,
        id_compositionCategory Int NOT NULL
	,CONSTRAINT popularProgressions_PK PRIMARY KEY (id)

	,CONSTRAINT popularProgressions_compositionCategory_FK FOREIGN KEY (id_compositionCategory) REFERENCES compositionCategory(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: note
#------------------------------------------------------------

CREATE TABLE note(
        id   Int  Auto_increment  NOT NULL ,
        note Varchar (11) NOT NULL
	,CONSTRAINT note_PK PRIMARY KEY (id)
)ENGINE=InnoDB;

INSERT INTO `popularProgressions` (`progressionName`, `scaleDegrees`)
VALUES ('La plus populaire de toutes!','I V vi IV'),
('Efficace dans tous les styles','vi V IV V'),
('Ces changements magiques','I vi IV V'),
('En gain de popularité','I IV vi V'),
('Intemporelle','I V IV V'),
('La préférée','vi I IV ii');



