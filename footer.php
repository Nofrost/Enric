<?php if(!isset($page)) { header('Location: index.php');die('Redirect a index'); } ?>
<footer>
	<div style="clear: both"></div>
	<div id="footer_icons">
		<div id="footer_about" <?php if($page == 'about') echo 'class="active"'; ?>><a href="about.php"></a></div>
		<div id="footer_mail">
			<a href="mailto:enric@kilografik.com" id="btn_mail"></a>
		</div>
		<div id="footer_linkedin">
			<a href="https://www.linkedin.com/pub/enric-mu%C3%B1oz/10/450/ba5/en" target="_blank"></a>
		</div>
		<div id="footer_copyright"></div>
		<div id="footer_info">
			<div id="about" <?php if($page != 'about') echo 'class="hide"'; ?>>ABOUT & INFO</div>
			<div id="mail" class="hide">MAIL</div>
			<div id="linkedin" class="hide">LINKEDIN</div>
			<div id="copyright" class="hide">Copyright &copy; 2014 All Rights Reserved. Design: Enric Mu&ntilde;oz. Web Developer: Dan-Marc Ramos, Arnau-Lenin Gols</div>
		</div>
	</div>
</footer>

