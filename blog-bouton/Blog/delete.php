<?php


$dsn = 'mysql:host=localhost;dbname=site_web';
$user = 'root';
$pass = '';

$pdo = new PDO(
	$dsn,
	$user,
	$pass
);

$request= $pdo->query('DELETE FROM articles WHERE id="'.$_GET['id'].'"');
$result=$request->fetchAll();
header('Location: delete.html');


?>
