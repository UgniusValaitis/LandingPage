<?php

include_once "dbh.php";

//CREATING
if (isset($_POST['submit'])) {
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
        $sql = "SELECT * FROM home";
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

    $date = date("Y-m-d H:i:s");
    $id = generateId($conn);
    $head = $_POST['header'];
    $body = $_POST['body'];

    $sql = "INSERT INTO home (id, header, body, date)
    VALUES ('$id', '$head', '$body','$date')";
    mysqli_query($conn, $sql);
    header("Location: ../admin/admin.php?home=suc");
}

//DELETE POST
if (isset($_POST['delBtn'])) {
    $id = $_POST['delBtn'];

    $sql = "DELETE FROM home WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location: ../admin/admin.php?home");
}

//RETURNING
$sql = "SELECT * FROM home ORDER BY date DESC";
$result = mysqli_query($conn, $sql);

$homePosts = mysqli_fetch_all($result);
