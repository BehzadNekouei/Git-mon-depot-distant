window.onload = function () {
  var n = parseInt(prompt("Veuillez entrer un nombre pour afficher sa table de multiplication :"));
  for (var i = 1; i <= 10; i++) {
    var h1 = document.createElement("h1");
    var node = document.createTextNode( n + " x " + i + " = " + i * n);

    h1.appendChild(node);

    var div = document.getElementById("test");

    div.appendChild(h1);
  }
};
