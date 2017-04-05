<?php
ini_set("display_errors", 1);
    // require the include file
    //      it better to use the .inc file extension here.
    //      this way the file can't be accessed by a web
    //      client.
    require "comp305.php";
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8"></meta>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="mainCSS.css"/>
<script src="webJS.js" defer></script>
<title> Member Info</title>
</head>
<body style="background-color:white">
    <a href="logIn.php"><p>Back</p></a>
<?php

    // call the insert function
    InsertNewMemberINFO();
    $_SESSION["Member_id"] = $_POST["Member_id"];
    $_SESSION["FoS_id"] = $_POST["FoS_id"];
    $_SESSION["Member_name"]= $_POST["Member_name"];
    $_SESSION["Grad_Year"]= $_POST["Grad_Year"];
    $_SESSION["Email"] = $_POST["Email"];
    $_SESSION["Admin_status"] = $_POST["Admin_status"];
    //$_SESSION["Dues_owed"] = $_POST["Dues_owed"];

    //WriteRegistrationINFO();
    WriteRegistrationINFO();
  
?>



  
<footer class="w3-container w3-padding-32 w3-center w3-opacity w3-light-grey w3-small">
<a href="memberPage_comp305.php">Membership information</a>
<br>
<a href="mainPageTemplate.html">Return to Home Page</a>
<br>
<a href="logIn.php">Return to Login</a>
<p class="w3-text-grey">Copyright 2017 &#169; </p>

    
</footer>
</body>
</html>
