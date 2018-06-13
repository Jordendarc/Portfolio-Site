<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>
    <link href="mainpage.css" rel="stylesheet" type="text/css">
    <link href="jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <script>
    </script>
</head>
<body>
  <div class="MainHeader">
    <br>
  <img class= "headerImage" src="images/profile.JPG" alt="main"><br>
  <h1>Jorden Carter-Whitbey</h1>
  <br>
</div>


<div id="bar">
  <a href="logout.php">Logout</a>
</div>


  <div id="wrapper">
      <h3>Quick Links<h3>
      <ul id="links">
        <li><a href="mainPage.php?content=linkedin">Linkedin</li></a>
        <li><a href="mainPage.php?content=github">GitHub</li></a>
        <li><a href="mainPage.php?content=Facebook">Facebook</li></a>
      </ul>
      <div id="linkDisplayer">
        <?php
          $link = empty($_GET['content']) ? 1 : $_GET['content'];

          if ($link == "linkedin") {
              print "<a href=\"https://www.linkedin.com/in/jorden-carter-whitbey-21a89612b/\" target=\"_blank\">
                                <img class=\"image\"src=\"images/linkedinLogo.png\" alt=\"linkedin\"> </a>";
          }
          if ($link == "github") {
              print "<a href=\"https://github.com/Jordendarc\" target=\"_blank\">
                                <img class=\"gitImage\"src=\"images/github.png\" alt=\"github\"> </a>";
          }
          if ($link == "Facebook") {
              print "<a href=\"https://www.facebook.com/jorden.whitbey\" target=\"_blank\">
                                <img class=\"image\"src=\"images/facebook.png\" alt=\"facebook\"> </a>";
          }
         ?>
      </div>
</div>

    <div class="middle">
        <h3>Education:</h3><hr>
        <p>University of Missouri <br>
            Bachelor of Science in Computer Science,<br>
            Aug 2015 – (expected) May 2019</p><br>
        <h3>University Involvement:</h3><hr>
        Zeta Beta Tau Fraternity - Omega Chapter<br>
        -Banner Committee – created banners with a team of six people<br>
        -Brotherhood Development Committee – helped setting up and organizing events for the
        fraternity<br>
        League of Legends Club
         - Treasurer (2017 - 2018) <br>
         – created a budgets and handled the bank account for the club<br>
         <h3>Technical Skills:</h3><hr>
          <p>
            Google Analytics - Created, managed, and reviewed reports<br>
            C - created programs using stacks, queues, binary search trees, binary trees, red-black trees, graph
          algorithms.<br>
          Java - created programs with JavaFX and JavaFXML using Model View Controller style programming<br>
          MySQL – created a database with AWS for a final project and used it to query the database on this site<br>
          C++ - created prgrams using various sort methods (Merge Sort, Bubble Sort, Insertion Sort, etc.)<br>
          HTML,javascript,jquery,AJAX – created this webpage using said languages <br>
          Agile & Scrum - Used these methods at Shelter Insurance<br>
          Adobe Photoshop CS6 Certified Associate<br>
          Microsoft Excel – created and worked spreadsheets at Shaffer & Associates and Patricias<br>
        </p>
    </div>

  <table id="table">
      <tr class="header">
        <th colspan="6"><p class="text">
          Work History
        </p></th>
      </tr>
      <tr>
        <th>Employer</th>
        <th>Dates Employed</th>
        <th>Title</th>
        <th>Tasks</th>
      </tr>
      <tr class="home">
        <td>Shelter Insurance</td>
        <td>April 2018 - Present</td>
        <td>Software Developer Intern</d>
        <td>-Created, managed, and reviewed reports using Google Analytics<br>
            -Used Jira to keep track of work on an agile board</td>
      </tr>
      <tr class="away">
        <td>Shaffer & Associates</td>
        <td>August 2015 - April 2018</td>
        <td>Legal Associate</d>
        <td>-Processed legal documentation and created new accounts in the system<br>
            -Managed all accounts (approx. 30 a day) that dealt with bankruptcy (i.e. filed court documents, called
attorneys, etc.)<br>
            -Processed payments received from courts and employers<br>
            -Issued garnishments and mailed various legal paperwork<br>
            -Trained new employees on using the Debtmaster software</td>
      </tr>
      <tr class="home">
        <td>Hyvee</td>
        <td>February 2013 - April 2018</td>
        <td>Cashier, Delicatessen Clerk</d>
        <td>-Used communication skills to help customers, take orders, and make compromises in sales<br>
            -Trained and directed new employees to work and manage time efficiently<br>
            -Worked under pressure to get catering orders done by specific times</td>
      </tr>
      <tr class="away">
        <td>Patricia's</td>
        <td>August 2014 - March 2015</td>
        <td>Customer Service Assistant</d>
        <td>-Helped customers at the customer service desk with USPS postage, Western Union orders, and lottery
          tickets<br>
            -Managed employees at the cash registers<br>
            -Created reports of sales and balanced a ledger for the corporate office</td>
      </tr>
      </tr>
  </table>
</body>
</html>
