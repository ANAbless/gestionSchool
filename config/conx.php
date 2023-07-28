<?php
// CONX (conx.php)
$hostname = base64_encode("ABJ-LAP-297\OPERASLOCAL");
$port = 1433;
$dbname = base64_encode("GESTIONSCHOOL");
$username = base64_encode("sa");
$pw = base64_encode("Operas@db22");

// $hostname = base64_encode("DESKTOP-GU3QJL0\LOCALDB");
// $port = 1433;
// $dbname = base64_encode("GESTIONSCHOOL");
// $username = base64_encode("sa");
// $pw = base64_encode("Operas@db22");
try {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES French_100_CS_AI';
    $bdd = new PDO("sqlsrv:Server=" . base64_decode($hostname) . ";Database=" . base64_decode($dbname) . "", base64_decode("$username"), base64_decode("$pw"), $pdo_options);

    // echo 'connex'; die();
} catch (PDOException $e) {
    print "Erreur!Pas de connexion à la base de données <br/>" . $e->getMessage();
    var_dump($e);
    die();

}
//MODELE (modele.php)

// var_dump($statement);
// require('homepage.php');
?>