

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
  		<title>Тег FORM</title>
 		<link rel="stylesheet" href="forma.css?ver=<?php print time(); ?>">
 	</head>
 	<body>
		<?php
// include('forma.css'); 

echo "LISt OF USERS:";
require_once 'connection.php'; // include script

$link = mysql_connect($host, $user, $password) // to server
    or die("Ошибка " . mysqli_error($link));

mysql_select_db("test_db") or die(mysql_error());

$result=mysql_query('SELECT * FROM `users`'); // sending request to DB for all base

?>
<table> 
	<tr>
		<td>First name</td> 
		<td>Last name</td>
		<td>Job</td>
		<td>Company</td>
		<td>Phone</td>
		<td>Email</td>
	</tr>
<?php	
while($row=mysql_fetch_assoc($result))
{
	print_r($row);
echo '<tr><td>'.$row['fname'].'</td>'.'<td>'.$row['lname'].'</td>'.'<td>'.$row['job'].'</td>'.'<td>'.$row['company'].'</td>'.'<td>'.$row['phone'].'</td>'.'<td>'.$row['mail'].'</td>'.'</tr>';// выводим данные
    /*print '<tr>';
	foreach($row as $r) {
		print '<td>'. $r .'</td>'
	}
	print '</tr>';

*/


	print '<tr><td>' . implode('</td><td>', $row) .'</td></tr>';

/*
	foreach($row as $key => $value) {
		if($key=='fname') {
			print '<td class="long-string">'. $r .'</td>'
		} else {
			print '<td>'. $r .'</td>'
		}
	}

*/
} 


	

?>
</table>
<?php mysql_close($link); //close connection
?>
	</body>
</html>
