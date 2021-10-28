<?php
// obtain date of wanted history
if(isset($_POST['inputDate'])) {
    include_once './model/connectdb.php';
    $inputDate = $_POST['inputDate'];
    $getDateInput = "SELECT * FROM signin WHERE datenow = '$inputDate'";
    $getSelDateStats = $pdo->query($getDateInput);
}
?>