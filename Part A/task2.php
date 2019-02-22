<?php
function power($num,$pw){
	$number= $num;
	for ($i = 1; $i <= $pw-1; $i++)
        $number *= $num;
    return $number;
}
echo "8 power 2 is ".power(8,2)."<br>";
echo "4 power 7 is ".power(4,4)."<br>";
?>