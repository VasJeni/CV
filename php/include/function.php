<?php
function get_id ($link)
{
    $sql = "SELECT * FROM clientList";

    $result = mysqli_query($link, $sql);

    $categories = mysqli_fetch_all($result , MYSQLI_ASSOC);

    return $categories;
}
$categories = get_id($link);