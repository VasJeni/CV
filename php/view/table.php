<?php
/**
 * Created by PhpStorm.
 * User: Vasilyev
 * Date: 02.10.2018
 * Time: 12:40
 */
?>
<!DOCTYPE html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <script src="js/admin.js"></script>
</head>
<body>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">comment</th>
                <th scope="col">my comments</th>
                <th scope="col">delete</th>

            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i<count($categories); $i++)
            {
                $id = $categories[$i]['id'];
                $name = $categories[$i]['name'];
                $email = $categories[$i]['email'];
                $userComments =  $categories[$i]['user_comments'];
                $myComments = $categories[$i]['my_comments'];
                $needShow = $categories[$i]['need_show'];
                if ($needShow)
                {
                    $row = createTableRow($id,  $name,  $email, $userComments, $myComments);
                    echo $row;
                }
            }
            ?>
        </tbody>
    </table>

</body>
</html>
