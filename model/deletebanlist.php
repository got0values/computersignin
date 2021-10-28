<?php
// delete query and execution function for button
if(isset($_POST["deleteTwo"])) {
    include_once './model/connectdb.php';
    $transidTwo = $_POST['deleteTrans'];               
    $deleteSigninQuery = "DELETE FROM banlist WHERE id = '$transidTwo';";
    $pdo->exec($deleteSigninQuery);
}
?>