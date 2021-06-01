<?php
$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = 'root'; //пароль, по умолчанию пустой
$db_name = 'mysite'; //имя базы данных

//Соединяемся с базой данных используя наши доступы:
$link = mysqli_connect($host, $user, $password, $db_name);


    if (empty($_GET['page'])) {
    $page = 'index';
} else {
    $page = $_GET['page'];
}


$query = "SELECT * FROM pages WHERE url='$page'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$page = mysqli_fetch_assoc($result);






if (!$page) {
    $query = "SELECT * FROM pages WHERE url = '404'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $page = mysqli_fetch_assoc($result);
} 

$title = $page['title'];
$content = $page['text'];



	include 'layout.php';
		

?>