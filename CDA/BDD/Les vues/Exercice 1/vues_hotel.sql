--  Afficher la liste des hôtels avec leur station
CREATE VIEW v_1
AS 
SELECT hot_nom, sta_nom 
FROM hotel, station
WHERE sta_id=hot_sta_id;
-- Afficher la liste des chambres et leur hôtel
CREATE VIEW v_2
AS 
SELECT cha_id, cha_numero, hot_nom
FROM hotel, chambre
WHERE chambre.cha_hot_id=hotel.hot_id;
-- Afficher la liste des réservations avec le nom des clients
CREATE VIEW v_3
AS 
SELECT res_id, res_date, cli_nom, cli_prenom
FROM client, reservation
WHERE cli_id=res_cli_id;
-- Afficher la liste des chambres avec le nom de l’hôtel et le nom de la station
CREATE VIEW v_4
AS 
SELECT cha_numero, hot_nom, sta_nom
FROM chambre, hotel, station
WHERE cha_hot_id=hot_id 
AND hot_sta_id=sta_id;
-- Afficher les réservations avec le nom du client et le nom de l’hôtel
CREATE VIEW v_5
AS 
SELECT res_id, cli_nom, cli_prenom, hot_nom
FROM reservation, hotel, client, chambre
WHERE  cli_id=res_cli_id
AND res_cha_id=cha_id
AND cha_hot_id=hot_id;