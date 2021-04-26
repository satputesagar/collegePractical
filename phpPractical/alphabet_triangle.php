<?php  
$alpha = range('a', 'z');  
for($i=0; $i<5; $i++){ 
	echo" ";
for($k=5;$k>=$i;$k--){  
	echo "  ";  
}   
  for($j=5; $j>$i; $j--){  
    echo $alpha[$i];  
    }  
    echo "<br>";  
}  
?>  