<?php
function sum($num1=null,$num2=null,$num3=null){
 $sum = $num1 + $num2 + $num3;
 return $sum;
}
echo " Sum is ".sum(120,12);

function mult($num1=null,$num2=null,$num3=null){
 $mult = $num1 * $num2 * $num3;
 return $mult;
}
echo " Multiplication is ".mult(120,1,2);

function sub($num1=null,$num2=null,$num3=null){
 $sub = $num1 - $num2 - $num3;
 return $sub;
}
echo " Substraction is ".sub(120,12,12);

function division($num1=null,$num2=null,$num3=1){
 $div = $num1 / $num2 / $num3;
 return $div;
}
echo " Division is ".division(120,12);
  
?>