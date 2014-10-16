<?php if(!isset($page)) { header('Location: index.php');die('Redirect a index'); } ?>

<!-- Configurations & CSS -->
<link href='http://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="scrollbar_h.css"/>
<link type="text/css" rel="stylesheet" href="Enric.css"/>

<title><?php echo (empty($page_title)) ? 'Enric_Mu&#241oz' : $page_title; ?></title>