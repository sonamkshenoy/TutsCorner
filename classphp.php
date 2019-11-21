<?php

$numbers = array(1,2,);
foreach($numbers as  $number){
  echo "Value is $number"."</br>";
}

$salaries = array("D3"=>2000, "SR"=>1000, "SA"=>5000);
echo $salaries['SA'];

$marks = array(
  "S1"=>array(
    "physics"=>25,
    "chemistry"=>50
  ),
  "S2"=> array(
    "physics"=>23,
  )
);

echo count($marks);

 ?>

 <input type="text" name="name" value="">Name <br>
 <input type="text" name="email" value="">E-mail <br>
 <input type="text" name="" value="">Time <br>
