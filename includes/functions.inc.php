<?php


function invalidUid($username){
    $result = NULL;
     if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
     }else{
        $result = false;
     }
     return $result;
}
function invalidEmail($email){
    $result = NULL;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
function pwdMatch($pwd, $pwdRepeat){
    $result = NULL;
    if($pwd!== $pwdRepeat){
        $result = true;
    }else{
        $result = false;

    }
    return $result;
}
function uidExists($conn, $username, $email){
    $result = NULL;
    $sql = "SELECT *FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }else{
            $result = false;
            return $result;
        }
        mysqli_stmt_close($stmt);
    

}
function createUser($conn, $name, $email, $username, $pwd){
    $result = NULL;
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../Koda/register.php?error=none");
        exit();
    }

