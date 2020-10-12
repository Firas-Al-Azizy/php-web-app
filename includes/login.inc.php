<?php

if (isset($_POST['login'])) {

    require "dbh.inc.php";

    //can be username or email both of them work
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    } else {

        $sql = "SELECT * FROM users WHERE username=? OR email = ?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        } else {

            mysqli_stmt_bind_param($stmt, 'ss', $username, $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {

                $passwordCheck = password_verify($password, $row['password']);

                if ($passwordCheck == false) {
                    header("Location: ../login.php?error=password-or-username-incorrect");
                    exit();
                } else if ($passwordCheck == true) {
                    session_start();
                    $_SESSION["ID"] = $row['uid'];
                    $_SESSION["USERNAME"] = $row['username'];
                    setcookie("uname", $row['username'] , time()*8600 , "/" , "" , 0);
                    setcookie("id", $row['uid'] , time()*8600 , "/" , "" , 0);
                    
                    header("Location: ../index.php?login=success&username=".$_COOKIE['uname']);
                    exit();
                } else {
                    header("Location: ../login.php?error=password-or-username-incorrect");
                    exit();
                }
            } else {
                header("Location: ../login.php?error=no-user");
            }
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}
