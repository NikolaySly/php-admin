<?php
$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = 'root'; //пароль, по умолчанию пустой
$db_name = 'mysite'; //имя базы данных

//Соединяемся с базой данных используя наши доступы:
$link = mysqli_connect($host, $user, $password, $db_name);



function showPage($link, $info = ''){
	$query = "SELECT id, title, url FROM pages";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

	$content = '<table>
	<tr>
	<th>title</th>
	<th>url</th>
	<th>edit</th>
	<th>del</th>
	</tr>';

	foreach ($data as $elem) {
		$content .= "<tr>
		<td>{$elem['title']}</td>
		<td>{$elem['url']}</td>
		<td><a href=\"\">edit</a></td>
		<td><a href=\"?del={$elem['id']}\">del</a></td>
		</tr>";
	}

	$content .= '</table>';

	$title = 'adminka';

	include 'layout.php';
}


function delPage($link) {
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		$query = "DELETE FROM pages WHERE id=$id";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	return true;
	} else {
		return false;
	}
}


	if (delPage($link)) {
		$info = 'страница удалена';
	};

showPage($link, $info);

?>