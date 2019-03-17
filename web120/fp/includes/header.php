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
       <!-- comment out
        <ul>
        <li class="dropdown">
          <a href="" class="dropbtn">Meat</a>
          <ul class="dropdown-content">
          <li><a href="#">Beef</a></li>
            <li><a href="#">Pork</a></li>
            <li><a href="#">Sausage</a></li>
            <li><a href="#">Lamb</a></li>
            <li><a href="#">Poultry</a></li>
            <li><a href="#">Fish</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="" class="dropbtn">Produce</a></li>
          <ul class="dropdown-content">
          <li><a href="#">Fruit</a></li>
            <li><a href="#">Vegetables</a></li>
          </ul>
        </li>
        <li><a class="logo" href="index.php">
          <img class="white" src="images/logo-white.svg" alt="Dave's Meat and Produce">
          <img class="black" src="images/logo-black.svg" alt="Dave's Meat and Produce">
        </a></li>
        <li class="dropdown">
          <a href="" class="dropbtn">About</a>
          <ul class="dropdown-content">
            <li><a href="#">Our Story</a></li>
            <li><a href="#">Philosophy</a></li>
            <li><a href="#">Farms</a></li>
          </ul>
        </li>
        <li><a href="" class="dropbtn">Contact</a></li>
      </ul> -->

      <ul class="topnav" id="myTopnav">
     <li><a href="">Meat</a></li>
     <li><a href="">Meat</a></li>
      <li class="logo" >
        <a href="index.php">
          <img class="white" src="images/logo-white.svg" alt="Dave's Meat and Produce">
          <img class="black" src="images/logo-black.svg" alt="Dave's Meat and Produce">
        </a>
      </li>
      <li><a href="">Meat</a></li>
      <li><a href="">Meat</a></li>
    </ul>

      </nav>
    </header>
    <main>
    <h1><?=$pageid?></h1>