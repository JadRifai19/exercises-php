<!-- part a -->

<?php

$grocery = array('Eggs', 'Milk', 'Cheese', 'Water Pack', 'Tissues', 'Watermelon');


echo "Hello Sir, do you have {$grocery[0]}, {$grocery[1]}, and {$grocery[2]}? ";
echo "Also if you sell fruits can I find a {$grocery[5]}?";
?>

<!-- part b -->

<?php

$items = array(
  "eggs" => array("balade", "mazere3"),
  "milk" => array("Fresh", "Taanayel"),
  "water-pack" => array("Tanoureen", "Reem")
);

echo "Hey Sir, Please I need 1 pack of {$items['eggs'][0]} eggs and 3 {$items['water-pack'][1]} Water Pack.";
?>