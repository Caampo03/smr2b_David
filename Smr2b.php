
<a href="http://192.168.0.100/smr2b_jesuscrespo/smr2b.php">Jesuscrespo</a>
David
<a href="http://192.168.0.107/smr2b_mario/smr2b.php">Mario</a>

<?php
$f=fopen('visitas.txt','a');
fwrite($f,date('Y-m-d H:i:s '));
fwrite($f,$_SERVER['REMOTE_ADDR']);
fwrite($f,"\r\n");
fclose($f)
?>