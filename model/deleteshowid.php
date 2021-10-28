<?php
// delete query and execution function for button
if(isset($_POST["deleteTwo"])) {
    include_once './model/connectdb.php';
    $transidTwo = $_POST['deleteTrans'];               
    $deleteShowIDQuery = "DELETE FROM showid WHERE id = '$transidTwo';";
    $pdo->exec($deleteShowIDQuery);
}
?>