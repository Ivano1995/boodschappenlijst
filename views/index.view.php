<?php require "partials/head.php"; ?>

<title>Grocery List</title>



<table>
    <tr>
        <th>Product</th>
        <th>Prijs</th>
        <th>Aantal</th>
        <th>Subtotaal</th>
    </tr>
<?php foreach ($groceries as $grocery): ?>       
<tr>
    <td>
        <?= $grocery->Name ?>
    </td>
    <td>
        <?= $grocery->Price ?>
    </td>
    <td>
        <?= $grocery->Amount ?>
    </td>
    <td>
       <?= $grocery->Price * $grocery->Amount ?>
    </td>
</tr>
    <?php endforeach; ?>
<tr>
    <td colspan="3">Totaal</td>
    <td><?= $totalPrice ?></td>
</tr>
</table>
    
<?php require "partials/footer.php"; ?>

<link rel="stylesheet" href="style.css" type="text/css">