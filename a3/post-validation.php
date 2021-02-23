<?php
/* set variables to blank */
$name = $email = $number = $message = $subject = "";
$nameError = $emailError = $numberError = $subjectError = $messageError = "";
$regexPatt = "/^(([A-Za-z]+[,.]?[ ]?|[a-z]+['-]?)+)$/i";
$numRegex = "/^(?:\+\D*6\D*1(?:\s)?)?\D*0(\D*\d){9}\D*$/";
$errCheck = TRUE;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  /* trim and check if empty or valid */
  if (empty($_POST["name"])) {
    $nameError = "Name is required";
  } else {
    $name = trim_input($_POST["name"]);
    if (!preg_match($regexPatt, $_POST["name"])) {
      $nameError = "Name must contain only letters and white space.";
      $errCheck = FALSE;
    }
  }

  if (empty($_POST["email"])) {
    $emailError = "Email is required";
  } else {
    $email = trim_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Invalid email format.";
      $errCheck = FALSE;
    }
  }

  $number = trim_input($_POST["number"]);
  if (!preg_match($numRegex, $number) && !empty($_POST["number"])) {
    $numberError = "Invalid number.";
    $errCheck = FALSE;
  }
  if (empty($_POST["subject"])) {
    $subjectError = "Subject is required";
  } else {
    $subject = trim_input($_POST["subject"]);
  }

  if (empty($_POST["message"])) {
    $messageError = "Message is required";
  } else {
    $message = trim_input($_POST["message"]);
  }
  // remember details
  if(isset($_POST["rememberMe"])) {
  	setcookie ("name",$name,time()+ 3600);
  	setcookie ("email",$email,time()+ 3600);
  	setcookie ("number",$number,time()+ 3600);
  	setcookie("rememberMe",$_POST["rememberMe"],time()+3600, "/");
    if ((!empty($name) && !empty($email) && !empty($subject) && !empty($message))
        && $errCheck == TRUE) {
      $details = array ($name, $email, $number, $subject, $message);
      saveFile($details);
    }

  } else {
  	// set to empty and wipe cookies
  	setcookie ("name", "", time()-3600);
  	setcookie ("email", "", time()-3600);
  	setcookie ("number", "", time()-3600);
  	unset($_COOKIE["name"]);
  	unset($_COOKIE["email"]);
  	unset($_COOKIE["number"]);
  	unset($_COOKIE["rememberMe"]);
  }
} else {
  exit('Invalid request');
}

function saveFile($data) {
    $fp = fopen('mail.txt', 'a');
    fputcsv($fp, $data);
    fclose($fp);
}

function trim_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
