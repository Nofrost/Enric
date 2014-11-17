<?php if(!isset($page)) { header('Location: index.php');die('Redirect a index'); } ?>

<div id="main">
	<div id="main_about">
		<div id="about_wrap">
			<div id="idiomes">
				<div id="catala">CATAL&#192;</div>
				<div id="espanol">ESPA&#209;OL</div>
				<div id="english">ENGLISH</div>
				<!--<div id="frenchute">FRAN&#199;AIS</div>-->
			</div>
			<div id="content_catala">
				<?php include "catala.php"; ?>
			</div>
			<div id="content_espanol" class="hide">
				<?php include "espanol.php"; ?>
			</div>
			<div id="content_english" class="hide">
				<?php include "english.php"; ?>
			</div>
		</div>
	</div>
</div>
