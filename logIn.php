<?php
ini_set("display_errors", 1);
    // include common php routines
    require "comp305.php";


    //check for POST Variables
if ( isset( $_POST["Member_name"] ))
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
    header( "http://penguin.lhup.edu/~lnr7605/COMP305-master/mainPageTemplate.php" );
    exit();
}
    // set the title
    $Title = "Fraternity or Sorority Member";
    $Subtitle = "Logon Page";
?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-vivid.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-red.css">
<link rel="stylesheet" type="text/css" href="mainCSS.css"/>
<link rel="stylesheet" type="text/css" href="registerModal.css"/>
<script src="webJS.js" defer></script>
</head>

<title> Under Construction </title>

<body class="w3-theme-l5">

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
    <div id="navigation" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="mainPageTemplate.php">Home</a>
        <?php	
        if ( isset( $_SESSION["Member_name"]))
        {
        // echo the current user
            echo "<a href='UserPage.php'>Member Page</a>";
            echo "<a href='logOut.php'>Log Out</a>\n";
        }
        ?>
    </div>    
    <script>
        function openNav() {
            document.getElementById("navigation").style.width = "250px";
            document.getElementById("body").style.marginLeft = "250px";

        }

        function closeNav() {
            document.getElementById("navigation").style.width = "0";
            document.getElementById("body").style.marginLeft= "0";
        }
    </script>  
    <!-------------- START OF BODY -------------->
<div id="body">
    <div class="w3-container w3-padding-8 w3-theme-d5" style="margin-top:0px; margin-bottom:0px">
        
    <h1 class="w3-center">LHU GREEK Login / Register</h1>
    <?php	
        if ( isset( $_SESSION["Member_name"]))
        {
        // echo the current user
            echo "   <h5 class='w3-center'>Current User: ".$_SESSION["Member_name"]."</h5>\n";
        }
    ?> 
    <span style="font-size:30px;cursor:pointer;margin-left:0px" onclick="openNav()">&#9776; open</span> 
</div>
    <div class="w3-containter w3-padding-32 w3-white" style="width:50%; margin-left:auto; margin-right:auto">
        <form class="w3-container" name="form1" method="post" action="checkLogin.php">
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
					$results= mysqli_query($conn,"SELECT FoS_id, FoS_name FROM Fraternities_and_Sororities");
				?>
					
					<select class="w3-center w3-panel "style="width:100%; padding:12px" name="FoS_id">
					<option selected="selected">Choose your greek</option>
				<?php
					while($row = mysqli_fetch_array($results)){
					echo '<option style="width:100%"
					value="' .$row['FoS_id']. '">'. $row['FoS_name']. '</option>' ;
					}
				?> 
				</select>          
            	
            <p>
                <label class="w3-large"> Password </label>
                <input class="w3-input" name="Password" type="password">
            </p>
            <div>
                <button type="submit" name="Submit" class="w3-button w3-text-center w3-padding-16 w3-hover-green" style="width:50%;float:left; background-color:#008f00; color:white">Login</button>

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
			$results= mysqli_query($conn,"SELECT FoS_id, FoS_name FROM Fraternities_and_Sororities");
			?>
					
		<select class="w3-center w3-panel " style="width:100%; padding:12px" name="FoS_id">
		<?php
			while($row = mysqli_fetch_array($results)){
				echo '<option style="width:100%; size:40px" 
				value="' .$row['FoS_id']. '">'. $row['FoS_name']. '</option>' ;
			}
		?> 
		</select>  
           
            
            <label><b class="w3-text-black">Member Name</b></label>
            <input name="Member_name" type="text" required="true" placeholder="First and Last name"/>
            
            <label><b class="w3-text-black">Graduation Year</b></label>
            <input name="Grad_Year" type="int" required="true" placeholder="YYYY" />
            
            <label><b class="w3-text-black">Email</b></label><br>
            <input  name="Email" style="" class="w3-block w3-input w3-border" type="email" required="true" placeholder="example@yourmail.com"/>
            <br>
            <label><b class="w3-text-black">Password</b></label>
            <input name="Password" id="pw" type="password" required="true"/>
            
            <label><b class="w3-text-black">Re-Enter Password</b></label>
            <input name="check_password" id="checkPw" type="password" required="true" onkeyup='reference();'>
            <span id="checkStatus"></span>

            <script>
                function reference() {
                    if(document.getElementById('pw').value == document.getElementById('checkPw').value){
                        document.getElementById('checkStatus').style.color = 'green';
                        document.getElementById('checkStatus').innerHTML='Matching';
                        document.getElementById('submit').disabled=false;
                    }else{
                        document.getElementById('submit').disabled=true;
                        document.getElementById('checkStatus').style.color = 'red';
                        document.getElementById('checkStatus').innerHTML='Not Matching';
                    }
                }
            </script>
            <div>
                <button type="submit" id="submit" class="w3-button w3-hover-green w3-margin-top" style="height:50px;width:100%; background-color:#008F00;color:white">Register</button>
                
                <button type="button" onclick="document.getElementById('register').style.display='none'" class="w3-margin-top w3-btn w3-hover-red" style="">Cancel</button>
            </div>
          
        </div>
    </form>

</div>
   
</div><!-- end of body -->   
</body>
</html>
