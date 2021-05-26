<?php
    $titile='Les fichier';
    include ('header.php');
?>
<div class="container">
    <div class="row">
        <h1>Exercice :</h1>
        <h3>Formulaire d'authentification</h3>
        <p>Créer un formulaire d'authentification utilisant le principe des sessions. </p>
        <ul class="mx-5">
            <li class="my-2">Créer un formulaire <a class="bg-light text-danger" href="login_form.php"> login_form.php </a> contenant 2 champs : login (qui peut être l'adresse email) et mot de passe. Ce formulaire doit poster les données sur le script <span class="bg-light text-danger"> login_script.php </span>.</li>
            <li class="my-2">Le fichier <span class="bg-light text-danger"> login_script.php </span> doit traiter les données du formulaire de la façon suivante:</li>
            <li class="my-2">Si le login et le mot de passe sont corrects (pour exemple login='admin' et mot de passe='admin') alors nous initialisons une variable de session <span class="bg-light text-danger"> auth </span> avec la valeur <span class="bg-light text-danger"> ok </span>.</li>
            <li class="my-2">Sinon la variable de session <span class="bg-light text-danger"> auth </span> est détruite.</li>
            <li class="my-2">Une autre page PHP devra être accessible uniquement si une session a été initialisée, c'est-à-dire si l'utilisateur s'est authentifié correctement (donc i la variable de session <span class="bg-light text-danger"> auth </span> existe et contient la valeur <span class="bg-light text-danger"> ok </span>). Si ce n'est pas le cas, l'utilisateur devra être redirigé sur la page de connexion.</li>
        </ul>
    </div>
</div>
<?php
    include ('footer.php');
?>