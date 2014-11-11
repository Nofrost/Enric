<?php if(!isset($page)) { header('Location: index.php');die('Redirect a index'); } ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<?php include "head.php"; ?>
	</head>

	<body>
		<!--<div id="guia_layout"></div>-->

		<?php include "header.php"; ?>

		<?php include "main_about.php"; ?>


	</body>
</html>
