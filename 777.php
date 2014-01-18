<?php
$data = "Hello World";
	$hash = md5($data);
	echo $hash; // b10a8db164e0754105b7a99be72e3fe5
?>
<?php	
echo "<br>";
	$data1 = "На третьем месте будут комментарии. При выполнении сложных действий в программе, обязательно нужно комментировать эти участки кода, в первую очередь это нужно для себя, чтобы быстро вспомнить что Вы делали и, собственно говоря, для чего.  Так же нужно не забывать о других программистах, если Вы работает в команде, то комментарии в коде — это самое необходимое.";
	$hash1 = md5($data1);
	echo $hash1; // b10a8db164e0754105b7a99be72e3fe5

?>
<?php	
echo "<br>";
	$data2= "На третьем месте будут комментарии. При выполнении сложных действий в программе, обязательно нужно комментировать эти участки кода, в первую очередь это нужно для себя, чтобы быстро вспомнить что Вы делали и, собственно говоря, для чего.  Так же нужно не забывать о других программистах, если Вы работает в команде, то комментарии в коде — это самое необходимое.";
	$hash2 = md5($data2);
	echo $hash2; // b10a8db164e0754105b7a99be72e3fe5
echo "<br>";
?>

<?php	
echo "<br>";
$wera['we']="cool!!!!";
$wera['book']="45 tyr!";
$wera['lon']="78    rttyyyy";
echo $wera['lon']." ".$wera['we'].$wera['book'];
$login=($_POST['login']);
echo '<form method="post" class="form-signin" action="/guestbook!/777.php" role="form">
		<div class="form-group">
		  <h1 class="form-signin-heading">Registration form</h1>
	

  <div class="form-group">
    <input type="text" class="form-control" name="login" value="'.htmlspecialchars($login).'">
    </div>
	<div class="form-group">
	  <button type="submit" class="btn btn-lg btn-primary btn-default btn-block">Sign up</button>
	</div>
	</form>';
/*
$email="451";
$pass="341";	
$login=($_POST['login'])	
mysql_query("INSERT INTO `database!`.`users` (`email`, `pass`,`login`) VALUES ('$email', '$pass','$login' )");
*/	
echo '<br><br>';
$errors['k']="ewr";
$errors['k3']="efwr";
$errors=empty($errors);
if (empty($errors)) {echo "777788";} else {echo "1122";}

echo '<br><br><br>';




echo '<form method="post" class="form-signin" role="form">

<div class="form-group">
<input type="text" class="form-control" name="1234">

</div>
	<div class="form-group">
	  <button type="submit" class="btn btn-lg btn-primary btn-default btn-block" name="xx[]" value="2222">Sign up23452345</button>
	</div>
	
	<div class="form-group">
	  <button type="submit" class="btn btn-lg btn-primary btn-default btn-block" name="xx[]" value="7777">Sign up23452345</button>
	</div>
	</form>';
	
	if (isset($_POST['xx'])) {echo $_POST['xx'][0];} 
	echo "<br><br>";
	
	
	
	//echo $_POST('1234');
	
$data = array(
   $email[]= (
       'Email field is required'
   ),
   $pass = array(
       'Password field is required',
       'Password should be more that 7 chars',
   ),
);
//print join($data);
extract($data);
print join("<br>",$email);
//$data1=array("1wert","2ewrt","3wert","41234");
//print join("<br>",$data);
echo '<br>';
echo "----------------------------------------------------------------------------------------------------------------------";
echo '<br><br>';

$data = array(

//array_push('email', 'Email field is required5');

 $email[]=('Email field is requiredqwer7777777'),
 $pass[]=('7777777')
);

extract($data);
print join("<br>",$email);
echo "<br><br>";
if (isset($login)) {print join("<br>",$login);} else {$login=array();print join("<br>",$login);}

echo "<br><br>";
print join("<br>",$pass);

?>
  <div   class="aler alert-danger" >
  
			<div id="gt-c" class="g-section">
<div id="gt-bbar-c">
<div id="gt-bbar" class="goog-inline-block">
<div class="jfk-butterBar jfk-butterBar-info jfk-butterBar-shown" aria-live="assertive" aria-atomic="true">
<span>
<span>Попробуйте новый браузер с функцией автоматического перевода.</span>
<a id="gt-bbar-lm" href="http://www.google.ru/chrome?brand=GGRE&hl=ru">Установить Google Chrome</a>
<a id="gt-bbar-dm" href="javascript:;">Закрыть</a>
</span>
</div>
</div>
</div>



<p class="text-center">	
<?php 

function qqq()
{
echo "Welkome to the Таймази<br><br>";
} 

qqq();


echo "param=".( 3 != 4 ? "5" : "7");




	function qqq17( $w = "" )
	{
	echo $w;
	}

function qqq7( $a = "", $w = "" )
{
echo $w;
echo $a;
} 

$v2 = "И я тоже был такого же мнения! Сейчас всё должно получиться!!!!";


$v = '<div>
		  <p><a href="8777.php">'.$w.'</a></p>
		  <p class="caption">785</p>
      </div>';

qqq7($v,$v2);





$a1='<div>
		  <p><a href="8777.php">';
$a2='Да,да! Одно из правил таково!';
$a3='</a></p>
		  <p class="caption">785</p>
      </div>';
	  
echo $a1.$a2.$a3;

?>

<p><a href="8777.php?a=1&b=2&c=4">Данная ссылка должна сработать я полагаю!!!!</a></p>

</p>
	
	
			    <p class="text-center">asdf asdf asdf</p>
<?php echo time(); ?>
					
			  </div>
