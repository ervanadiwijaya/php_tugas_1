<?php

echo "<h1>Daftar Menu</h1>";

$a = array("Cireng", 1000);
$b = array("Es Duren", 15000);
$c = array("Es Milo", 20000);
$d = array("Es Teh", 5000);
$e = array("Piscok", 1000);
?>

<table border="1">
    <tr>
        <th>No.</th>
        <th>Nama Menu</th>
        <th>Harga</th>
    </tr>
    <tr>
        <td>1</td>
        <td><?php echo $a[0] ?></td>
        <td><?php echo $a[1] ?></td>
    </tr>
    <tr>
        <td>1</td>
        <td><?php echo $b[0] ?></td>
        <td><?php echo $b[1] ?></td>
    </tr>
    <tr>
        <td>1</td>
        <td><?php echo $c[0] ?></td>
        <td><?php echo $c[1] ?></td>
    </tr>
    <tr>
        <td>1</td>
        <td><?php echo $d[0] ?></td>
        <td><?php echo $d[1] ?></td>
    </tr>
</table>