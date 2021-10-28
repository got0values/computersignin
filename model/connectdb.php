<?php

try{
    // connect to sqlitedb
    $pdo = new PDO('sqlite:./model/compsignin.db');
} catch (PDOException $e) {
    echo $e -> getMessage();
}

?>