<?php 
session_start();

    $name = $_POST['fname'];

    $pass = $_POST['fpass'];

    $captchain = $_POST['cap'];

    $corrcaptcha = $_SESSION["captcha"];

    if ($corrcaptcha != $cap)
        {exit("Invalid captcha code");}

    $sample = "/1[0-1][0-9]1(1[789]|20)([0-1][0-9][0-9]|200)/";
    if (!(preg_match($sample, $name)))
        {exit("Invalid username");}

    if (!((preg_match('/[A-Z]+/', $pass)) && (preg_match('/[a-z]+/', $pass)) && (preg_match('/[\d]+/', $pass)) && (preg_match('/[-+_!@$%^&*., ?]+/', $pass))))
        {exit("Invalid password ");}

    echo "Enter the site";


?>
