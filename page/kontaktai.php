<?php include_once "../db/contact.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/index.css" />
    <link
      rel="stylesheet"
      href="../style/fontawesome-free-5.13.0-web/css/all.css"
    />
    <title>Document</title>
  </head>
  <body>
    <header class="background">
      <div class="mainHead containerHead">
        <h1>DekoSiena</h1>
        <div class="mainNavPhone">
          <ul class="mainNav">
            <li><a href="./titulinis.php">titulinis</a></li>
            <li><a href="./paslaugos.php">paslaugos</a></li>
            <li><a href="./galerija.php">galerija</a></li>
            <li><a href="./kainos.php">kainos</a></li>
            <li class="currentPage"><a href="./kontaktai.php">kontaktai</a></li>
          </ul>
        </div>
        <button class="navBtn"><i class="fas fa-bars"></i></button>
      </div>
    </header>
    <section class="contactBody container">
      <div class="contacts">
<?php foreach ($contacts as $con): ?>

    <?php if ($con[1] == "number"): ?>
      <h3><i class='fas fa-phone'></i><?php echo $con[2] ?></h3>
    <?php elseif ($con[1] == 'email'): ?>
      <h3><i class='fas fa-envelope-open-text'></i><?php echo $con[2] ?></h3>
    <?php elseif ($con[1] == 'fb'): ?>
      <h3><i class='fab fa-facebook-square'></i>  <?php echo $con[2] ?></h3>
    <?php endif;?>
<?php endforeach;?>

      </div>
      <p>
        Norėdami užsisakyti dekorą ar užduoti klausimų skambinkite telefono
        numeriu arba rašykite elektroninį laišką
      </p>
    </section>
    <footer class="mainFooter">
      Copyright &copy; 2020 Ugnius Valaitis.
    </footer>
    <script src="../js/index.js"></script>
  </body>
</html>
