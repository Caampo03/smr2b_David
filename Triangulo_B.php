<?php
$A=40;
$B=40;
$C=100;

	function tipo_triangulo_angulo($A,$B,$C){
		$r='acutangulo';
	
	if ($A==90 or $B==90 or $C==90)
		$r='rectangulo';
	
	if ($A>90 or $B>90 or $C>90)
		$r='obtusangulo';
	
	return $r;
	}
	
echo tipo_triangulo_angulo(60,60,60).' ¿=? acutangulo<br/>';
echo tipo_triangulo_angulo(90,60,30).' ¿=? rectangulo<br/>';
echo tipo_triangulo_angulo(45,60,75).' ¿=? acutangulo<br/>';
echo tipo_triangulo_angulo(45,45,90).' ¿=? rectangulo<br/>';
echo tipo_triangulo_angulo(100,40,40).' ¿=? obtusangulo<br/>';
echo tipo_triangulo_angulo(10,10,160).' ¿=? obtusangulo<br/>';