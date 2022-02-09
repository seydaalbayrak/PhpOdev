<?php 

define ('SEKIL','O');

function ucgen($adet)
{
    for($i=1;$i<=$adet;$i++)    
    {
    $a=0;
    while ($a<$i)
    { 
        echo SEKIL;
        $a++;
    }
    echo "<br>";

    }

}
ucgen(15)
 



?>
