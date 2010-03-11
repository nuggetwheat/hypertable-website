<?php

$emailto = "support@hypertable.com"; 
$Subject = "Hypertable.com Contact Form";
$name = Trim(stripslashes($_POST['name'])); 
$company = Trim(stripslashes($_POST['company'])); 
$email = Trim(stripslashes($_POST['email'])); 
$phone = Trim(stripslashes($_POST['phone'])); 
$comments = Trim(stripslashes($_POST['comments'])); 

// validation
$validationOK=true;
if (Trim($name)=="") $validationOK=false;
if (Trim($name)=="Name") $validationOK=false;
if (Trim($email)=="") $validationOK=false;
if (Trim($phone)=="") $validationOK=false;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=/error.html\">";
  exit;
}

if (!preg_match("/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/", $email)) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=/ok.html\">";
	exit;
}

// prepare email body text
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Company: ";
$Body .= $company;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Comments: ";
$Body .= $comments;
$Body .= "\n";


// send email 
$success = mail($emailto, $Subject, $Body, "From: <$email>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=/ok.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=/error.html\">";
}
?>