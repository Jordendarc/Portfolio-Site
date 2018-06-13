<?php
	/* Created by Professor Wergeles for CS2830 at the University of Missouri */

	// Here we are using sessions to propagate the login
	// http://us3.php.net/manual/en/intro.session.php

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


	$action = empty($_POST['action']) ? '' : $_POST['action'];

	if ($action == 'do_login') {
    handle_captcha();
		handle_login();
	} else {
		login_form();
	}

  function handle_captcha(){
    //captcha checking
    if(isset($_POST['g-recaptcha-response']))
      $captcha=$_POST['g-recaptcha-response'];
    if(!$captcha){
      login_form();
    }
    $secretKey = "6Lf7D14UAAAAAP5bqhCTlspEShoTFoYlsngKu6lL";
    $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha);
    $responseKeys = json_decode($response,true);
    if(intval($responseKeys["success"]) !== 1){
      login_form();
    }
  }

	function handle_login() {
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];
    $request_captcha_url = 'https://www.google.com/recaptcha/api/siteverify';


    $captcha = $_POST["captcha"];

		if ($username == "test" && $password == "pass") {
			// Instead of setting a cookie, we'll set a key/value pair in $_SESSION
			$_SESSION['loggedin'] = $username;
			header("Location: mainPage.php");
			exit;
		}

       // Require the credentials
       require_once 'db.conf';

       // Connect to the database
       $mysqli = new mysqli('localhost', 'ec2-user', 'jorden', 'CS283');

//        // Check for errors
//        if ($mysqli->connect_error) {
//            $error = 'Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
//			require "login_form.php";
//            exit;
//        }
        $username = $mysqli->real_escape_string($username);
        $password = $mysqli->real_escape_string($password);

				$query = "SELECT Username FROM UserInfo WHERE UserName = '$username' AND password = '$password'";
				$mysqliResult = $mysqli->query($query);
				// If there was a result...
				if ($mysqliResult) {
						// How many records were returned?
						$match = $mysqliResult->num_rows;

						// Close the results
						$mysqliResult->close();
						// Close the DB connection
						$mysqli->close();

						// If there was a match, login
					if ($match == 1) {
								$_SESSION['loggedin'] = $username;
								header("Location: mainPage.php");
								exit;
						}
						else {
								$error = 'Error: Incorrect username or password';
								require "index.php";
								exit;
						}
				}
        // Else, there was no result
        else {
          $error = 'Login Error: Please contact the system administrator.';
          require "index.php";
          exit;
        }
	}

	function login_form() {
		$username = "";
		$error = "";
		require "index.php";
        exit;
	}

?>
