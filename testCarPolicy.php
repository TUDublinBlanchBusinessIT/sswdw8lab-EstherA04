<?php
date_default_timezone_set('Europe/Dublin');
include("CarPolicy.php");


$myCarPolicy = new CarPolicy("XM123456", "John Doe", 450);

// Set the date of last claim
$myCarPolicy->setDateOfLastClaim("2015-10-10");

// Output 
echo "The policy " . $myCarPolicy . " ";
echo "has " . $myCarPolicy->getTotalYearsNoClaims() . " years no claims.";
?>
