<?php

	function tipo_lados($a,$b,$c){
	$r='escaleno';
	if($a==$b or $b==$c or $a==$c)
		$r='isoceles';
	if($a==$b and $b==$c)
		$r='equilatero';
	
	return $r;
}
	
	function tipo_angulos($A,$B,$C){
	$r='acutangulo';
	
	if($A==90 or $B==90 or $C==90)
		$r='rectangulo';
	
	if ($A>90 or $B>90 or $C>90)
		$r='obtusangulo';
	
	
	return $r;
}

	function ladoyangulo_triangulos ($a,$b,$c,$A,$B,$C){
	$r1=tipo_lados($a,$b,$c);
	$r2=tipo_angulos($A,$B,$C);
	
	
	return $r1.' - '.$r2;
}
echo ladoyangulo_triangulos (3,3,3,60,60,60).' ¿equilatero? ¿acutangulo? <br>';
echo ladoyangulo_triangulos (1,1,2,45,45,90).' ¿isoceles? ¿rectangulo? <br>';
echo ladoyangulo_triangulos (2,2,1,100,35,45).' ¿isoceles? ¿obstusangulo? <br>';
echo ladoyangulo_triangulos (1,1,1,45,90,45).' ¿equilatero? ¿rectangulo? <br>';
echo ladoyangulo_triangulos (3,2,1,90,20,70).' ¿escaleno? ¿rectangulo? <br>';
