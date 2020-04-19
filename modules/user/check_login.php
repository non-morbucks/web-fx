<?php

session_start();

if (isset($_POST['username'])) {

    include('../../include/connect_db.php');

    $username = $_POST['username'];
    $password = $_POST['userpassword'];


    $query  = "SELECT * FROM member WHERE username = '$username' AND userpassword = '$password'";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_array($result);

//        $_SESSION['userid'] = $row['userid'];
        $_SESSION['user'] = $row['username'];
        $_SESSION['userlevel'] = $row['userlevel'];

        if ($_SESSION['userlevel'] == 'a') {
            header("Location: admin_page.php");
        }

        if ($_SESSION['userlevel'] == 'm') {
            header("Location: user_page.php");
        }
    } else {
        echo "<script>alert('User หรือ Password ไม่ถูกต้อง);</script>";
    }

} else {
    header("Location: index.php");
}


?>