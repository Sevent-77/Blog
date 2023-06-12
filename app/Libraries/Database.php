<?php
// WIP
/*
class Database{
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "blog";
    private $porta = "3306";
    private $dbh;
}*/

try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>