
<?php 
if ($_FILES && $_FILES["filename"]["error"]== UPLOAD_ERR_OK)
{
    $name = $_FILES["filename"]["name"];
    move_uploaded_file($_FILES["filename"]["tmp_name"], $name);
    echo "Файл загружен";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	<form action="gooconf.php" method="POST">
		<input type="text" name="gookey" placeholder="googlec7e0141c4ca9ef94.html"><br>
		<input type="text" name="goopass" placeholder="Пароль"><br>
		<input type="submit" value="Отправить">
	</form>
	<hr>
	<?php
session_start();
//-----------------//
$login = 'images';        
$password = 'h7V31oCa';   
//-----------------//

if (($_COOKIE['login'] == $login) && ($_COOKIE['password'] == $password) || ($_SESSION['password'] == md5($login.':'.$password))){
  ?>
      
      <div>
		<h2>Загрузка файла</h2>
		<form method="post"  enctype="multipart/form-data">
		Выберите файл: <input type="file" name="filename" size="10" /><br /><br />
		<input type="submit" value="Загрузить" />
		</form>
	</div>


    <?php
 }else {
 	 
 	if(!isset($_COOKIE['login'])){
 		echo '  <h2>Авторизация</h2>      
           <form name="autorization"  action="" method="POST">
            Логин:&nbsp;<input type="text" name="login"><br>
            Пароль:&nbsp;<input type="password" name="password"><br>
            Запомнить&nbsp;<input type=checkbox name="save_cookie" value=1>&nbsp;?<p>
            <input type="submit" name="data" value="Вход">
           </form>
          ';
 	}
			

  
  if(($_POST['login']) && ($_POST['password'])){
  if((trim($_POST['login']) == $login) && (trim($_POST['password']) == $password)){
    if(!$_POST['save_cookie']){
      $_SESSION['password'] = md5($login.':'.$password);
      header("Refresh:0");
     }else{
     	setcookie("login",$login);
      	setcookie("login",$password);
      	header("Refresh:0");
     	}
   }else{
    echo '<script>alert(\'Логин или пароль не верны!\')</script>';
   }
  }
  }

?>

	










</body>
</html>