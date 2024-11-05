<?php
date_default_timezone_set('Europe/Dublin');
include("CarPolicy2.php"); // Include the CarPolicy class

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather data from the form
    $policyNumber = $_POST['policyNumber'];
    $initialPremium = floatval($_POST['yearlyPremium']); // Convert to float
    $dateOfLastClaim = $_POST['dateOfLastClaim'];

    // Assume a generic policy holder name or add an input for this
    $policyHolder = "Default Policy Holder"; // Update if you want to gather policy holder name

    // Instantiate a new CarPolicy object with the gathered data
    $myCarPolicy = new CarPolicy($policyNumber, $policyHolder, $initialPremium);

    // Set the date of the last claim
    $myCarPolicy->setDateOfLastClaim($dateOfLastClaim);

    // Calculate the discounted premium
    $discountedPremium = $myCarPolicy->getDiscountedPremium();

    // Output the results
    echo "<h1>Car Policy Summary</h1>";
    echo "<p>Policy Number: " . htmlspecialchars($myCarPolicy->getPolicyNumber()) . "</p>";
    echo "<p>Initial Premium: $" . number_format($initialPremium, 2) . "</p>";
    echo "<p>Years with no claims: " . $myCarPolicy->getTotalYearsNoClaims() . "</p>";
    echo "<p>Discounted Premium: $" . number_format($discountedPremium, 2) . "</p>";
} else {
    echo "<p>Invalid request method.</p>";
}
?>
