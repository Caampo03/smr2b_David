<?php
	$a=2;
	$b=3;
	$c=2;

function tipo_triangulo_lado($a,$b,$c){
	$r='escaleno';
	if($a==$b or $b==$c or $a==$c) 
		$r='isósceles';
	if($a==$b and $b==$c)
		$r='equilatero';
	return $r;
}

echo tipo_triangulo_lado(1,1,1).' - equilatero<br/>';
echo tipo_triangulo_lado(1,2,3).' - escaleno<br/>';
echo tipo_triangulo_lado(1,2,1).' - isosceles<br/>';
echo tipo_triangulo_lado(1,1,3).' - isosceles<br/>';
echo tipo_triangulo_lado(3,1,1).' - isosceles<br/>';