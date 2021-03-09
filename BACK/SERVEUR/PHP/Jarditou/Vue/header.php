<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <meta name="discription" content="Le site de l'entreprise Jarditou" />

    <title>Jarditou <?php echo $title ?></title>

    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
  </head>
  <body>
    <div class="container">
      <header>
        <div class="row">
          <div class="col d-none d-lg-block">
            <a href="#"
              ><img
                src="<?php $_SERVER['DOCUMENT_ROOT']?>/Contenu/img/jarditou_logo.jpg"
                alt="logo"
                height="50"
                width="150"
            /></a>
          </div>
          <div class="col d-none d-lg-block">
            <h2 class="text-right pr-5">Tout le jardin</h2>
          </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <!-- Brand -->
          <a class="navbar-brand" href="<?php $_SERVER['DOCUMENT_ROOT']?>/index.php ">Jarditou.com</a>
          <!-- Toggler/collapsibe Button -->
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#collapsibleNavbar"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <!-- Navbar links -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="<?php $_SERVER['DOCUMENT_ROOT']?>/index.php" title="Accueil"
                  >Accueil</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php $_SERVER['DOCUMENT_ROOT']?>/Vue/tableau.php" title="Tableau"
                  >Tableau</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php $_SERVER['DOCUMENT_ROOT']?>/Vue/contact.php" title="Contact"
                  >Contact</a
                >
              </li>
            </ul>
            <!-- search bar -->
            <form class="form-inline my-lg-0" action="">
              <input
                class="form-control mr-sm-2"
                type="text"
                placeholder="Votre promotion"
              />
              <button class="btn btn-outline-success" type="submit">
                rechercher
              </button>
            </form>
          </div>
        </nav>
        <div>
          <img class="img-fluid" src="<?php $_SERVER['DOCUMENT_ROOT']?>/Contenu/img/promotion.jpg" alt="promotion" />
        </div>
      </header>