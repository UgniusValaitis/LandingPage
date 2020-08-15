
<?php

include "dbh.php";

include "gallery.php";
if (isset($_POST['delBtnPic'])) {
    $picId = $_POST['delBtnPic'];
    $picName = "../images/" . "*" . $picId . "*";
    $picArray = glob($picName);
    $picture = $picArray[0];
    echo $picture;
}