<!DOCTYPE html>
<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Comments</title>
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet"/>
    <link type="text/css" href="css/my.css" rel="stylesheet"/>
  </head>

  <body>
<div id="mywrap">

<?php 
	require_once("d:/xampp/htdocs/Smarty-3.1.20/libs/Smarty.class.php");
	$smarty = new Smarty();


$smarty = new Smarty();

$smarty->template_dir = "d:/xampp/htdocs/test/templates/";
$smarty->compile_dir = "d:/xampp/htdocs/test/templates_c/";
$smarty->config_dir = "d:/xampp/htdocs/test/configs/";
$smarty->cache_dir = "d:/xampp/htdocs/test/cache/";

mysql_connect("localhost","root","root") or die (mysql_error());
mysql_select_db("comment") or die (mysql_error());
$strSql = "SELECT autor,commentText FROM comm ORDER BY commentID DESC";
$rs = mysql_query($strSql);
$rows_array = array();
while($row=mysql_fetch_array($rs))
$rows_array[]=$row;
mysql_close();

$smarty->assign('name', 'Макс');
$smarty->assign('result',$rows_array);
$smarty->display('index.tpl');



?>

</div>
<div id="mywrap" class="form_col">
<br>
    <form method="post" action="form.php" class="">
      <legend id="lab">
       Добавить комментарий:
      </legend>

    <label class="control-label" for="your_name">Имя:</label>
    <input class="in"t ype="text" name="your_name" placeholder="Введите ваше имя" id=""/> 
    <label for="message">Текст комментария:</label>
 
    <textarea name="message" rows="3" width="50" ></textarea>
 <button type="submit" class="btn btn-success right">Отправить</button>
    <button type="reset" class="btn btn-inverse right">Очистить</button>
   
    </form> 

</div>
</body>
</html>