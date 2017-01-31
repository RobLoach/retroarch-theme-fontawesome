<?php

use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Process\Process;

require_once 'vendor/autoload.php';

// Clear out the PNG directory.
deleteContents('png');

// Inherit from MonoChrome.
copyDir('vendor/libretro/retroarch-assets/xmb/monochrome/png', 'png');

// Load the icons to generate.
$yaml = file_get_contents('src/icons.yml');
$icons = Yaml::parse($yaml);
foreach ($icons as $destination => $id) {
	// Load the Unicode for the Font Awesome icon.
	$unicode = findUnicode($id);
	if ($unicode) {
		// Load the character for the icon.
		$char = unicodeToChar($unicode);
		$process = new Process("convert -background none -gravity center -extent 256x256 -resize 256x256 -fill '#f2f2f2' -font vendor/fortawesome/font-awesome/fonts/fontawesome-webfont.ttf -pointsize 150 label:$char png/$destination.png");
		$process->run();
	}
	else {
		echo "Not found $id\n";
	}
}

/**
 * Converts the given unicode-16 to its UTF-8 character.
 */
function unicodeToChar($unicode) {
	return json_decode('"\u'.$unicode.'"');
}

/**
 * Scan through the available Font Awesome icons for the given ID.
 */
function findUnicode($id) {
	foreach (fontAwesomeIcons() as $key => $font) {
		//print_r($font);
		if ($font['id'] == $id) {
			return $font['unicode'];
		}
	}
}

/**
 * Load the list of Font Awesome icons.
 */
function fontAwesomeIcons() {
	static $faicons = array();

	if (empty($faicons)) {
		$yaml = file_get_contents('vendor/fortawesome/font-awesome/src/icons.yml');
		$faicons = Yaml::parse($yaml);
	}
	return $faicons['icons'];
}

/**
 * Copies the contents of one directory to another.
 */
function copyDir($src, $dest) {
	$files = glob("$src/*.*");
    foreach($files as $file){
    	$file_to_go = str_replace($src, $dest, $file);
    	copy($file, $file_to_go);
    }
}

/**
 * Delete the contents of the given directory.
 */
function deleteContents($dir) {
	return array_map('unlink', glob("$dir/*"));
}
