<?php
include "dbh.php";

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
    $sql = "SELECT * FROM contact";
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

if (isset($_POST['subNr'])) {

    $id = generateId($conn);
    $type = "number";
    $name = $_POST['telNr'];

    $sql = "INSERT INTO contact (id, type, name) VALUES ('$id', '$type', '$name');";
    mysqli_query($conn, $sql);
    header("Location: ../admin/admin.php?con");
}

if (isset($_POST['subEmail'])) {

    $id = generateId($conn);
    $type = "email";
    $name = $_POST['email'];

    $sql = "INSERT INTO contact (id, type, name) VALUES ('$id', '$type', '$name');";
    mysqli_query($conn, $sql);
    header("Location: ../admin/admin.php?con");
}
if (isset($_POST['subFb'])) {

    $id = generateId($conn);
    $type = "fb";
    $name = $_POST['fb'];

    $sql = "INSERT INTO contact (id, type, name) VALUES ('$id', '$type', '$name');";
    mysqli_query($conn, $sql);
    header("Location: ../admin/admin.php?con");
}

// DELETE CONTACTS
if (isset($_POST['delBtn'])) {
    $id = $_POST['delBtn'];
    $sql = "DELETE FROM contact WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location: ../admin/admin.php?con");
}

// RETURN CONTACTS
$sqlCon = "SELECT * FROM contact";
$resultCon = mysqli_query($conn, $sqlCon);
$contacts = mysqli_fetch_all($resultCon);
