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
header
</header>
<br>

<main>
<?php if($info) echo "<p>$info</p>";?>
<?= $content?>
</main>
<br> 

<footer>
footer
</footer>



</body>
</html>