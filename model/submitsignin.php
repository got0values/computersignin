<?php
if (isset($_POST["bcSubmit"])) {
    include_once './model/connectdb.php';
    $name = $_POST['nameInput'];
    $computer = $_POST['compInput'];
    $nowTime = TIME('now', 'localtime');        
    $signInStatement = "INSERT into signin (name, comp, timenow, datenow, timeexp, dateexp) VALUES ('$name', '$computer', TIME('now', 'localtime'), DATE('now', 'localtime'), TIME(TIME('now', 'localtime'), '+60 minutes'), DATE('now', 'localtime'));";
    $pdo->query($signInStatement);
}

?>