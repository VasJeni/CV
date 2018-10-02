<?php
function get_id ($link)
{
    $sql = "SELECT * FROM clientList";

    $result = mysqli_query($link, $sql);

    $categories = mysqli_fetch_all($result , MYSQLI_ASSOC);

    return $categories;
}
$categories = get_id($link);


function hideSQLrow($id){
    global $link;
    $result = mysqli_query($link, "UPDATE `clientList` SET need_show ='0' WHERE id='$id';");
    echo '<script> alert("1"); </script>';
    return ($result ? true : false);
}

function createTableRow($id, $name, $email, $userComments, $myComments)
{
 	$row = "<tr>
    	<td>" . $id ."</td>
        <td>" . $name ."</td>
        <td>" . $email . "</td>
        <td>" . $userComments ."</td>
        <td>" . $myComments . "</td>
        <td> 
        	<button id=\"$id\" type=\"button\" class=\"close\" aria-label=\"Close\">
        		<span aria-hidden=\"true\">&times;</span>
        	</button>
        </td>
    </tr>";
 	return $row;
}

function updateMyComments($link){
    //UPDATE table_name SET field1 = new-value1, field2 = new-value2 [WHERE Clause]
    //' UPDATE tutorials_inf SET name="althamas" WHERE name="ram"';
     $result = mysqli_query($link, "UPDATE `clientList` SET my_comments ='test update' WHERE id='18';");
}
updateMyComments($link);