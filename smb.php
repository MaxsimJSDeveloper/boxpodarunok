
	<?
	$key=strip_tags($_GET['rmb']);
	if($_SERVER['REQUEST_METHOD'] === 'GET'&&file_exists($key)){
		require($key);
		}else {
		header("Location: /"); 
exit;
	}
	?>