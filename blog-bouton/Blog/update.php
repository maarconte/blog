<?php


$dsn = 'mysql:host=localhost;dbname=site_web';
$user = 'root';
$pass = '';

$pdo = new PDO(
	$dsn,
	$user,
	$pass
);


$request= $pdo->query('UPDATE articles SET  titre="'.$_POST['titre'].'", texte= "'.$_POST['texte'].'" WHERE  id="'.$_GET['id'].'"');
$result=$request->fetchAll();

header('Location: index.php');
?>

