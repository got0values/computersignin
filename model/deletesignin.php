<?php
if(isset($_POST["deleteTwo"])) {
    include_once './model/connectdb.php';
    $transidTwo = $_POST['deleteTrans'];               
    $deleteSigninQuery = "DELETE FROM signin WHERE id = '$transidTwo'";
    $pdo->query($deleteSigninQuery);
}
?>