<?php
date_default_timezone_set('Europe/Dublin');
include("CarPolicy2.php"); // Make sure this is the correct filename

// Define the initial premium amount
$initialPremium = 600;

// Create an instance of the CarPolicy object
$myCarPolicy = new CarPolicy("XM123456", "John Doe", $initialPremium);

// Set the date of the last claim
$myCarPolicy->setDateOfLastClaim("2015-10-10");

// Get the number of years with no claims
$yearsNoClaims = $myCarPolicy->getTotalYearsNoClaims();

// Calculate the discount
$discount = $myCarPolicy->getDiscount();
$discountPercentage = $discount * 100; // Convert to percentage

// Calculate the discounted premium
$discountedPremium = $myCarPolicy->getDiscountedPremium();

// Output the results
echo "Years with no claims: " . $yearsNoClaims . PHP_EOL;
echo "Your initial premium is: $$initialPremium" . PHP_EOL;
echo "Discount: $discountPercentage%" . PHP_EOL;
echo "Your discounted premium is: $" . number_format($discountedPremium, 2) . PHP_EOL;
?>
