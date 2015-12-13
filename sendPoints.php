<?php
// Available only for premium users, to prevent people from sending points around and too many times that may slow down the database, and reduces the chances of losing all surf points when hacked

// This involves a transaction fee of 7%

$transactionfee = $AmtOfTransfer / 100 * 7

$finalAmtOfTransfer = $AmtOfTransfer - $transactionfee

// Perform transaction, modify data, minus, etc. from userSending userReceiving



// Store transaction information in a separate table in database named 'user_points_transactions' for future references


?>
