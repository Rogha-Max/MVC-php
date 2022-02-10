INSERT INTO theme (nom)
 VALUES
 ('Communication et écriture'),
 ('Programmation'),
 ('Design'),
 ('Autres');

INSERT INTO domaine (nom, theme)
 VALUES
 ('Information communication', 1),
 ('Ecriture médias numériques', 1),
 ('Algorithmique', 2),
 ('Web', 2),
 ('Suite Adobe', 3),
 ('Dessin', 3),
 ('Automobile', 4);

INSERT INTO competences (compétence, etat, domaine)
 VALUES
 ('HTML/CSS', 2, 4),
 ('JavaScript', 1, 3),
 ('Savoir rédiger un WebDoc', 2, 2),
 ('Composants moteurs', 2, 7),
 ('Photoshop', 1, 5),
 ('Illustrator', 1, 5),
 ('PHP', 1, 4),
 ('réalisation reportage', 1, 1);