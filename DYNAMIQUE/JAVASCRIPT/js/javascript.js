
var nomFiltre = new RegExp (/^[A-Za-z]+$/);
var prenomFiltre = new RegExp (/^[A-Za-z]+$/);
var adresseFiltre = new RegExp (/^[A-Za-z]+$/);
var villeFiltre = new RegExp (/^[A-Za-z]+$/);
var codeFiltre = new RegExp (/^[0-9]*$/);


function validateForm(contact) {
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var adresse = document.getElementById("adresse").value;
    var ville = document.getElementById("ville").value;
    var codeP = document.getElementById("codeP").value;
    var bool=true;


// check if the name is correct!

if (nom == "") {
  document.getElementById("nommsg").innerHTML = "Veuillez renseigner ce champ. ";
  document.getElementById("nommsg").style.color = "red";
  bool = false;
}
 else if (!nomFiltre.test(nom)) {
    document.getElementById("nommsg").innerHTML = "Ce champ est incorrect.";
    document.getElementById("nommsg").style.color = "red";

    bool = false;
 }
 else{
    document.getElementById("nommsg").innerHTML = "";
 }
// check if the firstname is correct!

 if (prenom == "") {
    document.getElementById("prenommsg").innerHTML = "Veuillez renseigner ce champ.";
    document.getElementById("prenommsg").style.color = "red";
    bool = false;
  }
 else if (!prenomFiltre.test(prenom)) {
      document.getElementById("prenommsg").innerHTML = "Ce champ est incorrect.";
      document.getElementById("prenommsg").style.color = "red";
      bool = false;
    }
    else{
        document.getElementById("prenommsg").innerHTML = "";
    }

// check if the adresse is correct!

  if (adresse == "") {
  document.getElementById("adressemsg").innerHTML = "Veuillez renseigner ce champ.";
  document.getElementById("adressemsg").style.color = "red";
  bool = false;
}
 else if (!adresseFiltre.test(adresse)) {
    document.getElementById("adressemsg").innerHTML = "Ce champ est incorrect.";
    document.getElementById("adressemsg").style.color = "red";
    bool = false;
  }
  else{
    document.getElementById("adressemsg").innerHTML = "";
  }
  // check if the city is correct!

 if (ville == "") {
    document.getElementById("villemsg").innerHTML = "Veuillez renseigner ce champ.";
    document.getElementById("villemsg").style.color = "red";
    bool = false;
  }
 else if (!villeFiltre.test(ville)) {
      document.getElementById("villemsg").innerHTML = "Ce champ est incorrect.";
      document.getElementById("villemsg").style.color = "red";
      bool = false;
    }
    else{
        document.getElementById("villemsg").innerHTML = "";
    }
      // check if the code postal is correct!

 if (codeP == "") {
    document.getElementById("codePmsg").innerHTML = "Veuillez renseigner ce champ.";
    document.getElementById("codePmsg").style.color = "red";
    bool = false;
  }
 else if (!codeFiltre.test(codeP)) {
      document.getElementById("codePmsg").innerHTML = "Ce champ est incorrect.";
      document.getElementById("codePmsg").style.color = "red";
      bool = false;
    }
    else{
        document.getElementById("codePmsg").innerHTML = "Veuillez renseigner ce champ.";
    }
    return bool;
}
