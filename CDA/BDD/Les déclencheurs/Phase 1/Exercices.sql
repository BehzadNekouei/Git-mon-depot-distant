--interdire la modification des réservations (on autorise l'ajout et la suppression).
CREATE TRIGGER modif_reservation 
BEFORE UPDATE ON reservation
FOR EACH ROW
SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = 'Un problème est survenu. Règle de gestion réservations !';

--interdire l'ajout de réservation pour les hôtels possédant déjà 10 réservations.
DELIMITER |
CREATE OR REPLACE TRIGGER insert_reservation AFTER INSERT ON reservation
    FOR EACH ROW
    BEGIN
    DECLARE id_r INT;
    DECLARE hot_r VARCHAR(50);
    DECLARE nbRes INT;
    SET id_r = NEW.res_id; -- nous captons le numéro de réservations
    SET hot_r=(SELECT hot_nom FROM v_5 WHERE res_id=id_r); -- nous captons le nom d'hôtel
    SET nbRes = (SELECT count(*) FROM v_5 WHERE hot_nom=hot_r); --on calcule le nombre de réservations
    IF nbRes>10 THEN
        SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = 'Un problème est survenu. Règle de gestion réservations !';
    END IF;
END |
DELIMITER ;

--interdire les réservations si le client possède déjà 3 réservations.
DELIMITER |
CREATE OR REPLACE TRIGGER insert_reservation2 AFTER INSERT ON reservation
    FOR EACH ROW
    BEGIN
    DECLARE nbResCli INT;
    DECLARE id_cli INT;
    SET id_cli = NEW.res_cli_id;
    SET nbResCli = (SELECT count(*) FROM reservation WHERE res_cli_id=id_cli);
    IF nbResCli>3 THEN
        SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = 'Un problème est survenu. Règle de gestion réservations !';
    END IF;
END |
DELIMITER ;

/* lors d'une insertion, on calcule le total des capacités des chambres pour l'hôtel,
 si ce total est supérieur à 50, on interdit l'insertion de la chambre. */
DELIMITER |
CREATE OR REPLACE TRIGGER insert_chambre AFTER INSERT ON chambre
    FOR EACH ROW
    BEGIN
    DECLARE nbChaHot INT;
    DECLARE id_hot INT;
    SET id_hot = NEW.cha_hot_id;
    SET nbChaHot = (SELECT count(*) FROM chambre WHERE cha_hot_id=id_hot);
    IF nbResCli>50 THEN
        SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = 'Un problème est survenu. Règle de gestion réservations !';
    END IF;
END |
DELIMITER ;
