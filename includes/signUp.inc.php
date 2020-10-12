<?php
if (isset($_POST['signup'])) {



    require "dbh.inc.php";
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $password2 = trim($_POST['password2']);

    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signUp.php?error=not-valid-username-or-email");
        exit();
    } else if ($password !== $password2) {
        header("Location: ../signUp.php?error=passwords-no-match&username=" . $username . "&email=" . $email);
        exit();
    } else {
        $sql = "SELECT username FROM users WHERE username=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signUp.php?error=sqlerror&username=" . $username . "&email=" . $email);
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck =  mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../signUp.php?error=username-is-taken&email=" . $email);
                exit();
            } else {
                $sql = "INSERT INTO users(name, username, email, password) VALUES (?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signUp.php?error=sqlerror&username=" . $username . "&email=" . $email);
                    exit();
                } else {
                    $passwordHash = password_hash($password, PASSWORD_BCRYPT);
                    mysqli_stmt_bind_param($stmt, "ssss", $username, $username, $email, $passwordHash);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    header("Location: ../index?signup=success");
                    getSignedupUser($mysqli ,$username , $email);
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: ../signUp.php");
    exit();
}
