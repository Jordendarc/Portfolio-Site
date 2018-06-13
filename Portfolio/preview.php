<!DOCTYPE html>
<html>
	<head>
    <style>
    #vid {
      margin:0 auto;
      text-align: center;
    }
    .textBox {

      text-align: center;
      padding: 20px 15px 20px 15px;
      height: 75px;
      border: 1px solid black;
      width: 560px;
      background-color: white;
      margin:0 auto;
    }
    .buttons {
      border-radius: 25px;
      padding: 10px 10px;
      margin:0 auto;
    }
    .pButtons {
      border-radius: 25px;
      padding: 10px 10px;
      margin:0 auto;
    }
    #pictures {
          display: flex;
          width: 100%;
          justify-content: center;
          align-content: center;
          justify-content: space-between;
          justify-content: space-around;
       }
    .mainImages {
      transform: rotate(90deg);
      width: 267px;
      height: 201px;
      border-radius: 100px;
    }
    .fImage {
      width: 267px;
      height: 201px;
      border-radius: 50px;
    }
    .fImage2 {
      width: 150px;
      height: 201px;
      border-radius: 50px;
    }
		#container {
			height: 100%;
			padding: 30px;
			width: 75%;
			background-color: #A0C5E4;
			margin:0 auto;
			border-radius: 25px;
		}
		#superHeader {
			border-radius: 25px;
		}
		p {
			padding-left: 10px;
			padding-right: 10px;
		}
		#buttonContainer {
			text-align: center;
		}
    </style>
    <script src="jslibs/jquery-2.1.4.min.js"></script>
    <script>
    function updateContainer(){
      document.getElementById("displayContainer").innerHTML = "Loading...";
      var xmlHttp = new XMLHttpRequest();
      xmlHttp.onload = function(){
            if(xmlHttp.status == 200){
              document.getElementById("displayContainer").innerHTML = xmlHttp.responseText;
            }
        }
        xmlHttp.open("GET","responder.php",true);
        xmlHttp.send();
    }
    $(document).ready(function(){
        $("#pictures").hide();
        $("#picButton").click(function(){
            $("#pictures").show();
        });
    });
    </script>
		<title>Preview</title>
    <link href="app.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="container">
	    <h1 id = "superHeader"> Welcome to Jorden Carter-Whitbey's Portfolio Site</h1>
			<br><br>
			<p>In short, I am a computer programmer.  I am currently an undergraduate student
				at the University of Missouri.  I am currently looking for internship experience so that
			I can become a professional in my field</p>
			<div id="vid">
		    <iframe width="560" height="315" src="https://www.youtube.com/embed/g4a7_HH9Wbg" frameborder="0"
				allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>

				<br><br>
		    <div class="textBox" id="displayContainer"></div>
				<br>
				<div id="buttonContainer">
			    <button class="buttons" id="XMLButton" onclick="updateContainer()">Click Here!</button>
			    <button class="pButtons" id="picButton">Click Here to View Pictures</button>
			</div>
		    <br><br>
		    <div id="pictures" hidden>
		      		<img class="mainImages" src="images/profile.JPG" alt="pic1">
		          <img class="fImage" src="images/fbprofile.jpg" alt="pic2">
		          <img class="fImage2" src="images/fb2.jpg" alt="pic3">
		    </div>

		    </div>
			</div>
	</body>
</html>
