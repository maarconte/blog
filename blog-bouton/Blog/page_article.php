<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/article.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa:400,700,300' rel='stylesheet' type='text/css'>
	<meta charset="UTF-8">
	<title>Accueil</title>
</head>
<body>


<header><a href="index.php"><h1>Blog</h1></a>

<a href="creation_article.html"><input type="button" value="Créer un nouvel article"></a>


</header>
<div class="container">
<section> 

<?php  

$dsn = 'mysql:host=localhost;dbname=site_web';
$user = 'root';
$pass = '';

$pdo = new PDO(
	$dsn,
	$user,
	$pass
);

$id = $_GET['id'];

$request=$pdo->query('SELECT*FROM articles WHERE id="'.$_GET['id'].'" ');
$result=$request->fetchALL();
$ligne=count($result);


function idArticle($result){ 

	?>

<article>

		<h1><?= $result[0]['titre']?></h1>
		<p><?= $result[0]['texte']?></p>

<div class="bouton">

<a href="delete.php?id=<?=$result[0]['id']?>"><input type="button" value="Supprimer" style="position:inherit;float:left;margin:0 10px"></a>
<a href="editeur.php?id=<?=$result[0]['id']?>"><input type="button" value="Modifier" style="position:inherit;float:left;margin:0 10px"></a>


</div>

</article>


<?php } ?> 

		<?php 
echo idArticle($result);
		?>

</section>
</div>
</body>
</html>
