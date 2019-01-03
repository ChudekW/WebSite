<?php

if (isset($_POST['login'])) {
    require './DBHandler.php';

    $urname = $_POST['uid'];
    $pwd = $_POST['password'];

    if (empty($urname) || empty($pwd)) {
        header("Location: ./index.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);
    }
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ./index.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $urname);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
         
            $pwdcheck = password_verify($pwd, $row['pwdUsers']);
            if ($pwdcheck == FALSE) {
                header("Location: ./index.php?error=wrongPassword");
                exit();
            } else if ($pwdcheck == TRUE) {
                session_start();
                $_SESSION['userId'] = $row['idUsers'];
                $_SESSION['userUId'] = $row['uidUsers'];

                header("Location: ./index.php?login=success");
                exit();
            }
        } else {
            header("Location: ./index.php?error=nousermatch");
            exit();
        }
    }
} else {
    header("Location: ./index.php");
    exit();
}