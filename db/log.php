<?php
session_start();

include "dbh.php";

if (isset($_POST['logIn'])) {
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM admin WHERE uid ='$uid';";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($pwd, $row['pwd']) == 1) {
                $_SESSION['id'] = "admin";
                header("Location: ../admin/admin.php");
            } else {
                header("Location: ../admin/admin.php?pwd");
            }
        }
    } else {
        header("Location: ../admin/admin.php?uid");
    }

}
;

if (isset($_POST['logOut'])) {
    session_unset();
    session_destroy();

    header("Location: ../admin/admin.php");
}
;
