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

	$ph1 = "I love PHP";
	echo substr($ph1, 4,5);
	echo substr($ph1, -3);

	// STRLEN
	echo strlen($ph1);

	// STRPOS STRSTR
	$email = "chris@lightwood.net";
	echo strpos($email,"@");

	echo strstr ($email, "@");
	echo strstr($email, strpos ($email,"@"));

	// UNIT 7 ARRAYS
	$temps = array(28,40,49,60,70,79,84,83,79,65,54,42);

	print "<PRE>";
	print_r($temps);
	print "</PRE>";
	echo $temps[2];
	$temps[10] = 50;

	print_r:
		while (list($key, $value) = each($temps)) {
			echo "Ключ $key имеет значение $value <br>";
		}

	foreach ($temps as $key => $value) {
			echo "Ключ $key имеет значение $value <br>";
	}
	$temps = array();

	// ASSOCIATIC ARRAYS
	$temps2 = array("jan" => 38, "feb" => 40, "mar" => 49,
		            "apr" => 60, "may" => 70, "jun" => 79,
		            "jul" => 84, "aug" => 83, "sep" => 76,
		            "oct" => 65, "nov" => 54, "dec" => 42,);
	echo $temps2["feb"];
	print_r($temps2);

	// SORT ASORT KSORT
	asort($temps2);
	print_r($temps2);

	ksort($temps2);
	print_r($temps2);

	array_reverse($temps2);
    print_r($temps2);	

    shuffle($temps2);
    print_r($temps2);

    // ARRAY_MERGE
    $temps3 = array ("jan2" => 238, "feb2" => 240, "2mar" => 249,
		            "2apr" => 260, "2may" => 270, "j2un" => 279,
		            "2jul" => 284, "2aug" => 283, "2sep" => 276,
		            "2oct" => 265, "2nov" => 254, "2dec" => 242,);
    $union = array_merge($temps2, $temps3);
    print_r($union);

    $union2 = array_unique($union);
    print_r($union2);

    // COUNT
    echo count($union);

    // IN ARRAY - bool  ARRAY_SEARCH - key   ARRAY_KEY_EXISTS
    if (in_array("260", $temps3)) {
    	echo "key exist!";
    }

    if (array_key_exists("2apr", $temps3)) {
    	echo "key exist!";
    }

    // SERIALIZE UNSERIALIZE
    echo serialize($temps3);
    print_r(unserialize($temps3)); // ne pawe

    // MULTI ARRAYS
    $temps4 = array (
    	1995 => array ("jan" => 36, "feb" => 42, "mar" => 51),
    	1996 => array ("jan" => 37, "feb" => 42, "mar" => 49),
    	1997 => array ("jan" => 34, "feb" => 40, "mar" => 50),
    	);
    print_r($temps4);

    // Unit 8 REGULAR EXPRESSIONS
    $phrase5 = "I love PHP";
    if (ereg("PHP", $phrase5)){
    	echo "Выражение найдено";
    }

    if (eregi("php", $phrase5)){
    	echo "Выражение найдено";
    }

    if (eregi("[Pp][Hh][Pp]", $phrase5)){
    	echo "Выражение найдено";
    }

    if (ereg("[A-Z]", $phrase5)){
    	echo "есть буквы в верхнем регистре";
    }

    if (ereg("[^0-9]", $phrase5)){
    	echo "в выражении нет цифр";
    }

    // EMAIL VARIFICATION
    $email = "chris@lightwood.net";
    if (ereg("^([^@]+)@([a-z]{2,4})$", $email, $match)) {
    	echo "Почтовый ящик: ".$match[1]."<br>";
    	echo "Имя домена:";
    }


















	?>