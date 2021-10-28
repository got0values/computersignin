<?php
// get showid names from db
include_once './model/connectdb.php';
$fromShowIDStatement = "SELECT * FROM showid;";
$fromShowID = $pdo->query($fromShowIDStatement);
?>