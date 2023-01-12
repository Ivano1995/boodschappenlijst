<?php

$router->get("groceries", "controllers/index.php");
$router->get("groceries/create", "controllers/create.php");
$router->post("add-groceries", "controllers/add-groceries.php");
