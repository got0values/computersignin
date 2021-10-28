<?php
if (isset($_POST["bcSubmit"])) {
    include_once './model/connectdb.php';
    $name = $_POST['nameInput'];       
    // insert transaction into db
    $insertBanListStatement = "INSERT into banlist (name) VALUES ('$name');";
    $pdo->exec($insertBanListStatement);
}
?>