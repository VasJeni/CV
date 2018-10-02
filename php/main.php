<?php
$name = htmlentities(trim($_GET["name"]));
$email = htmlentities(trim($_GET["email"]));
$comments = trim($_GET["comments"]);

require_once 'include/database.php';
require_once 'include/function.php';
require_once 'include/dbFunction.php';
require_once "view/table.php";


if (($name) || ($email)){
    $string = "name:" . $name . " email:" . $email . " comments:" . $comments . " ";
    $fp = fopen("clientList.txt", 'a');
    fwrite($fp, $string);
    $sqlSend = mysqli_query($link, "INSERT INTO `clientList` (`name`, `email`, `note`) VALUES ( '$name', '$email', '$comments');");
    if ($sqlSend)
    {
        fwrite($fp, " >write< ");

    } else{
        fwrite($fp, " >error< ");
    }

    fclose($fp);
}
