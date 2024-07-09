<?php

require_once "EvBiTek.php";

echo logic_Operand();

echo logic_Operand2();

$admini_object = new admin("Evgen", 2002);

echo "<br>";

echo $admini_object->print_Hi();

echo "<br>";

echo $admini_object->getUsername(). "<br>" . $admini_object->getPassword();

?>
