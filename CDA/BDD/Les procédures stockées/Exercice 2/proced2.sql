DELIMITER |
CREATE PROCEDURE Lst_Commandes(IN obs varchar(50))
BEGIN
    /*Sortir les produits des commandes ayant le mot "urgent' en observation?
    (Afficher le numéro de commande, le nom du fournisseur,
    le libellé du produit et le sous total= quantité commandée * Prix unitaire)*/
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