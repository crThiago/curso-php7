<?php

$filename = "images" . DIRECTORY_SEPARATOR . "logo.png";

//file_get_contents - Lê o conteúdo completo do arquivo
$base64 = base64_encode(file_get_contents($filename)); 

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode =  "data:" . $mimetype . ";base64," . $base64;

?>
<a href="<?=$base64encode?>">Link Para Imagem</a>

<img src="<?=$base64encode?>">