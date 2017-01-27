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
    // IF ELSE
	$hour = date("H");
	if ($hour < 12) {
		echo "Доброе утро";
	} elseif ($hour < 17) {
		echo "Добрый день";
	} else {
		echo "Доброй ночи";
	}

	// SWITCH
	switch ("$name") {
		case "Дима":
		case "Таня":
			echo "Привет, $name, ты мой друг";
			break;
		case "Адольф":
		case "Саддам":
			echo "Ты мне не друг, $name";
			break;
		default:
			echo "Я тебя не знаю, $name";
	}

	// WHILE
	$count = 1;
	while ($count <= 10) {
		$square = $count * $count;
		echo "Квадрат $count равен $square <br>";
		$count++;
	}

	// DO
	$count = 1;
	do {
		$square = $count * $count;
		echo "Квадрат $count равен $square <br>";
		$count++;
	} while ( $count <= 10);

	// FOR
	for ($count=1; $count <= 10 ; $count++) { 
		$square = $count * $count;
		echo "Квадрат $count равен $square <br>";
	}
	// FUNCTIONS Unit 4
	include "tax.php";
	$price = 16.00;
	echo "Цена без налога: $price <br>";
	echo "Цена с налогом: ";
	echo add_tax ($price);


	// PHPINFO
	//phpinfo();

	// MAIL FUNCTION
	if (mail("iza.inksystem@gmail.com", "Привет", "Это тестовое письмо")) {
		echo "Письмо успешно отправлено";
	} else {
		echo "Письмо нельзя отправить";
	}

	// GLOBAL VARIABLES IN FUNCTION
	function change_value() {
		GLOBAL $value;
		echo "До: $value <br>";
		$value = $value *2;
	}
	$value = 100;
	change_value();
	echo "После: $value <br>";

	// NUMBERS
	// IS_INT IS_FLOAT IS_NUMERIC
	$number = "28";
	if (is_int($number)) {
		echo "$number - целое число";
	}
	else {
		echo "$number - не целое число";
	}

	//GETTYPE
	$number = "6";
	$number++;
	echo "$number имеет тип". gettype($number);

	// NULL

	$number = 0;
	$empty = NULL;
	if ($number == $empty){
		echo "Значения эквивалентны";
	}

	if ($number === $empty){
		echo "Значения эквивалентны";
	}else{
		echo "Совпадают только значения , но не типі";
	}

	// OKRUGLENIE CEIL FLOOR

	echo ceil(1.3);
	echo floor(6.8);
	echo floor(-1.1);
	echo ceil(-2.5);

	//ROUND
	$score = 0.535;
	echo round($score, 2);

	$distance = 2834;
	echo round($distance, -2);

	// MIN MAX
	echo min(6,10,23,3,88,102,5,44);

	// RAND MT_RAND MT_SRAND
	echo rand(1,10);

	// Unit 6 STRING

	echo "'Привет',  - сказал Вася.";
	echo '"Хорошо", - сказал я <br>';

	echo '\'Привет\',  - сказал Вася.';
	echo "\"Хорошо\", - сказал я <br>";

	echo 'Сэкономьте $10 на первом заказе';
	echo "Сэкономьте \$10 на первом заказе";

	// CONCATENATION

	$phrase = "Я хочу";
	$phrase .= "изменить";
	$phrase .= "мир";
	$phrase .= "к лучшему";
	echo $phrase;

	// FPRINT SPRINT
	$price = 5.99;
	printf("Цена: %f", $price);

	$item = "данной единицы товара";
	printf("Цена %s равна %f", $item, $price);

	$name1 = "Юра";
	$name2 = "Петя";
	$name3 = "Роман";
	echo "<PRE>";
	printf("%10s \n", $name1);
	printf("%10s \n", $name2);
	printf("%10s \n", $name3);
	echo "<PRE>";

	$order = 201;
	printf("Номер заказа: %'05d", $order);

	$pr = 6;
	printf("Цена: %.2f", $pr);

	$new_price = sprintf("%.2f", $pr);
	echo $new_price;

	//STRTOUPPER STRTOLOWER UCFIRST UCWORDS

	$phrase = "I love PHP";
	echo strtoupper($phrase). "<br>";
	echo strtolower($phrase). "<br>";
	echo ucfirst($phrase). "<br>";
	echo ucwords($phrase). "<br>";

	//SUBSTR

	$ph1 = "Я люблю РНР";
	echo substr($ph1, 4,5);

	

















	?>