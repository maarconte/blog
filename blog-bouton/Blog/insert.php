<?php


$dsn = 'mysql:host=localhost;dbname=site_web';
$user = 'root';
$pass = '';

$pdo = new PDO(
	$dsn,
	$user,
	$pass
);
$request= $pdo->query('INSERT INTO  articles ( titre,texte ) VALUES ("'.$_POST['titre'].'", "'.$_POST['texte'].'");');
$result=$request->fetchAll();
header('Location: index.php');


?>

