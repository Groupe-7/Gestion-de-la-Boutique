<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Système de gestion de boutique</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/infobulle.css" rel="stylesheet">
    <link href="css/calendar.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">SGB</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tableau de bord</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" id="add_event" href="add_event.php">Ajouter un produit</a>
              <a class="dropdown-item" id="edit_event" href="select-event.php">Modifier un produit</a>
              <a class="dropdown-item" id="delete_event" href="delete-event.php">Supprimer un produit</a>
            </div>
          </li>
          
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">stock</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="etudiant_event.php">clients</a>
              <a class="dropdown-item" href="#">gerants</a>
              <a class="dropdown-item" href="index.php">Particulier</a>
            </div>
          </li>

          <li class="nav-item active">
            <a class="nav-link disabled" href="inc/logout.php">Se deconnecter</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="about.php">A propos <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <?php
            session_start();
              try{
                if(!empty($_SESSION["users"])){
                  $user = $_SESSION["users"]->users_name;
                  echo '<button class="btn btn-outline-success my-2 my-sm-0" type="submit">'. $user .'</button>';
                }
              }catch (Exception $e){
                echo "hre";
              }
          ?>
        </form>
      </div>
    </nav>

    <main role="main" class="container">