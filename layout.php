<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>

<header>
<?php include 'elems/header.php';?>
</header>

<main>
<?= $content?>
</main>

<footer>
<?php include 'elems/footer.php';?>
</footer>



</body>
</html>