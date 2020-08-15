<?php
include "dbh.php";

// UPLOAD
if (isset($_POST['serSub'])) {
    function generateId($conn)
    {
        $id = uniqid();

        $checkKey = checkKeys($conn, $id);

        while ($checkKey == true) {
            $randomId = uniqid();
            $checkKey = checkKeys($conn, $id);
        }

        return $id;
    };

    function checkKeys($conn, $id)
    {
        $sql = "SELECT * FROM service";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['id'] == $id) {
                $keyExists = true;
                break;
            } else {
                $keyExists = false;
            }
        }
        return $keyExists;
    };

    $id = generateId($conn);
    $type = $_POST['type'];
    $service = $_POST['service'];
    $des = $_POST['des'];
    $shortdes = $_POST['shortdes'];
    $price = $_POST['price'];

    $sql = "INSERT INTO service ( id, type, service, des, shortdes, price) VALUES ('$id', '$type', '$service', '$des', '$shortdes', '$price');";
    echo $sql;
    mysqli_query($conn, $sql);
    header("Location: ../admin/admin.php?ser=suc");
}
;

// DELETE
if (isset($_POST['delBtn'])) {
    $id = $_POST['delBtn'];

    $sql = "DELETE FROM service WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location: ../admin/admin.php?ser");
}
;

// RETURN
$sqlPrep = "SELECT * FROM service WHERE type='paruošimas'";
$returnPrep = mysqli_query($conn, $sqlPrep);
$servPrep = mysqli_fetch_all($returnPrep);

$sqlDec = "SELECT * FROM service WHERE type='dekoras'";
$returnDec = mysqli_query($conn, $sqlDec);
$servDec = mysqli_fetch_all($returnDec);

$sqlO = "SELECT * FROM service WHERE type='kitos paslaugos'";
$returnO = mysqli_query($conn, $sqlO);
$servO = mysqli_fetch_all($returnO);
