<?php	
require "comp305.inc";

$connec = mysqli_connect('willy','comp305_grp1','Temp!comp305_grp1','comp305_grp1');
if(!$connec)
{
   $output = "unable to connect";
   exit();
}
echo "Connection is good";

$sql2="select FoS_id, FoS_name, Type, Description FROM Fraternities_and_Sororities where FoS_id=1;";
$sql3="select FoS_id, FoS_name, Type, Description FROM Fraternities_and_Sororities where FoS_id=2;";
$sql4="select FoS_id, FoS_name, Type, Description FROM Fraternities_and_Sororities where FoS_id=3;";
$sql5="select FoS_id, FoS_name, Type, Description FROM Fraternities_and_Sororities where FoS_id=4;";
$sql6="select FoS_id, FoS_name, Type, Description FROM Fraternities_and_Sororities where FoS_id=5;";
$sql7="select FoS_id, FoS_name, Type, Description FROM Fraternities_and_Sororities where FoS_id=6;";
$sql8="select FoS_id, FoS_name, Type, Description FROM Fraternities_and_Sororities where FoS_id=7;";
$sql9="select FoS_id, FoS_name, Type, Description FROM Fraternities_and_Sororities where FoS_id=8;";


$Results2=$connec->query($sql2);//alpha chi rho
$Results3=$connec->query($sql3);//alpha sigma phi
$Results4=$connec->query($sql4);//kappa delta rho
$Results5=$connec->query($sql5);//phi mu delta
$Results6=$connec->query($sql6);//alpha sigma tau
$Results7=$connec->query($sql7);//sigma kappa
$Results8=$connec->query($sql8);//sigma sigma sigma
$Results9=$connec->query($sql9);//zeta tau alpha

if ( $Results2 )
    {
        // start the table HTML
        echo "<table class='w3-table-all w3-centered' style='width:75%; margin-left:auto; margin-right:auto'>\n";
        // add the HTML for a table header row
        echo "   <thead>\n";
        echo "      <th>FoS ID: </th>\n";
        echo "      <th>Fraternitity / Sorority name: </th>\n";
        echo "      <th>Type: </th>\n";
        echo "      <th>Description: </th>\n";
        echo "   </thead>\n";
        
        // loop through the results the fetch_row method returns an array of the column
        //      data - one item in the array for each column in the select statement.
        //      the statement in the while will evaluate to false when there are no more rows
        while( $Row = $Results2->fetch_row() )
        {
            echo "   <tr>\n";// add  table row

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
        echo "<p>No results returned from the query</p>\n";// no results returned
    }
if ( $Results3 )
    {
        // start the table HTML
        echo "<table class='w3-table-all w3-centered' style='width:75%; margin-left:auto; margin-right:auto'>\n";
        // add the HTML for a table header row
        echo "   <thead>\n";
        echo "      <th>FoS ID: </th>\n";
        echo "      <th>Fraternitity / Sorority name: </th>\n";
        echo "      <th>Type: </th>\n";
        echo "      <th>Description: </th>\n";
        echo "   </thead>\n";
        
        // loop through the results the fetch_row method returns an array of the column
        //      data - one item in the array for each column in the select statement.
        //      the statement in the while will evaluate to false when there are no more rows
        while( $Row = $Results3->fetch_row() )
        {
            echo "   <tr>\n";// add  table row

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
        echo "<p>No results returned from the query</p>\n";// no results returned
    }
if ( $Results4 )
    {
        // start the table HTML
        echo "<table class='w3-table-all w3-centered' style='width:75%; margin-left:auto; margin-right:auto'>\n";
        // add the HTML for a table header row
        echo "   <thead>\n";
        echo "      <th>FoS ID: </th>\n";
        echo "      <th>Fraternitity / Sorority name: </th>\n";
        echo "      <th>Type: </th>\n";
        echo "      <th>Description: </th>\n";
        echo "   </thead>\n";
        
        // loop through the results the fetch_row method returns an array of the column
        //      data - one item in the array for each column in the select statement.
        //      the statement in the while will evaluate to false when there are no more rows
        while( $Row = $Results4->fetch_row() )
        {
            echo "   <tr>\n";// add  table row

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
        echo "<p>No results returned from the query</p>\n";// no results returned
    }
if ( $Results5 )
    {
        // start the table HTML
        echo "<table class='w3-table-all w3-centered' style='width:75%; margin-left:auto; margin-right:auto'>\n";
        // add the HTML for a table header row
        echo "   <thead>\n";
        echo "      <th>FoS ID: </th>\n";
        echo "      <th>Fraternitity / Sorority name: </th>\n";
        echo "      <th>Type: </th>\n";
        echo "      <th>Description: </th>\n";
        echo "   </thead>\n";
        
        // loop through the results the fetch_row method returns an array of the column
        //      data - one item in the array for each column in the select statement.
        //      the statement in the while will evaluate to false when there are no more rows
        while( $Row = $Results5->fetch_row() )
        {
            echo "   <tr>\n";// add  table row

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
        echo "<p>No results returned from the query</p>\n";// no results returned
    }
if ( $Results6 )
    {
        // start the table HTML
        echo "<table class='w3-table-all w3-centered' style='width:75%; margin-left:auto; margin-right:auto'>\n";
        // add the HTML for a table header row
        echo "   <thead>\n";
        echo "      <th>FoS ID: </th>\n";
        echo "      <th>Fraternitity / Sorority name: </th>\n";
        echo "      <th>Type: </th>\n";
        echo "      <th>Description: </th>\n";
        echo "   </thead>\n";
        
        // loop through the results the fetch_row method returns an array of the column
        //      data - one item in the array for each column in the select statement.
        //      the statement in the while will evaluate to false when there are no more rows
        while( $Row = $Results6->fetch_row() )
        {
            echo "   <tr>\n";// add  table row

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
        echo "<p>No results returned from the query</p>\n";// no results returned
    }
if ( $Results7 )
    {
        // start the table HTML
        echo "<table class='w3-table-all w3-centered' style='width:75%; margin-left:auto; margin-right:auto'>\n";
        // add the HTML for a table header row
        echo "   <thead>\n";
        echo "      <th>FoS ID: </th>\n";
        echo "      <th>Fraternitity / Sorority name: </th>\n";
        echo "      <th>Type: </th>\n";
        echo "      <th>Description: </th>\n";
        echo "   </thead>\n";
        
        // loop through the results the fetch_row method returns an array of the column
        //      data - one item in the array for each column in the select statement.
        //      the statement in the while will evaluate to false when there are no more rows
        while( $Row = $Results7->fetch_row() )
        {
            echo "   <tr>\n";// add  table row

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
        echo "<p>No results returned from the query</p>\n";// no results returned
    }
if ( $Results8 )
    {
        // start the table HTML
        echo "<table class='w3-table-all w3-centered' style='width:75%; margin-left:auto; margin-right:auto'>\n";
        // add the HTML for a table header row
        echo "   <thead>\n";
        echo "      <th>FoS ID: </th>\n";
        echo "      <th>Fraternitity / Sorority name: </th>\n";
        echo "      <th>Type: </th>\n";
        echo "      <th>Description: </th>\n";
        echo "   </thead>\n";
        
        // loop through the results the fetch_row method returns an array of the column
        //      data - one item in the array for each column in the select statement.
        //      the statement in the while will evaluate to false when there are no more rows
        while( $Row = $Results8->fetch_row() )
        {
            echo "   <tr>\n";// add  table row

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
        echo "<p>No results returned from the query</p>\n";// no results returned
    }
if ( $Results9 )
    {
        // start the table HTML
        echo "<table class='w3-table-all w3-centered' style='width:75%; margin-left:auto; margin-right:auto'>\n";
        // add the HTML for a table header row
        echo "   <thead>\n";
        echo "      <th>FoS ID: </th>\n";
        echo "      <th>Fraternitity / Sorority name: </th>\n";
        echo "      <th>Type: </th>\n";
        echo "      <th>Description: </th>\n";
        echo "   </thead>\n";
        
        // loop through the results the fetch_row method returns an array of the column
        //      data - one item in the array for each column in the select statement.
        //      the statement in the while will evaluate to false when there are no more rows
        while( $Row = $Results9->fetch_row() )
        {
            echo "   <tr>\n";// add  table row

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
        echo "<p>No results returned from the query</p>\n";// no results returned
    }
    // close the connection
    $connec->close();
?>
