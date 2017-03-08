<?php
ini_set("display_errors", 1);
    // include common php routines
    require "comp305.php";


    //check for POST Variables
if ( isset( $_POST["Member_id"] ))
{
    // save the user name (frat/soro name) and password(admin id) to the session
    $_SESSION["Member_id"] = $_POST["Member_id"];
    $_SESSION["FoS_id"] = $_POST["FoS_id"];
    $_SESSION["Member_name"] = $_POST["Member_name"];
    $_SESSION["Grad_Year"] = $_POST["Grad_YEar"];
    $_SESSION["Email"] = $_POST["Email"];
    $_SESSION["Admin_status"] = $_POST["Admin_status"];
    $_SESSION["Dues_owed"] = $_POST["Dues_owed"];

    // load page 1
    header( "http://penguin.lhup.edu/~lnr7605/COMP305-master/mainPageTemplate.html" );
    exit();
}
    // set the title
    $Title = "Fraternity or Sorority Member";
    $Subtitle = "Logon Page";
?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8"></meta>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-vivid.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-signal.css">
<link rel="stylesheet" type="text/css" href="mainCSS.css"/>
<link rel="stylesheet" type="text/css" href="registerModal.css"/>
<script src="webJS.js" defer></script>
</head>

<title> Under Construction </title>

<body>

<?php
$servername = "willy";
$username = "comp305_grp1";
$password = "Temp!comp305_grp1";
$dbname = "comp305_grp1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Members";
$result = $conn->query($sql);

//WriteRegistrationINFO();
?> 
    <!-------------- START OF MENU -------------->
    <span style="font-size:30px;cursor:pointer;float:left" onclick="openNav()">&#9776; open</span>
    <div id="navigation" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="mainPageTemplate.html">Home</a>
</div>    
<script>
    function openNav() {
        document.getElementById("navigation").style.width = "250px";
        document.getElementById("body").style.marginLeft = "250px";
        document.body.style.backgroundColor = "#612929";
    }

    function closeNav() {
        document.getElementById("navigation").style.width = "0";
        document.getElementById("body").style.marginLeft= "0";
        document.body.style.backgroundColor = "#821717";
    }
</script>  
    <!-------------- START OF BODY -------------->
<div id="body">
    <div class="w3-container w3-padding-8 w3-vivid-greenish-blue w3-xlarge w3-center" style="width:50%; margin-left:auto; margin-right:auto"><p>Member Login</p></div>
    <div class="w3-containter w3-padding-32 w3-white" style="width:50%; margin-left:auto; margin-right:auto">
        <form class="w3-container" name="form1" method="post" action="checkLogin.php">
             <p>
                <label class="w3-large"> Fraternity / Sorority </label>
                <input class="w3-input" name="FoS_id" type="int" id="FoS_id">
            </p>
            
            <p>
                <label class="w3-large"> Member ID </label>
                <input class="w3-input" name="Member_id" type="password" id="Member_id">
            </p>
            <div>
                <button type="submit" name="Submit" class="w3-button w3-text-center w3-signal-green w3-padding-16 w3-hover-green" style="width:50%;float:left">Login</button>

                <button type="button" onclick="document.getElementById('register').style.display='block'" class="w3-button w3-text-center w3-padding-16 w3-hover-blue" style="width:50%; background-color:#4365b7; color:white">Need an Account?</button>
            </div>
        </form>
        <script>
    var modal = document.getElementById('register');
    
    window.onclick = function(event){
        if(event.target==modal){
            modal.style.display ="none";
        }
    }
</script>
    </div>
 

<div id="register" class="modal">
    <span onclick="document.getElementById('register').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form class="modal-content animate" name="data-input" action="comp305.insert.php" method="POST">
        <div class="container">
           <!-- <label><b class="w3-text-black">Member ID</b></label>
            <input name="Member_id" type="int"  required="false" placeholder="Example: 000" /> -->
            
            <label><b class="w3-text-black">FOS ID</b></label>
            <input name="FoS_id" type="int" required="true" placeholder="1-8" />
            
            <label><b class="w3-text-black">Member Name</b></label>
            <input name="Member_name" type="text" required="true" placeholder="First and Last name"/>
            
            <label><b class="w3-text-black">Graduation Year</b></label>
            <input name="Grad_Year" type="int" required="true" placeholder="YYYY" />
            
            <label><b class="w3-text-black">Email</b></label>
            <input name="Email" type="text" required="true" placeholder="example@yourmail.com"/>
            
            <label><b class="w3-text-black"> Admin Status </b></label>
            <input name="Admin_status" type="text" required="true" placeholder="Y or N"/>
            
            <label><b class="w3-text-black">Dues Owed</b></label>
            <input name="Dues_owed" type="number" required="true" min="0" />
            
            <div>
                <button type="submit" class="w3-button w3-signal-green w3-hover-green w3-margin-top"style="height:50px;width:100%">Register</button>
                
                <button type="button" onclick="document.getElementById('register').style.display='none'" class="w3-margin-top w3-btn w3-vivid-red ">Cancel</button>
            </div>
          
        </div>
    </form>

</div>
   
</div><!-- end of body -->   
<footer class="w3-container w3-padding-32 w3-center w3-opacity w3-bottom w3-light-grey w3-small " >
    <a href="logOut.php">Log Out</a>
    <a href="memberPage_comp305.php">Membership Info</a>
    <p class="w3-text-grey">Copyright 2017 &#169; </p>
</footer>
 
</body>
</html>
