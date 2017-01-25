<?php
$fname = ''; 
$lname = ''; 
$job = '';
$company = ''; 
$phone = ''; 
$mail = ''; 

if($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $fname = $_POST['fname']; 
    $lname = $_POST['lname']; 
    $job = $_POST['job']; 
    $company = $_POST['company']; 
    $phone = $_POST['phone']; 
    $mail = $_POST['mail']; 


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
//////////////////////////
$fname = clean($fname);
$lname = clean($lname);
$job = clean($job);
$company = clean($company);
$phone = clean($phone);
$mail = clean($mail);

//chekin for non epty fields with *
if(!empty($fname) && !empty($lname) && !empty($job) && !empty($company) && !empty($mail)) {
    
// validation email
    $email_validate = filter_var($mail, FILTER_VALIDATE_EMAIL); 
// checking for namner of letters
    if(check_length($fname, 2, 25) && check_length($lname, 2, 25) && check_length($job, 2, 100) && check_length($company, 2,40)
     && $email_validate) {
        echo "Everything is correct";
    }
    else {
    	"Please, fill empty fields";
    }
}


//every single value
$e1=null;
if(strlen($fname)=="0"){
		$e1.="Fill First Name<br>";
} else {echo "Your first name is: ". $fname."<br />";
       }

$e2=null;
if(strlen($lname)=="0"):
		$e2.="Fill Last Name<br>";

endif;
$e3=null;
if(strlen($job)=="0"):
		$e3.="Fill Job<br>";
	endif;

$e4=null;
if(strlen($company)=="0"):
		$e4.="Fill Company<br>";
	endif;

$e5=null;
if(!filter_var($mail, FILTER_VALIDATE_EMAIL)):
		$e5.="Uncorrect email<br>";
	endif;

}
