<?php

if (isset($_POST["submit"])) {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if (emptyInputSignup($name, $email, $pwd, $pwdRepeat) !== false) {
        header("location: signup.php?error=emptyinput");
        exit();

}

if (invalidEmail($email) !== false) {
    header("location: signup.php?error=invalidemail");
    exit();

}

if (uidExists($conn, $name, $email) !== false) {
    header("location: signup.php?error=usernametaken");
    exit();

}


if (pwdMatch($pwd, $pwdRepeat ) !== false) {
    header("location: signup.php?error=passworddontmatch");
    exit();

}

createUser ($conn, $name, $email, $pwd);

}
else {
    header("location: signup.php");
    exit();
}