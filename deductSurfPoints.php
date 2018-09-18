<?php
// $surfPoints to be deducted from the database, gets information from database for userID to deduct surf points

// set $deductAmt on another script. $finalAmt will be the value of surf points after all deduction, to be modified in database
function deductPoints(surfPoints, deductAmt) {
  $totalAmt = $surfPoints - $deductAmt;
    return $totalAmt;
}
?>
