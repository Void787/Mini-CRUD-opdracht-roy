<?php include_once 'odp.php'; 

$sql = "SELECT `naam` FROM `producten` WHERE ID = 1";
$result = $connect->query($sql);

?>
<?php
foreach ($result as $re) { ?>


    <tr>
        <td><?php echo $re["naam"]; ?></td>
        <td>
            #<a href="edit.php?id=<?php echo $re["naam"]; ?>"> edit </a>
            #<a href="delete.php?id=<?php echo $re["naam"]; ?>"> delete</a>
        </td>
    </tr>

<?php
}
?>
#<a href="insert.php?id=<?php echo $re["naam"]; ?>">insert</a>
</table>
