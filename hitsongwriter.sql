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


# INSERT INTO `minorScales` (`scale`, `firstDegree`, `secondDegree`, `thirdDegree`, `fourthDegree`, `fifthDegree`, `sixthDegree`, `seventhDegree`)
# VALUES ('C minor','Cmin','Ddim','Eb','Fmin','Gmin','Ab','Bb'),
# ('C# minor','C#min','D#dim','E','F#min','G#min','A','B'),
# ('D minor','Dmin','Edim','F','Gmin','Amin','Bb','C'),
# ('Eb minor','Ebmin','Fdim','Gb','Abmin','Bbmin','Cb','Db'),
# ('E minor','Emin','F#dim','G','Amin','Bmin','C','D'),
# ('F minor','Fmin','Gdim','Ab','Bbmin','Cmin','Db','Eb'),
# ('F# minor','F#min','G#dim','A','Bmin','C#min','D','E'),
# ('G minor','Gmin','Adim','Bb','Cmin','Dmin','Eb','F'),
# ('Ab minor','Abmin','Bbdim','Cb','Dbmin','Ebmin','Fb','Gb'),
# ('A minor','Amin','Bdim','C','Dmin','Emin','F','G'),
# ('Bb minor','Bbmin','Cdim','Db','Ebmin','Fmin','Gb','Ab'),
# ('B minor','Bmin','C#dim','D','Emin','F#min','G','A');

# INSERT INTO `majorScales` (`scale`, `firstDegree`, `secondDegree`, `thirdDegree`, `fourthDegree`, `fifthDegree`, `sixthDegree`, `seventhDegree`)
# VALUES ('C major','C','Dmin','Emin','F','G','Amin','Bdim'),
# ('C# major','C#','D#min','E#min','F#','G#','A#min','B#dim'),
# ('D major','D','Emin','F#min','G','A','Bmin','C#dim'),
# ('Eb major','Eb','Fmin','Gmin','Ab','Bb','Cmin','Ddim'),
# ('E major','E','F#min','G#min','A','B','C#min','D#dim'),
# ('F major','F','Gmin','Amin','Bb','C','Dmin','Edim'),
# ('F# major','F#','G#min','A#min','B','C#','D#min','E#dim'),
# ('G major','G','Amin','Bmin','C','D','Emin','F#dim'),
# ('Ab major','Ab','Bbmin','Cmin','Db','Eb','Fmin','Gdim'),
# ('A major','A','Bmin','C#min','D','E','F#min','G#dim'),
# ('Bb major','Bb','Cmin','Dmin','Eb','F','Gmin','Adim'),
# ('B major','B','C#min','D#min','E','F#','G#min','A#dim');

# ALTER TABLE personalSpace 
# ADD CONSTRAINT FK_personalSpace_id_users
#  FOREIGN KEY (id_userName)
#  REFERENCES users (id)
#  ON DELETE CASCADE
#  ON UPDATE NO ACTION;


