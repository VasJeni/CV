<?php
$name = htmlentities(trim($_GET["name"]));
$email = htmlentities(trim($_GET["email"]));
$comments = trim($_GET["comments"]);

require_once 'include/database.php';
require_once 'include/function.php';

echo "<pre>";
var_dump($categories);
echo "</pre>";



if (($name) || ($email)){
    $string = "name:" . $name . " email:" . $email . " comments:" . $comments . " ";
    $fp = fopen("clientList.txt", 'a');
    fwrite($fp, $string);
    fwrite($fp, " >/n< ");
    fclose($fp);
}
?>

<!DOCTYPE html>
<head>
  <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">comment</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i<count($categories); $i++)
            {
                echo "<tr><td>" .$categories[$i]['id'] ."</td><td>". $categories[$i]['name'] ."</td><td>" .$categories[$i]['email'] ."</td><td>". $categories[$i]['note'] ."</td></tr>";
            }


            ?>
        </tbody>
    </table>

</body>
</html>