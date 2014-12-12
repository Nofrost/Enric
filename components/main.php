<?php
if(!isset($page)) { header('Location: index.php');die('Redirect a index'); }

$folder = 'Imatges/carousel/'.$page;
$text_content = file_get_contents($folder.'/texts.txt');
if(false === $text_content) {
	throw new Exception('El fitxer texts no existeix');
}
$text_array = explode(PHP_EOL, $text_content);
$text = array();
foreach ($text_array as $key => $text_content) {
	if(empty($text_content))
		continue;
	if(strpos($text_content,' ') === FALSE) {
		$text[$text_content] = array(
			'desc'=>'',
			'position'=> ($key+1) //No volem que comenci amb 0
		);
	} else {
		$file = strstr($text_content,' ',true);
		$desc = substr(strstr($text_content,' '),1);
		if(!empty($file)) {
			$text[$file] = array(
				'desc'=>$desc,
				'position'=> ($key+1) //No volem que comenci amb 0
			);
		}
	}
}

$fotos = array();
foreach (new DirectoryIterator($folder) as $fileInfo) {
	if($fileInfo->isDot()) continue;
	if($fileInfo->getExtension() != 'jpg') continue;
	$foto = array(
		'pathname' => $fileInfo->getPathname()
	);
	if(array_key_exists($fileInfo->getFilename(), $text)) {
		$foto['description'] = $text[$fileInfo->getFilename()]['desc'];
		$foto['position'] = $text[$fileInfo->getFilename()]['position'];
	} else {
		$foto['description'] = ''; $foto['position'] = 999;
	}
	$fotos[] = $foto;
}
usort($fotos, function($a, $b) {
	return strnatcmp($a['position'], $b['position']);
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
	if($foto !== $last_foto) {
		echo '<td></td>';
	}
}
?>
					<td></td>
				</tr>
			</table>
		</div>
	</div><!-- end wn div -->

	<div id="scrollbar"></div>
</div>
<div style="clear: both"></div>
