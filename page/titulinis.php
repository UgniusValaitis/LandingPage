<?php include_once "../db/titulinis.php";?>
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
    <title>titulinis</title>
  </head>
  <body>
    <header class="background">
      <div class="mainHead containerHead">
        <h1>DekoSiena</h1>
        <div class="mainNavPhone">
          <ul class="mainNav">
            <li class="currentPage"><a href="./titulinis.php">titulinis</a></li>
            <li><a href="./paslaugos.php">paslaugos</a></li>
            <li><a href="./galerija.php">galerija</a></li>
            <li><a href="./kainos.php">kainos</a></li>
            <li><a href="./kontaktai.php">kontaktai</a></li>
          </ul>
        </div>
        <button class="navBtn"><i class="fas fa-bars"></i></button>
      </div>
    </header>

    <div class="slideShow container">
      <div id="slides">
        <div class="slide">
          <h2 class="slideHeader">
            Aukštos kokybės sienų dekoravimo paslaugos
          </h2>
          <img src="../images/quality.jpg" />
          <a href="./paslaugos.php" class="slideBtn"
            >plačiau <i class="fas fa-angle-right"></i
          ></a>
        </div>
        <div class="slide">
          <h2 class="slideHeader">
            Lengvai apskaičiuokite savo sienų dekoro kainą
          </h2>
          <img src="../images/money.jpg" />
          <a href="./kainos.php" class="slideBtn"
            >plačiau <i class="fas fa-angle-right"></i
          ></a>
        </div>
        <div class="slide">
          <h2 class="slideHeader">
            Pasisemkite įkvėpimo bei idėjų mūsų nuotraukų galerijoje.
          </h2>
          <img src="../images/choise.jpg" />
          <a href="./galerija.php" class="slideBtn"
            >plačiau <i class="fas fa-angle-right"></i
          ></a>
        </div>
      </div>
      <button class="slideBtn next" onclick="plusSlide(1)">
        <i class="fas fa-angle-right"></i>
      </button>
      <button class="slideBtn prev" onclick="plusSlide(-1)">
        <i class="fas fa-angle-left"></i>
      </button>
    </div>

    <div class="homeBody container">

<?php if (count($homePosts) > 0): ?>
    <?php foreach ($homePosts as $post): ?>
        <article>
          <h2><?php echo $post[1] ?></h2>
          <p><?php echo $post[2] ?></p>
        </article>
    <?php endforeach;?>
<?php endif;?>
    </div>

    <footer class="mainFooter">
      Copyright &copy; 2020 Ugnius Valaitis.
    </footer>
    <script src="../js/index.js"></script>
    <script src="../js/functions/slides.js"></script>
  </body>
</html>
