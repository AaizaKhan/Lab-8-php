<?php

function armstrongCheck($num){ 
    $sum = 0;   
    $x = $num;   
    while($x != 0)   
    {   
        $rem = $x % 10;   
        $sum = $sum + $rem*$rem*$rem;   
        $x = $x / 10;   
    }   
      
    // if true then armstrong number 
    if ($num == $sum) 
        return 1; 
      
    // not an armstrong number     
    return 0;     
} 
  
// Driver Code 
$num = 407; 
$flag = armstrongCheck($num); 
if ($flag == 1) 
    echo "True"; 
else
    echo "False"
?> 
