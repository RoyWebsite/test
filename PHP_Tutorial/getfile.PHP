<?php

header ('Content-Type; text/plain');
$file = "./text.txt";

$document = file_get_contents($file);

$lines = explode("\n", $document);

foreach ($lines as $newline){
	echo $newline . '<br>';
}

?>