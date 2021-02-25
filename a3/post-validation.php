<?php
/* set variables to blank */
$name = $email = $number = $message = $subject = "";
$nameError = $emailError = $numberError = $subjectError = $messageError = $logError = "";
$regexPatt = "/^(([A-Za-z]+[,.]?[ ]?|[a-z]+['-]?)+)$/i";
$numRegex = "/^(?:\+?(61))? ?(?:\((?=.*\)))?(0?[2-57-8])\)? ?(\d\d(?:[- ]
            (?=\d{3})|(?!\d\d[- ]?\d[- ]))\d\d[- ]?\d[- ]?\d{3})$/";
$errCheck = TRUE;

session_start();

/* if login */
if (isset($_POST["login"])) {
  login();
}
/* hard coded login, usually would be in a database */
function login() {
  $correctUsername = "IanBBB";
  $correctPassword = "p4ssw0rd";
  $username = trim_input($_POST['username']);
  $password = trim_input($_POST['password']);
  if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
  } else if (!empty($username) && !empty($password)) {
    setcookie("username", $username, time() + 30);
    if($username == $correctUsername && $password == $correctPassword) {
      $logError = "";
      $_SESSION['user'] = $username;
      $_SESSION['loggedin'] = TRUE;
    } else {
      $_SESSION['error'] = "That account does not exist.";
    }
  }else if(empty($username) || empty($password)) {
    $_SESSION['error'] = "Details must not be empty.";
  }
  header('Location: '.$_SERVER['HTTP_REFERER']);
  exit();
}

/* if contact form */
if (isset($_POST["submit"])) {
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
  /* remove spaces */
  $number = str_replace(' ', '', $number);
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
  /* save to file if no errors found & set success message*/
  if ( (!empty($name) && !empty($email) && !empty($subject) && !empty($message) )
      && $errCheck == TRUE) {
    $details = array ($name, $email, $number, $subject, $message);
    saveFile($details);
    $_SESSION['message'] = "Your inquiry has been recieved. Thank you for contacting us.";
    header("Location: contact.php");
    exit();
  }
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
