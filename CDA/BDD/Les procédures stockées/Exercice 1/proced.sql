-- Exécutez la pour vérifier qu’elle fonctionne conformément à votre attente. 
DELIMITER | 
CREATE PROCEDURE  Lst_fournis()
BEGIN
    -- afficher le code des fournisseurs pour lesquels une commande a été passée. 
    SELECT DISTINCT numfou from entcom;
END |
DELIMITER ;

-- Exécutez la pour vérifier qu’elle fonctionne conformément à votre attente. 
CALL LST_fournis();
