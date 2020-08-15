<?php include_once "../db/service.php";?>
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
            <li class="currentPage"><a href="./kainos.php">kainos</a></li>
            <li><a href="./kontaktai.php">kontaktai</a></li>
          </ul>
        </div>
        <button class="navBtn"><i class="fas fa-bars"></i></button>
      </div>
    </header>
    <section class="pricesPage container">
      <div class="prices">

<?php if (count($servPrep) > 0): ?>
  <h1 class = 'txtCen'> Paruošimas </h1>
  <?php foreach ($servPrep as $prep): ?>

      <div class='price'>
        <h3><?php echo $prep[2] ?></h3>
        <h3><?php echo $prep[5] ?>&euro; KV/M</h3>
        <p><?php echo $prep[4] ?></p>
      </div>
  <?php endforeach;?>
<?php endif;?>

<?php if (count($servDec) > 0): ?>
  <h1 class = 'txtCen'> Dekoras</h1>
  <?php foreach ($servDec as $dec): ?>
      <div class='price'>
        <h3><?php echo $dec[2] ?></h3>
        <h3><?php echo $dec[5] ?>&euro; KV/M</h3>
        <p><?php echo $dec[4] ?></p>
      </div>
  <?php endforeach;?>
<?php endif;?>

<?php if (count($servO) > 0): ?>
  <h1 class = 'txtCen'> Kitos paslaugos </h1>
    <?php foreach ($servO as $o): ?>


      <div class='price'>
        <h3><?php echo $o[2] ?></h3>
        <h3><?php echo $o[5] ?>&euro; KV/M</h3>
        <p><?php echo $o[4] ?></p>
      </div>
    <?php endforeach;?>
<?php endif;?>

    </div>
      <div class="calculator">
        <form>
          <label class="label"> Pasiskaičiuokite dekoro kainą</label>
          <div class="inputs">
            <div>
              <label>Paruošimas</label>
              <select id="preparation" class="input">
                <option value="0">nieko</option>
<?php if (count($servPrep) > 0): ?>
  <?php foreach ($servPrep as $prep): ?>


      <option value='<?php echo $prep[5] ?>'><?php echo $prep[2] ?></option>
  <?php endforeach;?>
<?php endif;?>

              </select>
            </div>
            <div>
              <label>Dekoras</label>
              <select id="decoration" class="input">
                <option value="0" title="">nieko</option>
<?php if (count($servDec) > 0): ?>
  <?php foreach ($servDec as $dec): ?>

    <option value="<?php echo $dec[5] ?>"><?php echo $dec[2] ?></option>
  <?php endforeach;?>
<?php endif;?>
<?php if (count($servO) > 0): ?>
  <?php foreach ($servO as $o): ?>

    <option value='<?php echo $o[5] ?>'><?php echo $o[2] ?></option>
  <?php endforeach;?>
<?php endif;?>
              </select>
            </div>
            <div>
              <label>KV/M</label>
              <input type="number" value="0" class="input" >
            </div>
          </div>

          <button type="submit" class="calcBtn" value="submit">
            skaičiuoti
          </button>
        </form>
      </div>
      <div class="calcUl">
        <ul></ul>
      </div>
      <div class="total">
        <h3></h3>
      </div>
    </section>
    <footer class="mainFooter">
      Copyright &copy; 2020 Ugnius Valaitis.
    </footer>
    <script src="../js/index.js"></script>
    <script src="../js/functions/calculator.js"></script>
  </body>
</html>
