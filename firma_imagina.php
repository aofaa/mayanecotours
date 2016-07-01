<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.imaginaestudio.mx/imagina_estudio.php");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$result = curl_exec($ch);
curl_close($ch);
$result = preg_replace("#(<\s*a\s+[^>]*href\s*=\s*[\"'])(?!http)([^\"'>]+)([\"'>]+)#",'$1http://www.imaginaestudio.mx/imagina_estudio.php/$2$3', $result);
echo $result 
 ?>