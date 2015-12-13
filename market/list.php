<?php
// Gets all the data, including the information of all the surf points that the user has. By searching through the database, the
// userID, username, and matching them, get the data of surf points and store in $userSurfPoints

$userSurfPoints = 'SELECT FROM `users` FOR `username` = $username AND `userID` = $userID'

//current market details in table current_market, converting real money into surf points on the market

$currencyType = USD

//get standard currency rate issued by virtual bank

$USDToSurfPointsRate = 1000/1.4

// 1.4 is the estimated rate from USD to SGD

