<?php if(!isset($page)) { header('Location: index.php');die('Redirect a index'); } ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<?php include "head.php"; ?>
	</head>

	<body id="page_<?php echo $page; ?>">
<?php
		include "header.php";

		if($page =='about') {
			include "main_about.php";
		} else {
			include "main.php";
		}

		include "footer.php";
?>
	</body>
</html>
