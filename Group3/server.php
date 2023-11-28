


<?php
   
   // To display the age

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected birthdate from the form
    $birthdate = $_POST["birthdate"];

    // Calculate the age
    $birthTimestamp = strtotime($birthdate);
    $currentTimestamp = time();
    $ageInSeconds = $currentTimestamp - $birthTimestamp;
    $ageInYears = floor($ageInSeconds / (365 * 24 * 60 * 60));

    // Display the age
    echo "$ageInYears years old";
}

?>
