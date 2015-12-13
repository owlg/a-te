<?php
// calculate rewards per view, at 80% conversion rate. Surf points is the total points rewarded when surfing, transferred from the website owner to the user who is surfing the owner's website

$userrewardedPoints = $surfPoints / 100 * 80

//The admin takes 20% of the revenue, to be distributed elsewhere.

$adminrewardedPoints = $surfPoints / 100 * 20


//Reward the users by adding the changes to the MySQL database, using MODIFY and using PHP to add and change
?>
