<!DOCTYPE html>
<html>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120521582-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-120521582-1');
  </script>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-MW3R9H6');</script>
  <!-- End Google Tag Manager -->
  
    <title>Login</title>
    <link href="app.css" rel="stylesheet" type="text/css">
    <link href="jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <script>
        $(function(){
            $("input[type=submit]").button();
        });
    </script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MW3R9H6"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <div class="container" id="background">
    <h1 id = "superHeader"> Welcome to Jorden Carter-Whitbey's Portfolio Site</h1>

    <div id="loginWidget">
        <h2>Login</h2>

        <?php
            if ($error) {
                print "<div class=\"ui-state-error\">$error</div>\n";
            }
        ?>

        <form id="mainPageForm" action="login.php" method="POST">

            <input type="hidden" name="action" value="do_login">

            <div class="stack">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="ui-widget-content ui-corner-all" autofocus value="<?php print $username; ?>">
            </div>

            <div class="stack">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="ui-widget-content ui-corner-all">
            </div>

            <div class="stack">
                <input type="submit" value="Submit">
            </div>
            <div name="captcha" class="g-recaptcha" data-sitekey="6Lf7D14UAAAAAJN60kYAz1oAQh09csImCTfG96m0"></div>
        </form>

        <form id="newUserButton" class="newUser" action="createUser_form.php">

          <input type="submit" value="New User?" />

        </form>

        <h4>Don't Want to log in? Click ><a href="preview.php">Here</a> for basic information</h4>

    </div>

    <div id="timeNote">
      <p>Note: This EC2 instance stops at 06:30:00 GMT everyday and starts back up at 13:00:00 GMT</p>
    </div>
</div>
</body>
</html>
