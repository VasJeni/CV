<?php
$link = mysqli_connect('localhost', "root", "", "clientsBD");
if (mysqli_connect_errno())
{
    echo "Ошибка к подлючению базы данных" . mysqli_connect_error() . ": " . mysqli_connect_error();
    $fp = fopen("clientList.txt", "a");
    fwrite($fp, "  //db error");
    fclose($fp);
    exit();
} else {
    $fp = fopen("clientList.txt", 'a');
    fwrite($fp, "data write");
    fclose($fp);
}
