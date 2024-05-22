CREATE DATABASE IF NOT EXISTS mglsi_news;
USE mglsi_news;

DROP TABLE IF EXISTS Article, Categorie;

CREATE TABLE Article(
	id int primary key auto_increment,
	titre varchar(255),
	contenu text,
	dateCreation datetime DEFAULT NOW(),
	dateModification datetime DEFAULT NOW(),
	categorie int
);


CREATE TABLE Categorie(
	id int primary key auto_increment,
	libelle varchar(20)
);

INSERT INTO Categorie(libelle) VALUES ('Sport'), ('Santé'), ('Education'), ('Politique');

INSERT INTO Article (titre, contenu, categorie) VALUES ('Première victoire du Sénégal', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1),
	('Election en Mauritanie', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 4),
	('Début de la CAN', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1),
	('Pétrole au Sénégal', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 4),
	("Inauguration d'un ENO à l'UVS", 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3);

ALTER TABLE Article ADD CONSTRAINT fk_categorie_article FOREIGN KEY(categorie) REFERENCES Categorie(id);

GRANT ALL PRIVILEGES ON mglsi_news.* TO mglsi_user IDENTIFIED BY 'passer';




INSERT INTO Article (titre, contenu, categorie) VALUES 
('Première victoire du Sénégal', 'Le Sénégal remporte sa première victoire lors du match d\'ouverture de la Coupe d\'Afrique des Nations, battant l\'équipe adverse avec un score de 2-0. Les supporters ont célébré la victoire dans les rues de Dakar.', 1),
('Election en Mauritanie', 'Les élections en Mauritanie ont été marquées par une participation record de la population. Après des mois de campagne électorale, le peuple a exprimé sa volonté dans les urnes.', 4),
('Début de la CAN', 'La Coupe d\'Afrique des Nations débute avec une cérémonie d\'ouverture spectaculaire à Douala. Les équipes nationales se préparent pour affronter leurs adversaires dans un tournoi de football passionnant.', 1),
('Pétrole au Sénégal', 'Une importante découverte de pétrole est annoncée au large des côtes sénégalaises, ouvrant de nouvelles perspectives économiques pour le pays.', 4),
("Inauguration d'un ENO à l'UVS", 'L\'Université Virtuelle du Sénégal inaugure un nouvel Espace Numérique Ouvert, offrant aux étudiants un accès amélioré aux ressources éducatives en ligne.', 3);
