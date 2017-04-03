<?php
//start session
session_start();
//  if(!isset($_SESSION["Member_id"]))
//  {
//  header("Location: logIn.php");
//exit();
//}
//ini_set("display_errors", 1);
function DatabaseConnect()
{
//set the connection info  willy is the server name on the penguin network
  //set the $UserName and $Password to your credentials for myPHP
  //set the $Database to your penguin user name 
$Server="willy";
$UserName="comp305_grp1";
$Password="Temp!comp305_grp1";
$Database="comp305_grp1";

  //connect to the database
  //create a new instance of a mysqli object this object contains the connection to the mysql server
$Connection= mysqli_connect( $Server, $UserName, $Password, $Database );


  // check for a successful connection connect_error will evaluate to true if there is an error    
if ( $Connection->connect_error )
{
    // stop the script and echo an error message
    echo "<h2>Database Error</h2>\n";
    die( "MySQLi Connection Error: ".$Connection->connect_error."\n" );
}
  //return the connection
  return $Connection;
}
//---------------------------------------------------------------------------------------------------
function InsertNewMemberINFO()
{
	// check to see if something was send via POST
	if ( isset( $_POST["Member_name"] ))
	{
        echo "<p class='w3-center w3-padding-32 w3-text-white w3-xlarge' style='background-color:#821717'> Member and Dues Page</p>\n"; 
	   
        // write out the data sent
        echo "<p class='w3-center'>New Member POST Data:</p>\n";

        // loop through the post data
        //  foreach will loop through associative arrays.
        //  the $Key => $Value expression is how you get the key and value pairs from an associative
      
        // array. for example, if $_POST["first-name"] = "Bill" $Key will be set to "first-name" and $Value will be set to "Bill".  
        echo "<table class='w3-table-all w3-centered' style='width:75%; margin-left:auto;margin-right:auto'>";
        foreach( $_POST as $Key => $Value )
        {
            // echo out the result
            echo "<th>".$Key.": "."</th>";  
        }
        echo "<tr>";
        foreach( $_POST as $Key => $Value)
        {
            echo "<td >".$Value."</td>";
        }
        echo "</tr>";
        echo "</table>";
//connect to the database
$Connection=DatabaseConnect();

// build the insert sql
$SQL = "Insert into Members( Member_id, FoS_id, Member_name, Grad_Year, Email, Admin_status, Dues_owed) values (";
$SQL .= "\"".$_POST['Member_id']."\"";
$SQL .= ",\"".$_POST['FoS_id']."\""; // this is the issue at hand! the regis. form doesnt ask for it but it wants to insert it can leave null or give them the id already before they reigster.
$SQL .= ",\"".$_POST['Member_name']."\"";
$SQL .= ",\"".$_POST['Grad_Year']."\"";
$SQL .= ",\"".$_POST['Email']."\"";
$SQL .= ",\"".$_POST['Admin_status']."\"";
$SQL .= ",\"".$_POST['Dues_owed']."\"";
$SQL .= ");";

		//execute the insert
		$Results=$Connection->query( $SQL );

		// check for success
		if ( $Results )
		{
 		   // success message
		    echo "<div class='w3-round-small w3-green w3-center w3-padding-16' style='width:75%; margin-left:auto; margin-right:auto'>Successfully inserted</div>\n";
		    $_SESSION['Member_name']='Member_name';
		    $_SESSION['FoS_id']='FoS_id';
		}
		else
		{
            // error message
            echo "<div class='w3-round-small w3-red w3-center w3-padding-16' style='width:75%; margin-left:auto; margin-right:auto'>Error with insert\n";
            echo mysqli_error();
            echo "</div>";
		}   
	}
	else
	{
	    // no post data notify the user
	    echo "<p class='w3-centered'>Nothing to insert</p>\n";
	}
//close the connection
//$Connection->close();
}
////////////////////////////////////////////////////////////////////////////////////////////////
// output a table member info
function WriteRegistrationINFO()
{

	//connect to the database
	$Connection=DatabaseConnect();	

    // make a select statement to get data from the database
    $SQL = "select * from Members;";

    // execute the query
    //      use the query method of the $Connection object
    $Results = $Connection->query( $SQL );

    // check for results
    //      $Results will evaluate to true if there data is returned
    //      from the database, false if no data is returned
    if ( $Results )
    {
        
        // start the table HTML
        echo "<table class='w3-table-all w3-centered' style='width:75%; margin-left:auto; margin-right:auto'>\n";

        // add the HTML for a table header row
        echo "   <thead>\n";
        echo "      <th>Member ID: </th>\n";
        echo "      <th>Fraternitity / Sorority ID: </th>\n";
        echo "      <th>Member Name: </th>\n";
        echo "      <th>Graduation Year: </th>\n";
        echo "      <th>Email: </th>\n";
        echo "      <th>Admin Status: </th>\n";
        echo "      <th>Dues owed: </th>\n";
        echo "   </thead>\n";
        
        // loop through the results
        //      the fetch_row method returns an array of the column
        //      data - one item in the array for each column in the
        //      select statement.
        //
        //      the statement in the while will evaluate to false when
        //      there are no more rows
        while( $Row = $Results->fetch_row() )
        {
            // add  table row
            echo "   <tr>\n";
	
            // loop through the items in the array
            //      the count function returns the number of items
            //      in the array.
            for( $i=0; $i<count($Row); $i++ )
            {

                //center align the first cell on each row
                if (( $i == 0 ) || ( $i == 1 ) || ( $i == 8 ))
                {
                     //add a centered cell
                    echo "     <td class=\"centered\">";
                }
                else
                {
                    //add left justified cell
                   echo "     <td>";
                }

                //add the rest of the cell
                echo $Row[$i]."</td>\n";

            }

            // end of the table row
            echo "   </tr>\n";
        }
        
        // stop the table HTML
        echo "</table>\n";
	echo "<br />";
    }
    else
    {
        // no results returned
        echo "<p>No results returned from the query</p>\n";
    }
    // close the connection
    $Connection->close();
}

?>
