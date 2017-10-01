<?php

$background_color = lightblue;

$username = $_POST['username'];
$password = $_POST['password'];

$quantityA = $_POST['shirtA'];
$quantityB = $_POST['shirtB'];
$quantityC = $_POST['shirtC'];
$totalA = 15*$quantityA;
$totalB = 20*$quantityB;
$totalC = 25*$quantityC;

$shipping = $_POST['shipping'];

echo "<b>Welcome</b>, ".$username. "<br> <b>Password:</b> ".$password;

echo "<table border='1'>";

for($tr=1;$tr<=4;$tr++){

    echo "<tr>";
        for($td=1;$td<=4;$td++){
              //Row 1
               if($tr==1 && $td==1){
                 echo "<td align='center'>"." "."</td>";
               }
               else if($tr==1 && $td==2){
                 echo "<td align='center'>"."Quantity"."</td>";
               }
               else if($tr==1 && $td==3){
                 echo "<td align='center'>"."Cost per Item"."</td>";
               }
               else if($tr==1 && $td==4){
                 echo "<td align='center'>"."Sub Total"."</td>";
               }

               //Row 2
               else if($tr==2 && $td==1){
                 echo "<td align='center'>"." Shirt One "."</td>";
               }
               else if($tr==2 && $td==2){
                 echo "<td align='center'>".$quantityA."</td>";
               }
               else if($tr==2 && $td==3){
                 echo "<td align='center'>"."$15.00"."</td>";
               }
               else if($tr==2 && $td==4){
                 echo "<td align='center'>"."$".$totalA.".00"."</td>";
               }

               //Row 3
               else if($tr==3 && $td==1){
                 echo "<td align='center'>"." Shirt Two "."</td>";
               }
               else if($tr==3 && $td==2){
                 echo "<td align='center'>".$quantityB."</td>";
               }
               else if($tr==3 && $td==3){
                 echo "<td align='center'>"."$20.00"."</td>";
               }
               else if($tr==3 && $td==4){
                 echo "<td align='center'>"."$".$totalB.".00"."</td>";
               }

               //Row 4
               else if($tr==4 && $td==1){
                 echo "<td align='center'>"." Shirt Three"."</td>";
               }
               else if($tr==4 && $td==2){
                 echo "<td align='center'>".$quantityC."</td>";
               }
               else if($tr==4 && $td==3){
                 echo "<td align='center'>"."$25.00"."</td>";
               }
               else if($tr==4 && $td==4){
                 echo "<td align='center'>"."$".$totalC.".00"."</td>";
               }
        }
    echo "</tr>";
  }
echo "</table>";


/*echo "<table border='1'>";
    for($tr=1;$td<=1;$td++){
      echo "<tr>";
      for($td=1;$td<=4;$td++){
                         echo "<td align='center'>"."$25.00"."</td>";
        /*if($td==1){
          echo "<td align='center'>"."Shipping"."<col width='75'>"."</td>";
        }
        else if($td==2){
          echo "<td align='center'>"."Shipping"."<col width='75'>"."</td>";
        }
        //echo "<td align='center'>"."$"."</td>";
      }
    }
echo "</tr>";
echo "</table>";*/





echo "<table border='1'>";

for($tr=1;$tr<=1;$tr++){

    echo "<tr>";
        for($td=1;$td<=4;$td++){
              //Row 1
              if($tr==1 && $td==1){
                echo "<td align='center'>"."Shipping"."<col width='75'>"."</td>";
              }
              else if($tr==1 && $td==2){
                echo "<td align='center'>"."Quantity"."</td>";
              }
        }
    echo "</tr>";
  }
echo "</table>";



?>
