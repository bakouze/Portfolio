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
  <?php include("header-en.php"); ?>
  <div class="bande">
    <div class="container">
      <!-- Section de présentation de moi-même -->
      <?php include("en/Experiences/presentation.php"); ?>
    </div>
  </div>
  <div class="bande">
    <div class="container">
      <!-- Section Formation -->
      <?php include("en/Experiences/formation.php"); ?>
    </div>
  </div>
  <div class="bande">
    <div class="container">
      <!-- Section Experiences professionnelles -->
  		<?php include("en/Experiences/expro.php"); ?>
    </div>
  </div>
  <div class="bande">
    <div class="container">
      <!-- Section Langues -->
  		<?php include("en/Experiences/langues.php"); ?>
    </div>
  </div>
  <div class="bande">
    <div class="container">
      <!-- Section Competences Informatiques -->
  		<?php include("en/Experiences/info.php"); ?>
    </div>
  </div>
  <div class="bande">
    <div class="container">
      <!-- Section Centres d'interet -->
  		<?php include("en/Experiences/hobbies.php"); ?>
    </div>
  </div>

  <!-- Section de Contact + CV -->
  <?php include("contact-en.php"); ?>
</body>
</html>
