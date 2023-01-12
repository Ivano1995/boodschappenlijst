<?php

function dd($data)
{
  echo "<pre>";
  die(var_dump($data));
  echo "</pre>";
}

function sum($carry, $item)
{
  $carry += $item->Price * $item->Amount;
  return $carry;
}
