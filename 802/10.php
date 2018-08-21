<?php
$array = array(1, 2, 3, 4);
?>

<table>
<thead><tr><th>Number</th></tr></thead>
<tbody>
<?php foreach ($array as $num) : ?>
<tr><td><?= htmlspecialchars($num) ?></td></tr>
<?php endforeach ?>
</tbody>
</table>
<?php include '10-1.php';?>