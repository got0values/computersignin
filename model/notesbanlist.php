<?php
// add notes query and execution
if (isset($_POST['notesButton'])) {
    include_once './model/connectdb.php';
    $notesText = $_POST['notesText'];
    $transIdThree = $_POST['transIdThree'];
    $addNotesQuery = "UPDATE banlist SET notes = '$notesText' WHERE id = '$transIdThree'";
    $pdo->exec($addNotesQuery);
}
?>