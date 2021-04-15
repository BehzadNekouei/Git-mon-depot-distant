-- Recalculer le total de la commande après l'insertion' de produit. 
DELIMITER |
CREATE OR REPLACE TRIGGER maj_total AFTER INSERT ON lignedecommande
    FOR EACH ROW
    BEGIN
        DECLARE id_c INT;
        DECLARE tot DOUBLE;
        DECLARE remis DOUBLE;
        SET id_c = NEW.id_commande; -- nous captons le numéro de commande concerné
        SET tot = (SELECT sum(prix*quantite) FROM lignedecommande WHERE id_commande=id_c);
        SET remis = (SELECT remise FROM commande WHERE id=id_c); -- nous captons la remise
        UPDATE commande SET total=(tot-remis) WHERE id=id_c; -- on stocke le total dans la table commande
END |
DELIMITER ;
--test 
DELETE FROM lignedecommande WHERE id_commande=4;
INSERT INTO lignedecommande(id_commande,id_produit,quantite,prix) VALUES (4,3,5,700);
-- Recalculer le total de la commande après  la modification de produit. 
DELIMITER |
CREATE OR REPLACE TRIGGER after_update_total AFTER UPDATE ON lignedecommande
    FOR EACH ROW
    BEGIN
        DECLARE id_c INT;
        DECLARE tot DOUBLE;
        DECLARE remis DOUBLE;
        SET id_c = OLD.id_commande; -- nous captons le numéro de commande concerné
        SET tot = (SELECT sum(prix*quantite) FROM lignedecommande WHERE id_commande=id_c); -- on recalcul le total
        SET remis=(SELECT remise FROM commande WHERE id=id_c); -- nous captons la remise
        UPDATE commande SET total=(tot-remis) WHERE id=id_c; -- on stocke le total dans la table commande
END |
DELIMITER ;
--test
UPDATE lignedecommande SET quantite=5 WHERE id_commande=4;
-- Recalculer le total de la commande après  la suppression de produit .
DELIMITER |
CREATE OR REPLACE TRIGGER after_delete_total AFTER DELETE ON lignedecommande
    FOR EACH ROW
    BEGIN
        DECLARE id_c INT;
        DECLARE tot DOUBLE;
        DECLARE remis DOUBLE;
        SET id_c = OLD.id_commande; -- nous captons le numéro de commande concerné
        SET tot = (SELECT sum(prix*quantite) FROM lignedecommande WHERE id_commande=id_c); -- on recalcul le total
        SET remis=(SELECT remise FROM commande WHERE id=id_c); -- nous captons la remise
        UPDATE commande SET total=(tot-remis) WHERE id=id_c; -- on stocke le total dans la table commande
END |
DELIMITER ;
--test
DELETE FROM lignedecommande WHERE id_commande=4;


