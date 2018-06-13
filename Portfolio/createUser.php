<?php
    // HTTPS redirect
    if ($_SERVER['HTTPS'] !== 'on') {
		$redirectURL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		header("Location: $redirectURL");
		exit;
	}

	// http://us3.php.net/manual/en/function.session-start.php
	if(!session_start()) {
		// If the session couldn't start, present an error
		header("Location: error.php");
		exit;
	}


	// Check to see if the user has already logged in
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];

	if ($loggedIn) {
		header("Location: mainPage.php");
		exit;
	}

  $firstName = empty($_POST['firstName']) ? '' : $_POST['firstName'];
  $lastName = empty($_POST['lastName']) ? '' : $_POST['lastName'];
  $username = empty($_POST['username']) ? '' : $_POST['username'];
  $password = empty($_POST['password']) ? '' : $_POST['password'];
  $confirmPass = empty($_POST['confirmPass']) ? '' : $_POST['confirmPass'];
  $company = empty($_POST['company']) ? '' : $_POST['company'];
  $email = empty($_POST['email']) ? '' : $_POST['email'];

  $dbhost = 'HOST_NAME_HERE';
  $dbuser = 'ec2-user';
  $dbpass = 'PASSWORD_HERE';
  $dbname = 'DATABASE_NAME_HERE';

  $database = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
 // if($database) echo "Couldn't connect to db";
  $insertion = "INSERT INTO UserInfo(Username,Password,FirstName,LastName,Company,Email)
        VALUES('$username','$password','$firstName','$lastName','$company','$email')";
  mysqli_query($database, $insertion);
  mysqli_close($database);
  header('Location: mainPage.php');
 
?>
