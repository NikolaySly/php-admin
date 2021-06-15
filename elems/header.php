<a <?php if ($_GET['page'] == 'index' or $_GET['page'] == '') {echo 'class ="active " ';}?>  href="/">главная</a>
<a <?php if ($_GET['page'] == 'contacts') {echo 'class ="active " ';}?> href="?page=contacts">контакты</a>
<a <?php if ($_GET['page'] == 'about') {echo 'class ="active " ';}?>  href="?page=about">о нас</a>

<?php
/*
function creatLink($href, $text)
{
if ((!isset($_GET['page']) and $href == '/') or (!isset($_GET['page']) and $_GET['page'] == $href)){
    $class = ' class="active"';
} else{
    $class = '';
}
}




*/
?>