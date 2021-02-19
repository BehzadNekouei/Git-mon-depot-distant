var tab = [
  "Audrey",
  "Aurélien",
  "Flavien",
  "Jérémy",
  "Laurent",
  "Melik",
  "Nouara",
  "Salem",
  "Samuel",
  "Stéphane",
];
var t = false;
var prenom = prompt(
  "On recherche un prénom dans la list des prénom suivant: Audrey, Aurélien, Flavien, Jérémy, Laurent, Melik, Nouara, Salem, Samuel, Stéphane. Si le prénom est trouvé on l'élimine du tableau en décalant les cases qui le suivent et en mettant à blanc la dernière case. Si le prénom n'est pas trouvé un message d'erreur apparait et aucun prénom ne se supprime. Veillez saisir un prénom: "
);
for (var i = 0; i < 10; i++) {
  if (tab[i] == prenom) {
    var removed = tab.splice(i, 1);
    tab.push("");
    t = true;
  } else {
    continue;
  }
}
if (t == false) {
  alert("le prénom n'est pas trouvé");
} else {
  document.write(
    tab.join() +
      "----------------tab length: " +
      tab.length +
      "---------------removed prénom was: " +
      removed
  );
}
