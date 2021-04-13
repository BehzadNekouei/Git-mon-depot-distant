DELIMITER |
CREATE PROCEDURE CA_ Fournisseur(IN obs varchar(50))
BEGIN
    /**/
    SELECT entcom.numcom AS 'le numéro de commande',
    nomfou AS 'le nom du fournisseur', 
    libart AS 'le libellé du produit' , 
    (qtecde*priuni) AS 'le sous total'
    FROM entcom,fournis,ligcom,produit
    WHERE entcom.numfou=fournis.numfou
    AND entcom.numcom=ligcom.numcom
    AND produit.codart=ligcom.codart
    AND obscom LIKE '%obs%';
END |
DELIMITER;