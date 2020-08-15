<?php

include "dbh.php";

//GALLERY CREATE
if (isset($_POST['creGal'])) {
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
        $sql = "SELECT * FROM gallery";
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
    $name = $_POST['galName'];

    $sql = "INSERT INTO gallery (id, name) VALUES ('$id','$name');";
    mysqli_query($conn, $sql);
    header("Location: ../admin/admin.php?gal");
}
;

// GALLERY DELETE
if (isset($_POST['delBtn'])) {
    $id = $_POST['delBtn'];

    $sql = "DELETE FROM gallery WHERE id = '$id'";
    mysqli_query($conn, $sql);

    $sqlPic = "DELETE FROM photo WHERE galId='$id'";
    mysqli_query($conn, $sqlPic);

    $picName = "../images/" . $id . "*";
    $picArray = glob($picName);
    foreach ($picArray as $pic) {
        unlink($pic);
    }

    header("Location: ../admin/admin.php?gal");
}
;

// PHOTO CREATE
if (isset($_POST['upPic'])) {

    $fileName = $_FILES['pic']['name'];
    $fileTmpName = $_FILES['pic']['tmp_name'];
    $fileError = $_FILES['pic']['error'];
    $fileType = $_FILES['pic']['type'];

    $fileExt = explode('.', $fileName);
    $extLowCase = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($extLowCase, $allowed)) {
        if ($fileError == 0) {
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
                $sql = "SELECT * FROM photo";
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
            $galId = $_POST['galId'];
            $name = $_POST['picName'];
            $des = $_POST['picDes'];
            $pic = $galId . "." . $id . "." . $extLowCase;

            $fileDestination = '../images/' . $pic;
            move_uploaded_file($fileTmpName, $fileDestination);
            //updating profile img status
            $sql = "INSERT INTO photo (id, galId, pic, name, des)
            VALUES ('$id', '$galId', '$pic', '$name', '$des')";
            mysqli_query($conn, $sql);
            header("Location: ../admin/admin.php?gal=suc");
        } else {
            header("Location: ../admin/admin.php?gal=err");
        }
    } else {
        header("Location: ../admin/admin.php?gal=ext");
    }
}

// DELETE PHOTO
if (isset($_POST['delBtnPic'])) {
    $picId = $_POST['delBtnPic'];
    $sql = "DELETE FROM photo WHERE id='$picId'";
    mysqli_query($conn, $sql);

    $picName = "../images/" . "*" . $picId . "*";
    $picArray = glob($picName);
    $picture = $picArray[0];
    unlink($picture);

    header("Location: ../admin/admin.php?gal");

}
;

// PHOTO RETURN
$sqlPic = "SELECT * FROM photo";
$resultPic = mysqli_query($conn, $sqlPic);
$galPic = mysqli_fetch_all($resultPic);

// GALLERY RETURN
$sqlGal = "SELECT * FROM gallery";
$resultGal = mysqli_query($conn, $sqlGal);
$galName = mysqli_fetch_all($resultGal);
