<?php if(!isset($page)) { header('Location: index.php');die('Redirect a index'); } ?>

<header>
	<div id="header_wrapper">
		<div id="logo">
			<a href="index.php"><img src="Imatges/Logo_EM.svg" /></a>
		</div>

		<div id="menu">
			<div id="menuLeft">
				<span id="titol">ENRIC MU&#209;OZ</span><br />
				<span id="sub1">HOT DESIGN / EMOTIONAL COMMUNICATION</span><br />
				<span id="sub2">by KILOGRAFIK</span>
			</div>

			<div id="menuRight">
				<span id="editorial" <?php if($page == 'editorial') echo 'class="activeMenu"';?>><a href="index.php" >EDITORIAL DESIGN</a></span> /
				<span id="identity"<?php if($page == 'identity') echo 'class="activeMenu"';?>><a href="index.php" >IDENTITY</a></span> /
				<span id="promotion" <?php if($page == 'promotion') echo 'class="activeMenu"';?>><a href="index.php" >PROMOTION & PUB</a></span> /<br/>
				<span id="events" <?php if($page == 'events') echo 'class="activeMenu"';?>><a href="index.php" >EVENTS, SCREEN & PACK </a></span> /
				<span id="illustration" <?php if($page == 'illustration') echo 'class="activeMenu"';?>><a href="index.php" >ILLUSTRATION & PHOTO</a></span> /<br/>
				<span id="intro" <?php if($page == 'index') echo 'class="activeMenu"';?>><a href="index.php" >INTRO & VIEW MIX</a></span> /
			</div>
		</div>
	</div>
</header>
