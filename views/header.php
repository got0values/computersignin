<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <title>FML Computer Sign In</title>
</head>
<body>

<?php

require './model/connectdb.php';

?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">
        FML Computer Sign In
    </a>
    <div>
        <ul class="navbar-nav ml-auto mt-2">
            <li class="nav-item"><a class="nav-link" href='/'>Home</a></li>
            <li class="nav-item"><a class="nav-link" href='/banlist' style="background-color: red; padding: 3px">Banned List</a></li>
            <li class="nav-item"><a class="nav-link" href='/showid' style="background-color: purple; padding: 3px">Show ID List</a></li>
            <li class="nav-item"><a class="nav-link" href='/history'>History</a></li>
        </ul>
    </div>
</nav>