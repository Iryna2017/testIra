<?php

/*
    php script for form
*/

/*
    создать mysql базу данніх
    создать таблицу в базе данных (все поля из формы)
    сделать подключение к базе данных
    выполнить запись отправленной формы без ошибок в базу данных

    /usr/bin/mysqladmin -u root password 'new-password'
/usr/bin/mysqladmin -u root -h irina-Inspiron-5558 password 'new-password'

Alternatively you can run:
/usr/bin/mysql_secure_installation

which will also give you the option of removing the test
databases and anonymous user created by default.  This is
strongly recommended for production servers.

See the manual for more instructions.

You can start the MySQL daemon with:
cd /usr ; /usr/bin/mysqld_safe &

You can test the MySQL daemon with mysql-test-run.pl
cd /usr/mysql-test ; perl mysql-test-run.pl


service mysql status If MySQL isn't running, you can start it with sudo
service mysql start.

MySQL 
ira
pass
test_db


CREATE TABLE users (fname VARCHAR(25), lname VARCHAR(25), job VARCHAR(20), company VARCHAR(50), phone VARCHAR(12), mail VARCHAR(30));


*/


function clean($value = "") {
    $value = trim($value); //удаление пробелов начала и конца строки
    $value = stripslashes($value); // удаление экранированных символов
    $value = strip_tags($value);  // del Html and php tags
    $value = htmlspecialchars($value); //turns special symbols into html
    
    return $value;
}
//fnction for cheking row lenght
function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}

    $fname = ''; 
    $lname = ''; 
    $job = '';
    $company = ''; 
    $phone = ''; 
    $mail = ''; 
    $mail_error = false;

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
   
        $fname = clean($_POST['fname']);
        $lname = clean($_POST['lname']); 
        $job = clean($_POST['job']); 
        $company = clean($_POST['company']); 
        $phone = clean($_POST['phone']); 
        $mail = clean($_POST['mail']); 

        //every single value
        $error = '';
        if(!strlen($fname)) {
        	$error .= "Fill First Name<br>";
        }
        if(!strlen($lname)) {
            $error .= "Fill First Name<br>";
        }
        if(!strlen($job)) {
            $error .= "Fill Job<br>";
        }       
        if(!strlen($company)) {
            $error .= "Fill сщьзфтн<br>";
        }
        if(!strlen($phone)) {
            $error .= "Fill PHONE<br>";
        }
        if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
            $mail_error = true;
            $error .= "Uncorrect email<br>";
        }

        if(!$error) {
            // DB connection !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    require_once 'connection.php'; // include script

   
    $link = mysql_connect($host, $user, $password) // to server
    or die("Ошибка " . mysqli_error($link));

    mysql_select_db("test_db") or die(mysql_error());


    // writting to DB
    $strSQL = "INSERT INTO users(fname,lname,job,company,phone,mail) VALUES('". $fname ."','". $lname ."','". $job ."','". $company ."','". $phone ."','". $mail ."')"; 

    mysql_query($strSQL) or die(mysql_error());
     

    //reporting success
        $report = false;
        if ($link && $strSQL) {
            
            $report = true;

            $fname = ''; 
            $lname = ''; 
            $job = '';
            $company = ''; 
            $phone = ''; 
            $mail = ''; 
            $mail_error = false;
        }

    mysql_close($link); //close connection
        }


    }

   //если запсь произошла вівести зеленім (ваша форма отправлена)
   //  + обнулить все переменніе

