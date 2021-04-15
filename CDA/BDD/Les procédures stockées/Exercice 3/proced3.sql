DELIMITER |
CREATE PROCEDURE CA_Fournisseur(IN codeF INT, IN an YEAR)
BEGIN
	IF codeF= ANY (SELECT numfou FROM fournis) then
    SELECT fournis.numfou , SUM((qtecde*priuni)*1.2) AS CA
	FROM entcom, ligcom, fournis
	WHERE entcom.numfou=fournis.numfou
	AND ligcom.numcom=entcom.numcom
	AND YEAR(entcom.datcom)=an
	GROUP BY fournis.numfou
    HAVING fournis.numfou=codeF;
	END IF;
END |
DELIMITER ;