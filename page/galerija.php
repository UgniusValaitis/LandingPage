<?php include_once "../db/gallery.php";?>
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
            <li class="currentPage"><a href="./galerija.php">galerija</a></li>
            <li><a href="./kainos.php">kainos</a></li>
            <li><a href="./kontaktai.php">kontaktai</a></li>
          </ul>
        </div>
        <button class="navBtn"><i class="fas fa-bars"></i></button>
      </div>
    </header>

    <form class="filtras" >
      <label> Filtras </label>
      <select name="filtras" id="filtras">
        <option value="visi">Visi</option>
<?php foreach ($galName as $gal): ?>
        <option value ='<?php echo $gal[0] ?>'><?php echo $gal[1] ?></option>
<?php endforeach;?>
      </select>
    </form>
    <div class="galleryBody">

<?php foreach ($galName as $gal): ?>

    <div id='<?php echo $gal[0] ?>' class='galBody container'>
        <h1 class = 'txtCen'><?php echo $gal[1] ?></h1>
    <?php foreach ($galPic as $pic): ?>

        <?php if ($gal[0] == $pic[1]): ?>
            <div class='gallery'>
                <div>
                  <img class='photo' src='../images/<?php echo $pic[2] ?>' />
                </div>
                <div class='about'>
                  <h3><?php echo $pic[3] ?></h3>
                  <p><?php echo $pic[4] ?></p>
                </div>
              </div>
        <?php endif;?>
      <?php endforeach;?>
    </div>
<?php endforeach;?>

    </div>
    <footer class="mainFooter">
      Copyright &copy; 2020 Ugnius Valaitis.
    </footer>
    <script src="../js/functions/photo.js"></script>
    <script src="../js/index.js"></script>
  </body>
</html>
