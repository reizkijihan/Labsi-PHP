<?php

$food=array(
"breafast" => array("bread", "cereal", "pancake"),
"lunch" => array("chicken", "burger"),
"dinner" => array("steak")
);

while(list($index1, $nilai1)= each($food)){
	echo "List for your $index1 : <br>";
	$nomor = 1;
	while(list($index2,$nilai2) = each($nilai1))
	{
		echo "$nomor. $nilai2 <br>";
		$nomor++;
	}
}
?>