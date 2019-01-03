<?php

if (isset($_POST['signup'])) {

    require './DBHandler.php';

    $user = $_POST['uid'];
    $mail = $_POST['email'];
    $pwd = $_POST['password'];
    $pwdRep = $_POST['passwordRep'];

    if (empty($user) || empty($mail) || empty($pwd) || empty($pwdRep)) {
        header("Location: ./Rejestracja.php?error=emptyfields");
        exit();
    }  else if ($pwd !== $pwdRep) {
        header("Location: ./Rejestracja.php?error=wrongPwd");
        exit();
    } else {
        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ./Rejestracja.php?error=prepareFailed");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $user);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rescheck = mysqli_stmt_num_rows($stmt);
            if ($rescheck > 0) {
                header("Location: ./Rejestracja.php?error=usertaken");
                exit();
            } else {
                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ./Rejestracja.php?error=prepareFailed");
                    exit();
                } else {
                    
                    $hashedPwd= password_hash($pwd,PASSWORD_DEFAULT);
                    
                    mysqli_stmt_bind_param($stmt, "sss", $user, $mail, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ./Rejestracja.php?rignup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
}   else{
    header("Location: ./Rejestracja.php");
                    exit();
} 