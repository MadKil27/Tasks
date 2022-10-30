<?php

$dir = __DIR__ . '/datafiles';
$path = glob($dir . '/[a-zA-Z0-9]*.ixt'); // Поиск в директории по регулярному выражению

foreach($path as $file) {
	print(basename($file)."<br>");	
} 


