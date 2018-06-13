<!DOCTYPE html>
<html>
<head>
	<title>Create User Account</title>
	<link href="app.css" rel="stylesheet" type="text/css">
    <link href="jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <script>
        $(function(){
            $("input[type=submit]").button();

						$("#confirmPass").keyup(function(){
							var password = $("#password").val();
							var confirmPass = $("#confirmPass").val();

							if(password.localeCompare(confirmPass) != 0){
									$("#outputDiv").html("Passwords Don't Match!");
							}
							else{
								$("#outputDiv").html("Passwords Match!");
							}
						});
        });
    </script>
</head>
<body>
	<h1 id = "superHeader"> Welcome to Jorden Carter-Whitbey's Portfolio Site</h1>
    <div id="loginWidget" class="ui-widget">
        <h1>Create your Account</h1>

        <?php
            if ($error) {
                print "<div class=\"ui-state-error\">$error</div>\n";
            }
        ?>

        <form action="createUser.php" method="POST" >

            <input type="hidden" name="action" value="do_create">

            <div class="stack">
                <label for="firstName">First name:</label>
                <input type="text" id="firstName" name="firstName" class="ui-widget-content ui-corner-all" required>
            </div>

            <div class="stack">
                <label for="lastName">Last name:</label>
                <input type="text" id="lastName" name="lastName" class="ui-widget-content ui-corner-all" required>
            </div>

            <div class="stack">
                <label for="username">User name:</label>
                <input type="text" id="username" name="username" class="ui-widget-content ui-corner-all" required>
            </div>

            <div class="stack">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="ui-widget-content ui-corner-all" required>
            </div>

            <div class="stack">
                <label for="confirmPass">Confirm Password:</label>
                <input type="password" id="confirmPass" name="confirmPass" class="ui-widget-content ui-corner-all" required>
            </div>

             <div class="stack">
                <label for="Company">Company:</label>
                <input type="text" id="company" name="company" class="ui-widget-content ui-corner-all" required>
            </div>

            <div class="stack">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="ui-widget-content ui-corner-all" required>
            </div>
						<div class="g-recaptcha" data-sitekey="6Lf7D14UAAAAAJN60kYAz1oAQh09csImCTfG96m0"></div>

            <div class="stack">
                <input type="submit" value="Submit">
            </div>
						<div name="captcha" class="g-recaptcha" data-sitekey="6Lf7D14UAAAAAJN60kYAz1oAQh09csImCTfG96m0"></div>
        </form>
				<br>
				<div id="outputDiv"></div>
    </div>
</body>
</html>
