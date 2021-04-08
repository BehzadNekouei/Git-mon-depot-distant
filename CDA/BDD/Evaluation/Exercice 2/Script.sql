CREATE TABLE Client(
   NClient INT AUTO_INCREMENT,
   PrenomClient VARCHAR(20) NOT NULL,
   NomClient VARCHAR(20) NOT NULL,
   PRIMARY KEY(NClient)
);

CREATE TABLE Commande(
   NCommande INT AUTO_INCREMENT,
   DateCommande DATE NOT NULL,
   MontantCommande INT NOT NULL,
   NClient INT NOT NULL,
   PRIMARY KEY(NCommande),
   FOREIGN KEY(NClient) REFERENCES Client(NClient)
);

CREATE TABLE Article(
   NArticle INT AUTO_INCREMENT,
   DesignationArticle VARCHAR(100) NOT NULL,
   PUArticle INT NOT NULL,
   PRIMARY KEY(NArticle)
);

CREATE TABLE SeComposeDe(
   NCommande INT,
   NArticle INT,
   Qte INT NOT NULL,
   TauxTva INT NOT NULL,
   PRIMARY KEY(NCommande, NArticle),
   FOREIGN KEY(NCommande) REFERENCES Commande(NCommande),
   FOREIGN KEY(NArticle) REFERENCES Article(NArticle)
);