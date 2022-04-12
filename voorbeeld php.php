
<?php 
include_once 'odp.php';
$sql = "SELECT * FROM webshop.album";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>

<table>
    <tr>
        <th>
            title
        </th>
        <th>prijs</th>
        <th>
            vooraad
        </th>
        <th>acties</th>
    </tr>

<?php 
foreach($result as $re) {?>
    <tr>
    <td><?php echo $re["titel"];?></td>
    <td><?php echo $re["prijs"];?></td>
    <td><?php echo $re["voorraad"];?></td>
    <td>
        <a href="edit.php?id=<?php echo $re["ÏD"];?>" > edit</a>
        <a href="delete.php?id=<?php echo $re["ÏD"];?>" > edit</a>
    </td>
</tr>

<?php } ?>

</table>