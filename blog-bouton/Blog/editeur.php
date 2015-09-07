<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/article.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa:400,700,300' rel='stylesheet' type='text/css'>
	<meta charset="UTF-8">
	<title>Blog</title>
</head>
<body>

<div class="container">
<h1>Modifier l'article</h1>





<?php

$dsn = 'mysql:host=localhost;dbname=site_web';
$user = 'root';
$pass = '';

$pdo = new PDO(
	$dsn,
	$user,
	$pass
);

$request= $pdo->query('SELECT*FROM articles WHERE id="'.$_GET['id'].'" ');
$result=$request->fetchAll();
$ligne=count($result);


?>

<form action="update.php?id=<?=$_GET['id']?> " method="post">

<input type="text" name="titre" value="<?=$result[0]['titre'];?>"></input>
<textarea name="texte" id="texte" cols="50" rows="20"> <?=$result[0]['texte'];?></textarea>


<input type="submit" name="submit" value="Envoyer"></input>
	<a class="annuler" href="index.php">Annuler</a>

</form>
</div>
</body>
</html> 