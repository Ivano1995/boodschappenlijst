<?php
$app["database"]->insert("groceries", [
  "name" => $_POST["name"],
  "amount" => $_POST["amount"],
  "price" => $_POST["price"],
]);
header("Location: /groceries ");
