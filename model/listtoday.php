<?php
// list today's patrons query
include_once './model/connectdb.php';
$getCurDateStats = "SELECT * FROM signin WHERE datenow = DATE('now', 'localtime');";
$curDateStats = $pdo->query($getCurDateStats);

//get showid list and compare to signed in person
$fromShowIDStatement = "SELECT * FROM showid;";
$fromShowID = $pdo->query($fromShowIDStatement);

//get names of people signed in today and compare to signed in person
$getTodNames = "SELECT name FROM signin WHERE datenow = DATE('now', 'localtime');";
$todNames = $pdo->query($getTodNames);

?>