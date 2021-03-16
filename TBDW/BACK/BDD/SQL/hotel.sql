DROP DATABASE IF EXISTS hotel;

CREATE DATABASE hotel;

USE hotel;


CREATE TABLE Station (
    num_station INT NOT NULL PRIMARY KEY,
    nom_station VARCHAR(50) NOT NULL
);

CREATE TABLE Client (
    adresse_client VARCHAR(50) NOT NULL,
    nom_client VARCHAR(50) NOT NULL,
    prenom_client VARCHAR(50) NOT NULL,
    num_client INT NOT NULL PRIMARY KEY
);


CREATE TABLE Hotel (
    capacite_hotel  INT NOT NULL,
    categorie_hotel INT NOT NULL,
    nom_hotel VARCHAR(50) NOT NULL,
    adresse_hotel VARCHAR(50) NOT NULL,
    num_hotel INT NOT NULL PRIMARY KEY,
    num_station INT NOT NULL,
    FOREIGN KEY (num_station) REFERENCES Station(num_station)
);


CREATE TABLE Chambre (
    capacite_chambre INT NOT NULL,
    degre_confort INT NOT NULL,
    exposition VARCHAR(50) NOT NULL,
    type_chambre VARCHAR(50) NOT NULL,
    num_chambre INT NOT NULL PRIMARY KEY,
    num_hotel INT NOT NULL,
    FOREIGN KEY (num_hotel) REFERENCES hotel(num_hotel)
);
CREATE TABLE Reservation (
    num_chambre INT NOT NULL ,
    FOREIGN KEY (num_chambre) REFERENCES Chambre(num_chambre),
    num_client INT NOT NULL ,
    FOREIGN KEY (num_client) REFERENCES Client(num_client),
    date_debut DATETIME,
    date_fin DATETIME,
    date_reservation DATETIME,
    montant_arrhes REAL NOT NULL,
    prix_total REAL NOT NULL
    ,CONSTRAINT Reservation PRIMARY KEY (num_chambre,num_client)
);
