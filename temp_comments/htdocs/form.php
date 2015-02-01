<?php 
$your_name = htmlspecialchars($_POST["your_name"]);
$message = htmlspecialchars($_POST["message"]);

$your_name = check_input($_POST["your_name"], "Введите ваше имя!");
$message = check_input($_POST["message"], "Укажите текст комментария!");

function check_input($data, $problem = "")
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
	{
		show_error($problem);
	}
return $data;
}
function show_error($myError)
{
echo $myError; 
exit();
}

mysql_connect("localhost","root","root") or die (mysql_error());
mysql_select_db("comment") or die (mysql_error());
$strSql = "INSERT INTO comm(autor,commentText) VALUE('".$your_name."','".$message."')";
mysql_query($strSql) or die (mysql_error());
mysql_close();
?>
<!DOCTYPE html>
<html>
  <head><style>
h4{margin-left:50px;
padding-top:40px;}
.top{
margin-top:20px;
margin-left:50px;

}
a{

color:white;
}
a:hover{
text-decoration:none;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Comments</title>
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet"/>
    <link type="text/css" href="css/my.css" rel="stylesheet"/>
  </head>

  <body>
<div id="mywrap" class="form_col">
<h4 >Ваш комментарий успешно добавлен</h4>
<a href="index.php" class="btn btn-success top">На Главную</a>
</div>