<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Portfolio de Guillaume Boulanger</title>
  <meta name = "description" content = "Portefolio de Guillaume Boulanger, élève ingénieur dans l'école Grenoble INP génie industriel. Page de présentation de Guillaume Boulanger."/>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!--fonts-->
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700&subset=latin-ext' rel='stylesheet' type='text/css'>
</head>
<body>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Bloc titre -->
  <?php include("header.php"); ?>

  <div class="bande">
    <div class="container">
      <!-- Rubik's Cube Solver -->
  		<?php include("Projets/rubik.php"); ?>
    </div>
  </div>

  <div class="bande">
    <div class="container">
      <!-- Projet GoPro -->
  		<?php include("Projets/goPro.php"); ?>
    </div>
  </div>

  <div class="bande">
    <div class="container">
      <!-- Projet informatique -->
      <?php include("Projets/projet-info.php"); ?>
    </div>
  </div>

  <!-- Section de Contact + CV -->
  <?php include("contact.php"); ?>
</body>
</html>
