var PORT, PU, QTECOM, TOT, PAP, REM;
PU = parseInt(prompt("Veuillez entrer le prix unitaire: "));
QTECOM = parseInt(prompt("Veuillez entrer la quantité commandée: "));
TOT = PU * QTECOM;
PORT = 6;
if (100 <= TOT && TOT <= 200) {
  REM = TOT / 20;
} else if (TOT > 200) {
  REM = TOT / 10;
} else {
  REM = 0;
}

if (TOT - REM > 500) {
  PORT = 0;
} else if (TOT - REM < 500 && 0.02 * (TOT - REM) > 6) {
  PORT = 0.02 * (TOT - REM);
}

PAP = TOT - REM + PORT;
alert("le prix à payer est: " + PAP + " €.");
