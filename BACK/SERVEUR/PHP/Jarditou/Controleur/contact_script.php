<?php
include('../Vue/header.php');
echo '<br><br>';
// On verifie si le button est verifié;
if(isset($_POST["submit"])){
    // On verifie si le champ est bien renseigné;
    if (empty($_POST["nom"])) 
    {
        echo '<span style="color:red">';
        echo "Le nom doit être renseigné!";
        echo "<br><br>";
        echo '</span>';
        echo '<a 
        class="btn btn-info btn-dark border border-primary" 
        href="../Vue/contact.php"
        >Return sur la formulaire</a>';
    } else
    // On verifie si le champ est bien renseigné;
    if (empty($_POST["prenom"])) 
    {
        echo '<span style="color:red">';
        echo "Le prénom doit être renseigné!";
        echo "<br><br>";
        echo '</span>';
        echo '<a 
        class="btn btn-info btn-dark border border-primary" 
        href="../Vue/contact.php"
        >Return sur la formulaire</a>';
    }  else
    // On verifie si le champ est bien renseigné;
    if (empty($_POST["gender"])) 
    {
        echo '<span style="color:red">';
        echo "Le sexe doit être renseigné!";
        echo "<br><br>";
        echo '</span>';
        echo '<a 
        class="btn btn-info btn-dark border border-primary" 
        href="../Vue/contact.php"
        >Return sur la formulaire</a>';
    }  else
    // On verifie si le champ est bien renseigné;
    if (empty($_POST["ddn"])) 
    {
        echo '<span style="color:red">';
        echo "La date de naissance doit être renseigné!";
        echo "<br><br>";
        echo '</span>';
        echo '<a 
        class="btn btn-info btn-dark border border-primary" 
        href="../Vue/contact.php"
        >Return sur la formulaire</a>';
    }  else
    // On verifie si le champ est bien renseigné;
    if (empty($_POST["adresse"])) 
    {
        echo '<span style="color:red">';
        echo "L'adresse doit être renseigné!";
        echo "<br><br>";
        echo '</span>';
        echo '<a 
        class="btn btn-info btn-dark border border-primary" 
        href="../Vue/contact.php"
        >Return sur la formulaire</a>';
    }  else
    // On verifie si le champ est bien renseigné;
    if (empty($_POST["ville"])) 
    {
        echo '<span style="color:red">';
        echo "La ville doit être renseigné!";
        echo "<br><br>";
        echo '</span>';
        echo '<a 
        class="btn btn-info btn-dark border border-primary" 
        href="../Vue/contact.php"
        >Return sur la formulaire</a>';
    }  else
    // On verifie si le champ est bien renseigné;
    if (empty($_POST["codeP"])) 
    {
        echo '<span style="color:red">';
        echo "Le code Postal doit être renseigné!";
        echo "<br><br>";
        echo '</span>';
        echo '<a 
        class="btn btn-info btn-dark border border-primary" 
        href="../Vue/contact.php"
        >Return sur la formulaire</a>';
    }  else
    // On verifie si le champ est bien renseigné;
    if (empty($_POST["email"])) 
    {
        echo '<span style="color:red">';
        echo "L'adresse mail doit être renseigné!";
        echo "<br><br>";
        echo '</span>';
        echo '<a 
        class="btn btn-info btn-dark border border-primary" 
        href="../Vue/contact.php"
        >Return sur la formulaire</a>';
    }  else
    // On verifie si le champ est bien renseigné;
    if (empty($_POST["sujet"])) 
    {
        echo '<span style="color:red">';
        echo "Le sujet doit être renseigné!";
        echo "<br><br>";
        echo '</span>';
        echo '<a 
        class="btn btn-info btn-dark border border-primary" 
        href="../Vue/contact.php"
        >Return sur la formulaire</a>';
    }  else
    // On verifie si le champ est bien renseigné;
    if (empty($_POST["question"])) 
    {
        echo '<span style="color:red">';
        echo "La question doit être renseigné!";
        echo "<br><br>";
        echo '</span>';
        echo '<a 
        class="btn btn-info btn-dark border border-primary" 
        href="../Vue/contact.php"
        >Return sur la formulaire</a>';
    }  else
    // On verifie si le champ est bien renseigné;
    if (empty($_POST["jaccept"])) 
    {
        echo '<span style="color:red">';
        echo "Le champ (J'accepte le traitement informatique de ce formulaire) doit être renseigné!";
        echo "<br><br>";
        echo '</span>';
        echo '<a 
        class="btn btn-info btn-dark border border-primary" 
        href="../Vue/contact.php"
        >Return sur la formulaire</a>';
    }  
     // si tous les champ sont bien renseigné;
    else{
        $nom = $_POST["nom"];
        echo 'nom=';
        echo  $nom;
        echo "<br><br>";

        $prenom = $_POST["prenom"];
        echo 'prenom=';
        echo  $prenom;
        echo "<br><br>";

        $ddn = $_POST["ddn"];
        echo 'ddn=';
        echo  $ddn;
        echo "<br><br>";

        $gender = $_POST["gender"];
        echo 'gender=';
        echo  $gender;
        echo "<br><br>";

        $adresse = $_POST["adresse"];
        echo 'adresse=';
        echo  $adresse;
        echo "<br><br>";

        $ville = $_POST["ville"];
        echo 'ville=';
        echo  $ville;
        echo "<br><br>";

        $codeP = $_POST["codeP"];
        echo 'codeP=';
        echo  $codeP;
        echo "<br><br>";

        $email = $_POST["email"];
        echo 'email=';
        echo  $email;
        echo "<br><br>";

        $sujet = $_POST["sujet"];
        echo 'sujet=';
        echo  $sujet;
        echo "<br><br>";

        $question = $_POST["question"];
        echo 'question=';
        echo  $question;
        echo "<br><br>";

        $jaccept = $_POST["jaccept"];
        echo 'jaccept=';
        echo  $jaccept;
        echo "<br><br>";
    }
   
}else{
    echo '<span style="color:red">';
    echo "Error";
    echo '</span>';
}
include('../Vue/footer.php');
?>