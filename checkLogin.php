<!DOCTYPE html>
<head>viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-vivid.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-red.css">
<link rel="stylesheet" type="text/css" href="mainCSS.css"/>
</head>
<title>Wrong Login</title>
<div id="body">
    <div class="w3-container w3-padding-8 w3-theme-d5" style="margin-top:0px; margin-bottom:0px">
        
    <h1 class="w3-center">LHU GREEK Login / Register</h1>
    <?php	
        if ( isset( $_SESSION["Member_id"]))
        {
        // echo the current user
            echo "   <h5 class='w3-center'>Current User: ".$_SESSION["Member_name"]."</h5>\n";
        }
    ?> 

</div>
    <div class="w3-containter w3-padding-32 w3-white" style="width:50%; margin-left:auto; margin-right:auto">

<?php
session_start();

$host="willy"; // Host name
$username="comp305_grp1"; // Mysql username
$password="Temp!comp305_grp1"; // Mysql password
$db_name="comp305_grp1"; // Database name
$tbl_name="Members"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['Password'];//PASSWORD
$mypassword=$_POST['FoS_id'];


// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT Member_id, FoS_id, Member_name, Grad_Year, Email, Admin_status, Dues_owed,Password FROM $tbl_name WHERE Password='$myusername' and FoS_id='$mypassword'";//PASSWORD

$result=mysql_query($sql);



// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
$row=mysql_fetch_assoc($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"

$_SESSION['Member_id']=$myusername;
$_SESSION['FoS_id']=$mypassword;
$_SESSION['Member_name']=$row['Member_name'];
$_SESSION['Password']=$row['Password'];//PASSWORD
$_SESSION['Grad_Year']=$row['Grad_Year'];
$_SESSION['Email']=$row['Email'];
$_SESSION['Admin_status']=$row['Admin_status'];
$_SESSION['Dues_owed']=$row['Dues_owed'];

/**session_register("myusername");
session_register("mypassword");
header("location:memerPage_comp305.php");
**/
}
else {
    
echo "Wrong Username or Password<br>";
echo "Password: ".$myusername."<br>";
echo "FoS_id: ".$mypassword."<br>";

}
if($_SESSION['Admin_status']=='Y'){
    header("Location: adminPage.php");
}else if($_SESSION['Admin_status']=='N'){
    header("Location: UserPage.php");
}
?>
<br />
<a href="logIn.php"> Back to Login Page</a>
