create database projects_techs;

use projects_techs;

create table jeux(
id_jeux int not null auto_increment,
nom_jeu varchar(100) not null,
annee_sortie year,
genre varchar (50) not null,
type varchar(50)not null,
description_courte text,
regles text,
visuel varchar(255) not null,
constraint pk_cv primary key(id_jeux)
)engine=innodb;
create table ressources(
id_ressource int  not null auto_increment ,
type_ressources varchar(20) not null,
url varchar(25) not null,
id_jeux int not null,
constraint pk_cov primary key (id_ressource),
constraint  fk_pk_jeux foreign key (id_jeux) references jeux (id_jeux)
)engine=innodb;
create table evenements(
id_evenement int  not null auto_increment,
titre varchar(100) not null,
duree enum('demi-journee','journee','weekend')not null,
nombre_max int not null,
description text,
constraint pk_cp primary key (id_evenement)
)engine=innodb;

create table participants(
id_participants int not null auto_increment,
nom varchar(50) not null,
prenom varchar(100) not null,
nbre_participants varchar(40) not null,
constraint pk_cy primary key (id_participants)
)engine=innodb;

CREATE TABLE inscription (
  id_inscription INT NOT NULL AUTO_INCREMENT,
  id_participant INT NOT NULL,
  id_evenement INT NOT NULL,
  statut_inscription ENUM('valide','attente','annule') DEFAULT 'attente',
  PRIMARY KEY (id_inscription),
  CONSTRAINT fk_inscription_participant FOREIGN KEY (id_participant) REFERENCES participants(id_participants),
  CONSTRAINT fk_inscription_evenement FOREIGN KEY (id_evenement) REFERENCES evenements(id_evenement)
) ENGINE=InnoDB;



CREATE TABLE jeux_evenements (
  id_evenement INT NOT NULL,
  id_jeu INT NOT NULL,
  PRIMARY KEY (id_evenement, id_jeu),
  CONSTRAINT fk_jeux_evenements_evenement FOREIGN KEY (id_evenement) REFERENCES evenements(id_evenement) ON DELETE CASCADE,
  CONSTRAINT fk_jeux_evenements_jeu FOREIGN KEY (id_jeu) REFERENCES jeux(id_jeux) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE administrateurs (
  id_admin INT  not null AUTO_INCREMENT,
  nom_utilisateur VARCHAR(50) NOT NULL UNIQUE,
  mot_de_passe_hache VARCHAR(255) NOT null,
  email varchar(99) not null,
  constraint pk_cvu primary key (id_admin)
)engine=innodb;
CREATE TABLE choix_jeux (
  id_inscription INT NOT NULL,
  id_jeu INT NOT NULL,
  PRIMARY KEY (id_inscription, id_jeu),
  CONSTRAINT fk_choix_inscription FOREIGN KEY (id_inscription) REFERENCES inscription(id_inscription) ON DELETE CASCADE,
CONSTRAINT fk_choix_jeux FOREIGN KEY (id_jeu) REFERENCES jeux(id_jeux) ON DELETE CASCADE
) ENGINE=InnoDB;
CREATE TABLE dashboard (
  id_dashboard INT NOT NULL AUTO_INCREMENT,
  id_admin INT NOT NULL,
  id_evenement INT NOT NULL,
  nbre_inscriptions INT,
  places_restantes INT,
  PRIMARY KEY (id_dashboard),
  CONSTRAINT fk_dashboard_admin FOREIGN KEY (id_admin) REFERENCES administrateurs(id_admin) ON DELETE CASCADE,
  CONSTRAINT fk_dashboard_evenement FOREIGN KEY (id_evenement) REFERENCES evenements(id_evenement) ON DELETE CASCADE
) ENGINE=InnoDB;
CREATE TABLE participant (
    id_participant INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    nombre_d_accompagnants INT,
    statut_inscription ENUM('valide','attente','annule') DEFAULT 'attente',
    id_evenement INT NOT NULL,
    CONSTRAINT pk_cty PRIMARY KEY (id_participant),
    CONSTRAINT fk_cty_evenement FOREIGN KEY (id_evenement) 
        REFERENCES evenements(id_evenement) ON DELETE CASCADE
) ENGINE=InnoDB;

insert into jeux(nom_jeu,annee_sortie,genre,type,description_courte,regles,visuel)
              values ('tic-tac-toe',2000,'reflexion','competitif','','',''),
                     ('domino',2001,'reflexion','competitif','','',''),
                     ('eches',2002,'strategie','competitif','','','');
insert into evenements(titre,duree, nombre_max,description)
                values('tic-tac-toe','demi-journee','4',''),
                      ('domino','demi-journee','5','');

