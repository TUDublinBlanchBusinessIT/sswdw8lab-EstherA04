<?php
class Policy {
    private $policyNumber;
    private $policyHolderName;
    private $dateOfLastClaim;

    public function __construct($policyNumber, $policyHolderName, $dateOfLastClaim) {
        $this->policyNumber = $policyNumber;
        $this->policyHolderName = $policyHolderName;
        $this->dateOfLastClaim = $dateOfLastClaim;
    }

    public function getPolicyNumber() {
        return $this->policyNumber;
    }

    public function getPolicyHolderName() {
        return $this->policyHolderName;
    }

    public function getDateOfLastClaim() {
        return $this->dateOfLastClaim;
    }

    public function __toString() {
        return "PN: " . $this->policyNumber;
    }

    public function getTotalYearsNoClaims() {
        $currentDate = new DateTime();
        $lastDate = new DateTime($this->dateOfLastClaim);
        $interval = $currentDate->diff($lastDate);
        return $interval->format("%y");
    }
}
?>
