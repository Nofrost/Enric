<?php
if(!isset($page)) { header('Location: index.php');die('Redirect a index'); }

$folder = 'Imatges/carousel/'.$page;
$text_content = file_get_contents($folder.'/texts.txt');
if(false === $text_content) {
	throw new Exception('El fitxer texts no existeix');
}
$text_array = explode(PHP_EOL, $text_content);
$text = array();
foreach ($text_array as $text_content) {
	$file = strstr($text_content,' ',true);
	$desc = substr(strstr($text_content,' '),1);
	if(!empty($file) && !empty($desc)) {
		$text[$file] = $desc;
	}
}
$fotos = array();
foreach (new DirectoryIterator($folder) as $fileInfo) {
	if($fileInfo->isDot()) continue;
	if($fileInfo->getExtension() != 'jpg') continue;
	$fotos[] = array(
		'pathname' => $fileInfo->getPathname(),
		'description' => (array_key_exists($fileInfo->getFilename(), $text) ? $text[$fileInfo->getFilename()] : '' )
	);
}
usort($fotos, function($a, $b) {
	return strnatcmp($a['pathname'], $b['pathname']);
});
?>
<div id="main">
	<div id="main_shadow_top"></div>
	<div id="wn"> <!-- scroll area div -->
		<div id="lyr1"> <!-- layer in scroll area (content div) -->
			<table id="taula_ordre" border="0" cellpadding="0" cellspacing="0">
				<tr class="images">
					<td class="space"></td>
<?php
$last_foto = end($fotos);
foreach($fotos as $foto) {
	//var_dump($foto)."\n";
	if(empty($foto['description'])){
		$attr_alt = '';
	} else {
		$attr_alt = 'alt="'.$foto['description'].'"';
	}
	echo '<td><img src="'.$foto['pathname'].'" '.$attr_alt.' /></td>';
	if($foto !== $last_foto) {
		echo '<td class="space"></td>';
	}
}
?>
					<td class="space"></td>
				</tr>
				<tr class="descriptions">
					<td></td>
<?php
foreach($fotos as $foto) {
	echo '<td><p>'.$foto['description'].'</p></td>';
	echo '<td></td>';
}
?>
					<td></td>
				</tr>
			</table>
		</div>
	</div><!-- end wn div -->

	<div id="scrollbar"></div>
</div>
