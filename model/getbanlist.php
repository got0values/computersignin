<?php
// get banlist names from db
include_once './model/connectdb.php';
$fromBanListStatement = "SELECT * FROM banlist;";
$fromBanList = $pdo->query($fromBanListStatement);
?>