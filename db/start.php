<?php

session_start();
include "dbh.php";

if (isset($_POST['submit'])) {
    $header = $_POST['header'];
    $body = $_POST['body'];

    $sql = "UPDATE start
    set header='$header', body='$body'";
    mysqli_query($conn, $sql);
    header("Location: ../admin/admin.php?index=suc");
}

$sql = "SELECT * FROM start WHERE id='1'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$head = $row['header'];
$body = $row['body'];
