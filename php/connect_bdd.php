<?php
setlocale(LC_TIME, 'fra-fra');
date_default_timezone_set('Europe/Paris');

try{
$dsn_bdd = 'sqlsrv:host=localhost;dbname=ProjetJS';
$user_bdd='root';
$pass_bdd='';
$options=[
	PDO::SQLSRV_ATTR_INIT_COMMAND=> "SET NAMES utf8",
	PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
];
$pdo = new PDO($dsn_bdd, $user_bdd, $pass_bdd, $options);
} catch (Exception $e){
Die('Erreur :' . $e->getMessage()) ;
}
?>
