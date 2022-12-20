<?php
  
$value=$_GET['value'];

$tax=$_GET['tax'];
  
$taxable_value = $value * $tax / 100;

echo $value + $taxable_value;