<?php

function mes($n){
	$meses=[
	'enero',
	'febrero',
	'marzo',
	'abril',
	'mayo',
	'junio',
	'julio',
	'agosto',
	'septiembre',
	'octubre',
	'noviembre',
	'diciembre',
	];
	return $meses[$n-1];
}
//echo mes(8);

for($i=1;$i<13;$i++){
	if(!strstr(mes($i),'r'))
	echo mes($i).'<br>';
}	