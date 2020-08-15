<?php
session_start();
include "../db/dbh.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../style/admin.css"/>
    <link rel="stylesheet" type="text/css"  href="../style/index.css" />

    <link
      rel="stylesheet"
      href="../style/fontawesome-free-5.13.0-web/css/all.css"
    />

    <title>Document</title>
  </head>
  <body >
   <?php

if (isset($_SESSION['id'])) {
    echo "<header class='background'>
    <div class='mainHead containerHead'>
      <h1>DekoSiena</h1>
      <div class='mainNavPhone'>
        <ul class='mainNav'>
          <li><a href='./admin.php?index'>pradžia</a></li>
          <li><a href='./admin.php?home'>titulinis</a></li>
          <li><a href='./admin.php?gal'>galerija</a></li>
          <li><a href='./admin.php?ser'>paslaugos</a></li>
          <li><a href='./admin.php?con'>kontaktai</a></li>
        </ul>
      </div>
      <button class='navBtn'><i class='fas fa-bars'></i></button>
    </div>
  </header>";
    if (isset($_GET['index'])) {
        include_once "pages/indexGet.php";
    } else if (isset($_GET['home'])) {
        include_once "pages/homeGet.php";
    } else if (isset($_GET['gal'])) {
        include_once "pages/galGet.php";
    } else if (isset($_GET['ser'])) {
        include_once "pages/serGet.php";
    } else if (isset($_GET['con'])) {
        include_once "pages/conGet.php";
    } else {
        echo "<div class='greet'>
            <h3>Sveikas sugįžęs ! </h3>
            <p> Pasirink kategorija kurią nori redaguoti</p>
        </div>";
    }

    echo "<div class='formLog'>
        <form  action='../db/log.php' method='POST'>
            <button class='adBtn' type='submit' name='logOut'> Log Out </button>
        </form>
        </div>";

} else {
    echo "
        <div class='adminLog background'>
            <div class='formLog'>
                <h1> Prisijunkite </h1>";
    if (isset($_GET['uid'])) {
        echo "<h6>Neteisingas vartotojo vardas</h6>";
    } else if (isset($_GET['pwd'])) {
        echo "<h6>Neteisingas slaptažodis</h6>";
    }
    echo "<form action = '../db/log.php' method = 'POST'>
                    <input type='text' name='uid' placeholder = 'vartotojo vardas'>
                    <input type='password' name='pwd' placeholder='slaptažodis'>
                    <button class='adBtn' type='submit' name='logIn'>Log In</button>
                </form>
            </dov>
        </div>
        ";
}
?>
    <footer class="mainFooter">
      Copyright &copy; 2020 Ugnius Valaitis.
    </footer>
    <script src="../js/functions/admin.js"></script>
    <script src="../js/functions/photo.js"></script>
    <script src="../js/index.js"></script>
 </body>
</html>
