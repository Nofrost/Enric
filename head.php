<?php if(!isset($page)) { header('Location: index.php');die('Redirect a index'); } ?>

<!-- Configurations & CSS -->
<link href='http://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>


<!--<link type="text/css" rel="stylesheet" href="css/scrollbar_h.css"/>-->
<link type="text/css" rel="stylesheet" href="css/Enric.css"/>

<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/dw_scroll_c.js"></script>
<script src="js/main.js"></script>

<title><?php echo (empty($page_title)) ? 'Enric_Mu&#241oz' : $page_title; ?></title>
