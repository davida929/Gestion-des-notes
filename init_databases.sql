CREATE DATABASE IF NOT EXISTS  notes;
USE notes ;

-- Creation des tables 
CREATE TABLE IF NOT EXISTS Enseignant (
	id CHAR(8) PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    dateDeNaissance DATE,
    tel VARCHAR(255) NOT NULL,
    mail VARCHAR(255) NOT NULL ,
    `password` CHAR(64) NOT NULL
);

CREATE TABLE IF NOT EXISTS Classe (
	 id INT auto_increment primary key ,
     nom VARCHAR(255)
);
CREATE TABLE IF NOT EXISTS Cours (
	 id_class INT REFERENCES Classe(id) ,
     id_prof CHAR(8) REFERENCES Enseignant(id),
     PRIMARY KEY (id_class, id_prof )
);

CREATE TABLE IF NOT EXISTS Etudiant (
	id CHAR(8) PRIMARY KEY,
    id_class INT ,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    dateDeNaissance DATE,
    tel VARCHAR(255) NOT NULL,
    mail VARCHAR(255) NOT NULL ,
    `password` CHAR(64) NOT NULL,
    FOREIGN KEY (id_class) REFERENCES Classe(id)
);

CREATE TABLE IF NOT EXISTS Devoir (
	 id INT AUTO_INCREMENT PRIMARY KEY ,
	 id_class INT REFERENCES Classe(id) ,
     id_prof CHAR(8) REFERENCES Enseignant(id),
     dateDevoir date ,
     nom VARCHAR(255),
     credit INT
);

CREATE TABLE IF NOT EXISTS Note (
	 id_devoir INT REFERENCES Devoir(id) ,
     id_etudiant CHAR(8) REFERENCES Etudiant(id),
     valeur INT ,
     PRIMARY KEY (id_devoir, id_etudiant )
);
