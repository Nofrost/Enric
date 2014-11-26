<?php if(!isset($page)) { header('Location: index.php');die('Redirect a index'); } ?>

<!-- Configurations, CSS & JS -->
<meta charset="UTF-8">
<meta name="description" content="Enric Muñoz">
<meta name="keywords" content="Enric Muñoz">
<meta name="author" content="Enric Muñoz">

<link type="text/css" rel="stylesheet" href="css/normalize.css"/>
<link type="text/css" rel="stylesheet" href="css/scrollbar_h.css"/>
<link type="text/css" rel="stylesheet" href="css/Enric.css"/>

<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/dw_scroll_c.js"></script>
<script src="js/main.js"></script>

<!-- Icons -->
<link rel="shortcut icon" type="image/x-icon" href="Imatges/AvatarEM.jpg">

<title><?php echo (empty($page_title)) ? 'Enric Mu&#241;oz' : $page_title; ?></title>
