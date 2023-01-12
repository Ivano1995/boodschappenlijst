<?php

$groceries = $app["database"]->selectAll("groceries");

$totalPrice = array_reduce($groceries, "sum");

require "views/index.view.php";
