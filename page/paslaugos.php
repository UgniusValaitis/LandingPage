<?php include "../db/service.php";?>
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
            <li class="currentPage"><a href="./paslaugos.php">paslaugos</a></li>
            <li><a href="./galerija.php">galerija</a></li>
            <li><a href="./kainos.php">kainos</a></li>
            <li><a href="./kontaktai.php">kontaktai</a></li>
          </ul>
        </div>
        <button class="navBtn"><i class="fas fa-bars"></i></button>
      </div>
    </header>

    <div class="serviceBody container">

<?php if (count($servPrep) > 0): ?>
    <h1 class = 'txtCen'> Paruošimas </h1>
    <?php foreach ($servPrep as $prep): ?>
        <div class='service'>
          <h3><?php echo $prep[2] ?></h3>
          <p><?php echo $prep[3] ?></p>
        </div>
    <?php endforeach;?>
<?php endif;?>

<?php if (count($servDec) > 0): ?>
    <h1 class = 'txtCen'> Dekoras</h1>
    <?php foreach ($servDec as $dec): ?>
        <div class='service'>
          <h3><?php echo $dec[2] ?></h3>
          <p><?php echo $dec[3] ?></p>
        </div>
    <?php endforeach;?>
<?php endif;?>

<?php if (count($servO) > 0): ?>
    <h1 class = 'txtCen'> Kitos paslaugos </h1>
    <?php foreach ($servO as $o): ?>
        <div class='service'>
          <h3><?php echo $o[2] ?></h3>
          <p><?php echo $o[3] ?></p>
        </div>
    <?php endforeach;?>
<?php endif;?>

    </div>
    <footer class="mainFooter">
      Copyright &copy; 2020 Ugnius Valaitis.
    </footer>
    <script src="../js/index.js"></script>
  </body>
</html>
