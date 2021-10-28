<?php
if(isset($_POST['delete'])) {
    include_once './model/connectdb.php'; 
    $inputDate = $_POST['inputDate'];
    $transid = $_POST['datesRow'];
    $delQuery = "DELETE FROM signin WHERE id = '$transid'";
    $pdo->query($delQuery);
};
?>