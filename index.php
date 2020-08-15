<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style/index.css" />
    <link
      rel="stylesheet"
      href="./style/fontawesome-free-5.13.0-web/css/all.css"
    />
    <title>Document</title>
  </head>
  <body class="background">
    <section class="containerHead">
      <div id="welcome">
        <?php
include "./db/start.php";
echo "<h1>" . $head . "</h1>
        <p>" . $body . "</p>";
?>
        <a href="./page/titulinis.php" class="btn"
          >pradžia <i class="fas fa-angle-right"></i>
        </a>
      </div>
    </section>
  </body>
</html>
