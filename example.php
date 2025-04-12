<?php

require('fngssn.class.php');

// Instantiate the class
$fngssn = new fngssn();

// Generate a SSN for Oregon
echo $fngssn->generateSSN('OR');

echo '<br /><br />';

// Validate
echo $fngssn->validateSSN('541');

?>