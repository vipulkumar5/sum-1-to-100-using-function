<?php 
function myClass($x,$sum,$count){
    for($i = 0;$i <= $x; $i++){
        $sum = $sum+$i;
        echo $sum;
        $count++;
        echo("\n");
    }
    
    
}
 myClass("100","0","0");

?>