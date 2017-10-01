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
if($shipping == "7 Day"){
  $shippingCost = 0;
}
else if($shipping == "Over Night"){
  $shippingCost = 50;
}
else if($shipping == "Three Day"){
  $shippingCost = 5;
}

$grandTotal = $totalA + $totalB + $totalC + $shippingCost;

echo "<h2>Credentials:</h2>";
echo "<b>Email:</b> ".$username. "<br> <b>Password:</b> ".$password."<br><br><br>";
echo "<h2>Receipt:</h2>";
echo "<table border='1' bordercolor='white'>";
echo "<col width='65'>";

for($tr=1;$tr<=4;$tr++){

    echo "<tr>";
        for($td=1;$td<=4;$td++){
              //Row 1
               if($tr==1 && $td==1){
                 echo "<td class=Header align='center'>"." "."</td>";
               }
               else if($tr==1 && $td==2){
                 echo "<td class=Header align='center'>"."<b>Quantity</b>"."</td>";
               }
               else if($tr==1 && $td==3){
                 echo "<td class=Header align='center'>"."<b>Cost per Item</b>"."</td>";
               }
               else if($tr==1 && $td==4){
                 echo "<td class=Header align='center'>"."<b>Sub Total</b>"."</td>";
               }

               //Row 2
               else if($tr==2 && $td==1){
                 echo "<td class=Header align='center'>"."<b>Shirt A</b>"."</td>";
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
                 echo "<td class=Header align='center'>"."<b>Shirt B</b>"."</td>";
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
                 echo "<td class=Header align='center'>"."<b>Shirt C</b>"."</td>";
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





/*echo "<table border='1'>";

for($tr=1;$tr<=1;$tr++){

    echo "<tr>";
        for($td=1;$td<=4;$td++){
              //Row 1
              if($tr==1 && $td==1){
                echo "<td align='center'>"."Shipping"."<col width='150'>"."</td>";
              }
              else if($tr==1 && $td==2){
                echo "<td align='center'>"."Quantity"."</td>";
             }
        }
    echo "</tr>";
  }
echo "</table>";*/

echo "<table class='table2' border='1' bordercolor='white'>";
echo "<col width='65'>";
echo "<col width='165'>";
echo "<col width='69.5'>";
echo "<tr>";
  echo "<th class=header><b>Shipping</b></th>";
  echo "<th>".$shipping."</th>";
  echo "<th>$".$shippingCost.".00</th>";
echo "</tr>";
echo "</table>";

echo "<table class='table2' border='1' bordercolor='white'>";
echo "<col width='232'>";
echo "<col width='70'>";
echo "<tr>";
  echo "<th class=header><b>Total Cost</b></th>";
  echo "<th class=header><b>$".$grandTotal.".00</b></th>";
echo "</tr>";
echo "</table>";



echo "<style> td.header{ background-color: #87E274; }</style>";
echo "<style> body{ background-color: lightblue; }</style>";
echo "<style>table{ background-color: #CC92CF; border: white; text-align: center; }</style>";
echo "<style>table.table2{ border-top: none; border: white; }</style>";
echo "<style>th{ font-weight: normal; }</style>";
echo "<style>th.header{ background-color: #87E274; }</style>";


?>
