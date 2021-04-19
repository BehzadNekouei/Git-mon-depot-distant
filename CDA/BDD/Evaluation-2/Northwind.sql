-- 1 - Liste des contacts français
SELECT
`CompanyName` AS `Société`,
`ContactName` AS `contact`,
`ContactTitle` AS `Fpnction`,
`Phone`  AS `Téléphone`
FROM `customers`
WHERE `Country`= 'France';
-- 2 - Produits vendus par le fournisseur « Exotic Liquids » :
SELECT `ProductName` AS `Produit`,
`UnitPrice` AS `Prix`
FROM `products`, `suppliers`
WHERE  `suppliers`.`CompanyName`='Exotic Liquids' 
AND `suppliers`.`SupplierID`=`products`.`SupplierID`;
-- 3 - Nombre de produits vendus par les fournisseurs Français dans l’ordre décroissant :
SELECT `CompanyName` AS `Fournisseur`,
COUNT(*) AS `Nbre produits`
FROM `products`, `suppliers`
WHERE `Country`='France'
AND `suppliers`.`SupplierID`=`products`.`SupplierID`
GROUP BY `CompanyName` 
ORDER BY `Nbre produits` DESC;
-- 4 - Liste des clients Français ayant plus de 10 commandes :
SELECT `CompanyName` AS `Client`,
COUNT(*) AS `Nbre commandes`
FROM `customers`, `orders` 
WHERE `Country`='France' 
AND `customers`.`CustomerID`=`orders`.`CustomerID`
GROUP BY `CompanyName`
HAVING `Nbre commandes`>10;
-- 5 - Liste des clients ayant un chiffre d’affaires > 30.000 :
SELECT `CompanyName` AS `Client`,
SUM(`UnitPrice`*`Quantity`) AS `CA`,
`Country` AS `Pays`
FROM `customers`, `orders`, `order details`
WHERE `customers`.`CustomerID`=`orders`.`CustomerID`
AND `orders`.`OrderID`= `order details`.`OrderID`
GROUP BY `CompanyName`,`Country`
HAVING `CA`>30000
ORDER BY `CA` DESC;
-- 6 – Liste des pays dont les clients ont passé commande de produits fournis par « Exotic Liquids » :
SELECT DISTINCT `customers`.`Country` AS `Pays`
FROM `customers`, `orders`, `order details`, `products`, `suppliers`
WHERE `suppliers`.`CompanyName`='Exotic Liquids'
AND`customers`.`CustomerID`=`orders`.`CustomerID`
AND `orders`.`OrderID`= `order details`.`OrderID`
AND `order details`.`ProductID`=`products`.`ProductID`
AND `suppliers`.`SupplierID`=`products`.`SupplierID`
ORDER BY `Pays` ASC;
-- 7 – Montant des ventes de 1997 :
SELECT SUM(`UnitPrice`*`Quantity`) AS `Montant Ventes 97`
FROM `orders` , `order details`
WHERE YEAR(`OrderDate`)=1997
AND `orders`.`OrderID`= `order details`.`OrderID`;
-- 8 – Montant des ventes de 1997 mois par mois :
SELECT MONTH(`OrderDate`) AS `Mois 97`,
SUM(`UnitPrice`*`Quantity`) AS `Montant Ventes`
FROM `orders` , `order details`
WHERE YEAR(`OrderDate`)=1997
AND `orders`.`OrderID`= `order details`.`OrderID`
GROUP BY MONTH(`OrderDate`) ;
-- 9 – Depuis quelle date le client « Du monde entier » n’a plus commandé ?
SELECT MAX(`OrderDate`) AS `Date de dernière commande` 
FROM `orders`,  `customers`
WHERE `companyName`='Du monde entier'
AND `customers`.`CustomerID`=`orders`.`CustomerID`;
-- 10 – Quel est le délai moyen de livraison en jours ?
SELECT ROUND(AVG(DATEDIFF(`ShippedDate`,`OrderDate`))) AS `Délai moyen de livraison en jours` 
FROM `orders`;

/* 2) Procédures stockées
Codez deux procédures stockées correspondant aux requêtes 9 et 10.
 Les procédures stockées doivent prendre en compte les éventuels paramètres. */

--creation procédure last_customer_order
DELIMITER |
CREATE PROCEDURE last_customer_order(IN coName VARCHAR(40))
BEGIN
    SELECT MAX(`OrderDate`) AS `Date de dernière commande` 
    FROM `orders`,  `customers`
    WHERE `companyName`=coName
    AND `customers`.`CustomerID`=`orders`.`CustomerID`;
END |
DELIMITER ;

--creation procédure average_delay
DELIMITER |
CREATE PROCEDURE average_delay()
BEGIN
    SELECT ROUND(AVG(DATEDIFF(`ShippedDate`,`OrderDate`))) AS `Délai moyen de livraison en jours` 
    FROM `orders`;
END |
DELIMITER ;

/* 3) Mise en place d'une règle de gestion

Décrivez par quel moyen et comment vous pourriez implémenter la règle de gestion suivante.

Pour tenir compte des coûts liés au transport, on vérifiera que pour chaque produit d’une commande,
le client réside dans le même pays que le fournisseur du même produit */
DELIMITER |
CREATE OR REPLACE TRIGGER country_check AFTER INSERT ON orders
FOR EACH ROW
BEGIN
   DECLARE customer_country VARCHAR(15);
   DECLARE customer_id INT;
   DECLARE order_id INT;
   SET order_id = NEW.OrderID;
   SET customer_id = NEW.CustomerID;
   SET customer_country = (SELECT Country FROM customers WHERE CustomerID=customer_id);
    
   IF (customer_country <> ANY 
	 	(SELECT suppliers.Country
			FROM suppliers, products, `order details`, orders
			WHERE suppliers.SupplierID=products.SupplierID 
		   AND products.ProductID=`order details`.ProductID
		   AND orders.OrderID= `order details`.OrderID
			AND orders.OrderID= order_id)	
		   )
	THEN
      SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = 'Un problème est survenu. Règle de gestion de commande !';
   END IF;
END |
DELIMITER ;

