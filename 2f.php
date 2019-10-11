<?php

for($o=2;$o<=10;$o=$o+2){
	echo '<br>';
	for($i=1;$i<=10;$i=$i+1){
		echo $o.'*'.$i.'='.($o*$i).'<br>';
	}
}