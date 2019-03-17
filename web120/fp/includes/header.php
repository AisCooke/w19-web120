<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <title><?=$title?></title>
  <meta name="viewport" content="width=device-width">
  <meta name="robots" content="noindex,nofollow">
  <meta charset="utf-8">
  <script src="http://code.jquery.com/jquery-latest.min.js" ></script>
  <script src="https://use.fontawesome.com/1398ffe036.js"></script>
  <script src="js/script.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CRokkitt:200,400,600" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/form.css">
</head>
<body>
  <div class="wrapper">
    <div class="hero"></div>
    <header id="navbar">
      <a href="index.php" class="mobile-white"><img src="images/logo-white.svg" alt="Dave's Meat and Produce"></a>
      <nav>
        <div class="dropdown">
          <a href="" class="dropbtn">Meat</a>
          <div class="dropdown-content">
            <a href="#">Beef</a>
            <a href="#">Pork</a>
            <a href="#">Sausage</a>
            <a href="#">Lamb</a>
            <a href="#">Poultry</a>
            <a href="#">Fish</a>
          </div>
        </div>
        <div class="dropdown">
          <a href="" class="dropbtn">Produce</a>
          <div class="dropdown-content">
            <a href="#">Fruit</a>
            <a href="#">Vegetables</a>
          </div>
        </div>
        <a class="logo" href="index.php">
          <img class="white" src="images/logo-white.svg" alt="Dave's Meat and Produce">
          <img class="black" src="images/logo-black.svg" alt="Dave's Meat and Produce">
        </a>
        <div class="dropdown">
          <a href="" class="dropbtn">About</a>
          <div class="dropdown-content">
            <a href="#">Our Story</a>
            <a href="#">Philosophy</a>
            <a href="#">Farms</a>
          </div>
        </div>
        <a href="" class="dropbtn">Contact</a>

<!-- START COMMENT OUT NAV
      <ul class="topnav" id="myTopnav">
      ?=makeLinks($nav1)?>

      <li class="logo" >
        <a href="index.php">
          <img class="white" src="images/logo-white.svg" alt="Dave's Meat and Produce">
          <img class="black" src="images/logo-black.svg" alt="Dave's Meat and Produce">
        </a>
      </li>

      ?=makeLinks($nav2)?>  
    </ul>
    END COMMENT OUT NAV -->

      </nav>
    </header>
    <main>
    <h1><?=$pageid?></h1>