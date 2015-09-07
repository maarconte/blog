<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/article.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa:400,700,300' rel='stylesheet' type='text/css'>
	<meta charset="UTF-8">
	<title>Index</title>
</head>
<body>
<?php $dsn = 'mysql:host=localhost;dbname=site_web';
$user = 'root';
$pass = '';

$pdo = new PDO(
	$dsn,
	$user,
	$pass
);

$request=$pdo->query('SELECT*FROM articles' );
$result=$request->fetchALL();
$ligne=count($result);

?>
<header><a href="index.php"><h1>Blog</h1></a>

<a href="creation_article.html"><input type="button" value="Créer un nouvel article"></a>


</header>

<div class="container">
<section> 


	<?php for ($i=0; $i<$ligne;$i++){?>
	<article>

		<a href="page_article.php?id=<?=$result[$i]['id']?>" > <h1><?= $result[$i]['titre']?></h1></a>
		

	</article>
	<?php }
		?>

</section>
</div>
</body>
</html>

