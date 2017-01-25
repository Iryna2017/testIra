<?php 
// local time
	echo "Текущее время";
 	echo date('H:i:s');
// local date
 	echo "Текущая дата";
	echo date('j:F:Y');

// VARIABLES (Unit 2)
	$number = 5;
	$name = "Крис";
	echo "Привет, ";
	echo $name;

	echo "Привет $name";
	echo 'Привет $name';

	//
	$weight = 99;
	echo "Вес равен {$weight}kg";
	echo 'Вес равен'.$weight.'kg';

	//Типы данных GETTYPE()
	$value = 9.2;
	echo gettype($value);
	// SETTYPE()
	$value = "22 january 2005";
	settype($value, "integer");
	echo $value;

	// Variable of variable
	$my_age=21;
	$varname = "my_age";
	echo "Значение $varname равно ${$varname}";
	echo 'Значение '.$varname.' равно '.$$varname;

	// Unit 3 CONDITIONS 
	$number = 5;
	if ($number <10) {
		echo "$number меньше десяти";
	}
	
	$number = 16;
	if ($number <10) {
		echo "$number меньше десяти";
	}
	else {
		echo "$number больше десяти";

	}



?>