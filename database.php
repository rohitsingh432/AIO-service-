<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=aioservice', 'root', '');
    session_start();
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>