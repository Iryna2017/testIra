<?php

require_once 'connection.php'; // include script

$link = mysql_connect($host, $user, $password) // to server
    or die("Ошибка " . mysqli_error($link));

mysql_select_db("test_db") or die(mysql_error());

$result=mysql_query('SELECT * FROM `users`'); // запрос на выборку

while($row=mysql_fetch_array($result))
{
echo '<p>First name='.$row['fname'].'. Last name: '.$row['lname'].'Job: '.$row['job'].'</p>';// выводим данные
}

?>