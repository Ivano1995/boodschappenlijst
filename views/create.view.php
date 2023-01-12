<?php require "partials/head.php"; ?>


<title>Add Groceries</title>
<form action="/add-groceries" method="POST">
Naam:<input type="text" name="name"><br>
Aantal:<input type="number" name="amount"><br>
Prijs:<input type="number" step="0.01" name="price"><br>
<input type="submit">
</form>

<?php require "partials/footer.php"; ?>
