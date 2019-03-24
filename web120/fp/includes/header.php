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
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myResponsive()">&#9776;</a>
      <nav class="topnav" id="myTopnav">
        <ul class="nav-ul" >
          <li class="dropdown">
              <a href="meat.php" class="underline" tabindex="1">Meat</a>
              <ul class="dropdown-content">
                <li><a href="beef.php">Beef</a></li>
                <li><a href="pork.php">Pork</a></li>
                <li><a href="sausage.php">Sausage</a></li>
                <li><a href="lamb.php">Lamb</a></li>
                <li><a href="poultry.php">Poultry</a></li>
                <li><a href="fish.php">Fish</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="produce.php" class="underline" tabindex="2">Produce</a>
              <ul class="dropdown-content">
              <li><a href="fruit.php">Fruit</a></li>
                <li><a href="vegetables.php">Vegetables</a>
              </ul>
            </li>
          <li class="logo" >
            <a href="index.php" tabindex="3">
              <img class="white" src="images/logo-white.svg" alt="Dave's Meat and Produce">
              <img class="black" src="images/logo-black.svg" alt="Dave's Meat and Produce">
            </a>
          </li>
          <li ><a href="about.php" class="underline" tabindex="4">About</a>
            </li>
          <li><a href="contact.php" class="underline" tabindex="5">Contact</a></li>
        </ul>
      </nav>
    </header>

    <main>
    <h1><?=$pageid?></h1>