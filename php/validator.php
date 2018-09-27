<?php
$name = htmlentities(trim($_GET["name"]));
$email = htmlentities(trim($_GET["email"]));
$comments = trim($_GET["comments"]);


if (($name) || ($email)){
   /* $string = "name:" . $name . " email:" . $email . " comments:" . $comments . " ";
    $fp = fopen("clientList.txt", 'a');
    fwrite($fp, $string);
    fwrite($fp, " >/n< ");
    fclose($fp);*/
    require_once 'include/database.php';
    /*require_once 'include/'*/
}
