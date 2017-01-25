<?php
 include('comments.php'); 
?><!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Тег FORM</title>
 <link rel="stylesheet" href="forma.css?ver=<?php print time(); ?>">
 </head>
 <body>


<div id="form-container">
<?php /*	<?php if($e1): ?>
	<div class="error">
		<?php print $e1; ?>
	</div>
	<?php endif; ?>
	*/ ?>
 <form action="" method="post" name="commentform" id="commentform">
<h2 >Submit the form to download this free whitepaper</h2>
<p>
<label for="fname">First Name*</label>
<input type="text" <?php if($e1) print 'class="error"'; ?> name="fname" id="fname" value="<?php print $fname; ?>" placeholder="enter your name" size="25" />
</p>

<p>
<label for="lname">Last Name*</label>
<input type="text" <?php if($e2) print 'class="error"'; ?> name="lname" id="lname" value="<?php print $lname; ?>" placeholder="enter your last name" size="25" />
</p>

<p>
<label for="job">Job Title*</label>
<input type="text" <?php if($e3) print 'class="error"'; ?> name="job" id="job" value="<?php print $job; ?>" placeholder="enter your position" size="25" />
</p>

<p>
<label for="company">Company*</label>
<input type="text" <?php if($e4) print 'class="error"'; ?> name="company" id="company" value="<?php print $company; ?>" placeholder="enter your company" size="40" />
</p>

<p>
<label for="phone">Phone</label>
<input type="text" name="phone" id="phone" value="<?php print $phone; ?>" placeholder="example +380 (066) 999-99-99" size="25" />
</p>

<p>
<label for="mail">Email*</label>
<input type="text" <?php if($e5) print 'class="error"'; ?> name="mail" id="mail" value="<?php print $mail; ?>" placeholder="example mail@example.com" size="25" />
</p>


<p><input name="submit" type="submit" id="submit" value="Submit" />
</p>

<?php 

if($e1)	print $e1;
if($e2) print $e2;
if($e3) print $e3;
if($e4) print $e4;
if($e5) print $e5;

 ?>
</form>
</div>

 </body>
</html>
