<?php

$rows = 100;
$cols = 100;

echo "<table border=\"1\">";

        for ($r =0; $r <= $rows; $r++){

            echo"<tr>";

            for ($c = 0; $c <= $cols; $c++){
                
                if($c==0 && $r==0){
                    echo "<td>"." "."</td>";
                }
                else if($r==0){
                    echo "<td>".$c."</td>";
                }
                else if($c==0){
                    echo "<td>".$r."</td>";
                }
                else{
                    echo "<td>".$c*$r."</td>";
                }
            }
            echo "</tr>";
        }

  echo"</table>";

?>