<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <meta name="discription" content="Le site de l'entreprise Jarditou" />

    <title>la page d'accueil du site de l'entreprise Jarditou</title>

    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <header>
        <div class="row">
          <div class="col d-none d-lg-block">
            <a href="#"
              ><img
                src="img/jarditou_logo.jpg"
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
          <a class="navbar-brand" href="index.php">Jarditou.com</a>
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
                <a class="nav-link" href="index.php" title="Accueil"
                  >Accueil</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tableau.php" title="Tableau"
                  >Tableau</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php" title="Contact"
                  >Contact</a
                >
              </li>
            </ul>
            <!-- search bar -->
            <form class="form-inline my-lg-0" action="/action_page.php">
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
          <img class="img-fluid" src="img/promotion.jpg" alt="promotion" />
        </div>
      </header>