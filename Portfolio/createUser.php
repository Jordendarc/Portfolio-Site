<?php
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


	// $action = empty($_POST['action']) ? '' : $_POST['action'];
  //
	// if ($action == 'do_create') {
	// 	create_user();
	// } else {
	// 	login_form();
	// }
  $firstName = empty($_POST['firstName']) ? '' : $_POST['firstName'];
  $lastName = empty($_POST['lastName']) ? '' : $_POST['lastName'];
  $username = empty($_POST['username']) ? '' : $_POST['username'];
  $password = empty($_POST['password']) ? '' : $_POST['password'];
  $confirmPass = empty($_POST['confirmPass']) ? '' : $_POST['confirmPass'];
  $company = empty($_POST['company']) ? '' : $_POST['company'];
  $email = empty($_POST['email']) ? '' : $_POST['email'];
//  include 'db.config';
// testing code
  $dbhost = 'localhost';
  $dbuser = 'ec2-user';
  $dbpass = 'jorden';
  $dbname = 'CS283';

  $database = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
 // if($database) echo "Couldn't connect to db";
  $insertion = "INSERT INTO UserInfo(Username,Password,FirstName,LastName,Company,Email)
        VALUES('$username','$password','$firstName','$lastName','$company','$email')";
  mysqli_query($database, $insertion);
  mysqli_close($database);
  header('Location: mainPage.php');
  // echo "asdasdfsdafadfa";
  // require_once 'db.conf';
  // echo "fuckkkkkk";
  // create_user();
  // echo "fuck";
// 	function create_user() {
// 		// $firstName = empty($_POST['firstName']) ? '' : $_POST['firstName'];
// 		// $lastName = empty($_POST['lastName']) ? '' : $_POST['lastName'];
// 	  // $username = empty($_POST['username']) ? '' : $_POST['username'];
// 		// $password = empty($_POST['password']) ? '' : $_POST['password'];
//     // $confirmPass = empty($_POST['confirmPass']) ? '' : $_POST['confirmPass'];
// 		// $company = empty($_POST['company']) ? '' : $_POST['company'];
//     // $email = empty($_POST['email']) ? '' : $_POST['email'];
//
//        echo $firstName;
//        echo $lastName;
//        echo $username;
//        echo $password;
//        echo $confirmPass;
//        echo $birthday;
//        echo $email;
//
//         if(strcmp($password,$confirmPass)==0){
//            // Require the credentials
//            echo "wtf";
//             require_once 'db.conf';
//             echo "did we get here";
//             // Connect to the database
//             $mysqli = new mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//             echo "ass";
//             // Check for errors
//             if ($mysqli->connect_error) {
//                 $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
//                 require "index.php";
//                 exit;
//             }
//             // http://php.net/manual/en/mysqli.real-escape-string.php
//             $username = $mysqli->real_escape_string($username);
//             $password = $mysqli->real_escape_string($password);
//             echo "ass2";
//             // $password=sha1($password);
//
//             //checks database if username exists already
//             $firstCheck = mysql_query($mysqli,"SELECT Username FROM UserInfo WHERE Username = '"$username"'");
//
//             if($mysqli->query($firstCheck)===TRUE){
//               $error="This username already exists";
//               require "createUser_form.php";
//               exit;
//             }
//             $query = "INSERT INTO users(Username,Password,FirstName,LastName,Company,Email) VALUES('$username','$password','$firstName','$lastName','$company','$email')";
// // as long as you use query, you should match the workbench
//
//             // Sometimes it's nice to print the query. That way you know what SQL you're working with.
// //            print $query;
// //            exit;
//
//             // If there was a result...
//             if ($mysqli->query($query)===TRUE) {
//
//                 $error="NEW User Created Successfully";
//
//
//
//                 // Close the DB connection
//                 $mysqli->close();
//                 $error="NEW User Created Successfully!";
//                 require "index.php";
//                 exit;
//             }
//             else{
//                 $error="Insert error:".$query."<br>".$mysqli->error;
//                 require "createUser_form.php";
//                 exit;
//             }
//         }
//                 // If there was a match, login
// //                if ($match == 1) {
// //                    $_SESSION['loggedin'] = $username;
// //                    header("Location: page1.php");
// //                    exit;
// //                }
// //                else {
// //                    $error = 'Error: Incorrect username or password';
// //                    require "login_form.php";
// //                    exit;
// //                }
// //            }
// //        }
//         // Else, there was no result
//         else {
//           $error = 'Error: Password do not match!!';
//           require "createUser_form.php";
//           exit;
//         }
// 	     }
//
// 	function login_form() {
// 		$username = "";
// 		$error = "";
// 		require "index.php";
//         exit;
// 	}

?>
