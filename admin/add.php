<?php
$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = 'root'; //пароль, по умолчанию пустой
$db_name = 'mysite'; //имя базы данных

//Соединяемся с базой данных используя наши доступы:
$link = mysqli_connect($host, $user, $password, $db_name);


function getPage($info = '') {
	$title = 'add page';
	$content = '<form action="" method="POST">
		<input name="title">
		<br>
		<br>
		<input name="url">
		<br>
		<br>
		<textarea name="text"></textarea>
		<input type="submit">
		</form>';
		
	include 'layout.php';
}
function addPage($link) {
	if (isset($_POST['title']) and isset($_POST['url']) and isset($_POST['text'])) {
		$title = $_POST['title'];
		$url = $_POST['url'];
		$text = $_POST['text'];
		$query = "INSERT INTO pages SET title='$title', url='$url', text='$text'";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
	}
}

addPage($link);
getPage();

?>