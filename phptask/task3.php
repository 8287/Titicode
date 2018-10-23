<?php 
$temperature = 40;

if ( $temperature <= 20) {
    echo "It is really cold today";
       }
else if  ($temperature  > 20 && $temperature < 30) {
    echo "The weather is just perfect";
             }
else if ($temperature  >=30 && $temperature < 40) {
    echo "Is so hot today!";
               }
 else {

   echo "Am I in the sahara desert";
        }

?>