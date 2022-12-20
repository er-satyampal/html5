<?php



$value=$_GET['value'];
$tax=$_GET['tax'];
$discount=$_GET['discount'];


$taxable_value = $value * $tax / 100; // 18

$tax_value = $value + $taxable_value; // 118

$discount_value = $tax_value * $discount / 100;

$discounted_value = $tax_value - $discount;

echo $discounted_value;