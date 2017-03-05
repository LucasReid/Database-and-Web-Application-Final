<?php

$host="willy"; // Host name
$username="comp305_grp1"; // Mysql username
$password="Temp!comp305_grp1"; // Mysql password
$db_name="comp305_grp1"; // Database name
$tbl_name="Members"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['Member_id'];
$mypassword=$_POST['FoS_id'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE Member_id='$myusername' and FoS_id='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"

$_SESSION['Member_id']=$myusername;
$_SESSION['FoS_id']=$mypassword;
header("Location: memberPage_comp305.php");



/**session_register("myusername");
session_register("mypassword");
header("location:memerPage_comp305.php");
**/
}
else {
echo "Wrong Username or Password";

}
?>
<br />
<a href="http://penguin.lhup.edu/~aap5264/logIn.php"> Back to Login Page</a>
