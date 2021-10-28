<?php
if (isset($_POST["bcSubmit"])) {
    include_once './model/connectdb.php';
    // obtain name
    $name = $_POST['nameInput'];       
    // insert transaction into db
    $insertShowIDStatement = "INSERT into showid (name) VALUES ('$name');";
    $pdo->exec($insertShowIDStatement);
}
?>