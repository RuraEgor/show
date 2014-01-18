<?php	
$db = "database!";
$host = "localhost";
$user = "root";
$pass = "";


$connect = mysql_connect($host, $user, $pass);  

mysql_select_db($db); 

	
$login=($_POST['login']);	
mysql_query("INSERT INTO `box` (`login`) VALUES ('$login' )");
echo $login;

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

echo $q = $a + $b + $c;

?>

<html>
<head>
<script type="text/javascript">
function show_confirm()
{
var r=confirm("Нажмите кнопку!");
if (r==true)
{
alert("Вы нажали OK!");
}
else
{
alert("Вы нажали Отмена!");
}
}
</script>
</head>
<body>

<input type="button" onclick="show_confirm()" value="Показать окно подтверждения" />

</body>
</html> 