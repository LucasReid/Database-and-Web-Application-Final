<!DOCTYPE html>
<head>
<meta charset="UTF-8"></meta>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css"/>
<link rel="stylesheet" type="text/css" href="mainCSS.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<script src="webJS.js" defer></script>
</head>

<title> Under Construction </title>
<body style="min-width:1000">
<?php	
$connec = mysqli_connect('willy','comp305_grp1','Temp!comp305_grp1','comp305_grp1');
if(!$connec)
{
   $output = "unable to connect";
   exit();
}
require "comp305.php";
if ( isset( $_SESSION["Member_id"] ))
{
    // echo the current user
    echo "   <h5 >Current User: ".$_SESSION["Member_name"]."</h5>\n";
}
else
{
    // echo no login yet
    echo "   <h5 >No user logged in</h5>\n";
    
}
?>
<!----------------START OF NAVIGATION MENU----------------> 
  
<span style="font-size:30px;cursor:pointer;float:left" onclick="openNav()">&#9776; open</span>
    <div id="navigation" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="logIn.php">Login</a>
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
<!---------------- START PAGE BODY ---------------->  
<div id="body" >   
    <div class="title">   
        <h1 class="title">LHU Fraternity &#38; Sorority</h1>
    </div>



    <!----------------START OF FRATERNITIES TABS---------------->    
    <h2>Fraternities</h2>
    <div id="boxes">
    <!-- picture tabs -->
       <a href="javascript:void(0)" class="Box" onclick="openInfoTab(event, 'ACR')">
            <div>
                <img class ="acr" src="pictures/ACR.jpg"  onmouseover="this.src='pictures/ACRGreek.jpg'" onmouseout="this.src='pictures/ACR.jpg'">
           </div>
            </a>

        <a href="javascript:void(0)" class="Box" onclick="openInfoTab(event, 'ASP')">
            <div>
                
               <img class ="asp"src="pictures/ASP.jpg" onmouseover="this.src='pictures/ASPGreek.jpg'" onmouseout="this.src='pictures/ASP.jpg'">

            </div>
        </a>
        <a href="javascript:void(0)" class="Box" onclick="openInfoTab(event, 'KDR')">
            <div>
                <img class="kdr" src="pictures/KDR.jpg" onmouseover="this.src='pictures/KDRGreek.jpg'" onmouseout="this.src='pictures/KDR.jpg'">
            </div>
        </a>
        <a href="javascript:void(0)" class="Box" onclick="openInfoTab(event, 'PMD')">    
            <div>
               <img class="pmd" src="pictures/PMD.jpg" onmouseover="this.src='pictures/PMDGreek.jpg'" onmouseout="this.src='pictures/PMD.jpg'">
            </div>
        </a>    
        </div>
        
        
        <!-- info tabs -->
        <!--ACR-->
        <div id="ACR" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black">
        <h3 class="w3-animate-left">Alpha Chi Rho</h3>
        <p>
        <?php 
				 $sql2="select Description FROM Fraternities_and_Sororities where FoS_id=1;";
				 $Results2=$connec->query($sql2);
				 if ( $Results2 )
    		{
        // loop through the results the fetch_row method returns an array of the column
        //      data - one item in the array for each column in the select statement.
        //      the statement in the while will evaluate to false when there are no more rows
        while( $Row = $Results2->fetch_row() )
        {
        		
            for( $i=0; $i<count($Row); $i++ )
            {
            	echo "<p>".$Row[$i]."</p>";
            }
        }
        // stop the table HTML
        echo "</table>\n";
    	}
    	else
    	{
        echo "<p>No results returned from the query</p>\n";// no results returned
    	}       
        ?>
        	</p>
        <p> <a href="https://www.facebook.com/AXPLHU/" class="fa fa-facebook"></a>
            </p>
    </div>
    
    	<!--ASP-->
        <div id="ASP" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black">
        <h3 class="w3-animate-top">Alpha Sigma Phi</h3>
        <p> <?php 
				 $sql3="select Description FROM Fraternities_and_Sororities where FoS_id=2;";
				 $Results3=$connec->query($sql3);
				 if ( $Results3 )
    		{
        // loop through the results the fetch_row method returns an array of the column
        //      data - one item in the array for each column in the select statement.
        //      the statement in the while will evaluate to false when there are no more rows
        while( $Row = $Results3->fetch_row() )
        {
        		
            for( $i=0; $i<count($Row); $i++ )
            {
            	echo "<p>".$Row[$i]."</p>";
            }
        }
        // stop the table HTML
        echo "</table>\n";
    	}
    	else
    	{
        echo "<p>No results returned from the query</p>\n";// no results returned
    	}       
        ?> </p>
        <p>
            <a href="https://www.facebook.com/Alpha-Sigma-Phi-Delta-Nu-Chapter-Lock-Haven-University-of-PA-10150122059435160/" class="fa fa-facebook"></a>
            </p>
    </div>
    
    	<!--KDR-->
         <div id="KDR" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black w3-highlight-yellow">
        <h3 class="w3-animate-top">Kappa Delta Rho</h3>
        <p><?php 
		$sql4="select Description FROM Fraternities_and_Sororities where FoS_id=3;";
		$Results4=$connec->query($sql4);
		if ( $Results4 )
    		{
       			// loop through the results the fetch_row method returns an array of the column
       			//      data - one item in the array for each column in the select statement.
       			//      the statement in the while will evaluate to false when there are no more rows
        		while( $Row = $Results4->fetch_row() )
        		{
        		
           			for( $i=0; $i<count($Row); $i++ )
            			{
            				echo "<p>".$Row[$i]."</p>";
            			}
        		}
        		// stop the table HTML
        		echo "</table>\n";
    			}
    			else
    			{
        			echo "<p>No results returned from the query</p>\n";// no results returned
    		}       
        ?>
	</p>
	<p>
             <a href="https://www.facebook.com/kappadeltarhoaa/" class="fa fa-facebook"></a>
             </p>
    </div>
    
    	<!--PMD-->
        <div id="PMD" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black">
        <h3 class="w3-animate-right">Phi Mu Delta</h3>
        <p ><?php 
				 $sql5="select Description FROM Fraternities_and_Sororities where FoS_id=4;";
				 $Results5=$connec->query($sql5);
				 if ( $Results5 )
    		{
        // loop through the results the fetch_row method returns an array of the column
        //      data - one item in the array for each column in the select statement.
        //      the statement in the while will evaluate to false when there are no more rows
        while( $Row = $Results5->fetch_row() )
        {
        		
            for( $i=0; $i<count($Row); $i++ )
            {
            	echo "<p>".$Row[$i]."</p>";
            }
        }
        // stop the table HTML
        echo "</table>\n";
    	}
    	else
    	{
        echo "<p>No results returned from the query</p>\n";// no results returned
    	}       
        ?>
        </p>
        <p>
            <a href="https://www.facebook.com/pmdmuzeta/" class="fa fa-facebook"></a>
            </p>
    </div>

    <!----------------START OF SORORITIES TABS---------------->    

        <h2 class="">Sororities</h2>
    <div id="boxes">
    <!-- picture tabs -->
        <a href="javascript:void(0)" class="Box" onclick="openInfoTab(event, 'AST')">
            <div>
                <img class="ast" src="pictures/AST.jpg" onmouseover="this.src='pictures/ASTGreek.jpg'" onmouseout="this.src='pictures/AST.jpg'">
           </div>
            </a>

        <a href="javascript:void(0)" class="Box" onclick="openInfoTab(event, 'SK')">
            <div>
                
               <img class="sk" src="pictures/SK.jpg" onmouseover="this.src='pictures/SKGreek.jpg'" onmouseout="this.src='pictures/SK.jpg'">

            </div>
        </a>
        <a href="javascript:void(0)" class="Box" onclick="openInfoTab(event, 'SSS')">
            <div>
                <img class="sss"src="pictures/SSS.jpg" onmouseover="this.src='pictures/SSSGreek.jpeg'" onmouseout="this.src='pictures/SSS.jpg'">
            </div>
        </a>
        <a href="javascript:void(0)" class="Box" onclick="openInfoTab(event, 'ZTA')">    
            <div>
               <img class="zta" src="pictures/ZTA.jpg" onmouseover="this.src='pictures/ZTAGreek.jpg'" onmouseout="this.src='pictures/ZTA.jpg'">
            </div>
        </a>    
        </div>
        <!-- info tabs -->
        <!--AST-->
       <div id="AST" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black w3-bold w3-black">
        <h3 class="w3-animate-left">Alpha Sigma Tau</h3>
        <p><?php 
				 $sql6="select Description FROM Fraternities_and_Sororities where FoS_id=5;";
				 $Results6=$connec->query($sql6);
				 if ( $Results6 )
    		{
        // loop through the results the fetch_row method returns an array of the column
        //      data - one item in the array for each column in the select statement.
        //      the statement in the while will evaluate to false when there are no more rows
        while( $Row = $Results6->fetch_row() )
        {
        		
            for( $i=0; $i<count($Row); $i++ )
            {
            	echo "<p>".$Row[$i]."</p>";
            }
        }
        // stop the table HTML
        echo "</table>\n";
    	}
    	else
    	{
        echo "<p>No results returned from the query</p>\n";// no results returned
    	}       
        ?></p>
        <p>
           <a href="https://www.facebook.com/Lock-Haven-Alpha-Sigma-Tau-289739461137754/" class="fa fa-facebook"></a>
           </p>
    </div>
    
    <!--SK-->
    <div id="SK" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black">
        <h3 class="w3-animate-top">Sigma Kappa</h3>
        <p><?php 
				 $sql7="select Description FROM Fraternities_and_Sororities where FoS_id=6;";
				 $Results7=$connec->query($sql7);
				 if ( $Results7 )
    		{
        // loop through the results the fetch_row method returns an array of the column
        //      data - one item in the array for each column in the select statement.
        //      the statement in the while will evaluate to false when there are no more rows
        while( $Row = $Results7->fetch_row() )
        {
        		
            for( $i=0; $i<count($Row); $i++ )
            {
            	echo "<p>".$Row[$i]."</p>";
            }
        }
        // stop the table HTML
        echo "</table>\n";
    	}
    	else
    	{
        echo "<p>No results returned from the query</p>\n";// no results returned
    	}       
        ?>
        </p>
        <p>
        	<a href="https://www.facebook.com/SigmaKappaLHU/" class="fa fa-facebook"></a>
        </p>
    </div>
    
    <!--SSS-->
    <div id="SSS" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black w3-bold">
        <h3 class="w3-animate-top">Sigma Sigma Sigma</h3>
        <p><?php 
				 $sql8="select Description FROM Fraternities_and_Sororities where FoS_id=7;";
				 $Results8=$connec->query($sql8);
				 if ( $Results8 )
    		{
        // loop through the results the fetch_row method returns an array of the column
        //      data - one item in the array for each column in the select statement.
        //      the statement in the while will evaluate to false when there are no more rows
        while( $Row = $Results8->fetch_row() )
        {
        		
            for( $i=0; $i<count($Row); $i++ )
            {
            	echo "<p>".$Row[$i]."</p>";
            }
        }
        // stop the table HTML
        echo "</table>\n";
    	}
    	else
    	{
        echo "<p>No results returned from the query</p>\n";// no results returned
    	}       
        ?></p>
        <p>
        <a href="https://www.facebook.com/SigmaSigmaSigmaAlphaRho/" class="fa fa-facebook"></a>
        </p>
    </div>
    
    <!--ZTA-->
    <div id="ZTA" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black w3-bold">
        <h3 class="w3-animate-right">Zeta Tau Alpha</h3>
        <p ><?php 
				 $sql9="select Description FROM Fraternities_and_Sororities where FoS_id=8;";
				 $Results9=$connec->query($sql9);
				 if ( $Results9 )
    		{
        // loop through the results the fetch_row method returns an array of the column
        //      data - one item in the array for each column in the select statement.
        //      the statement in the while will evaluate to false when there are no more rows
        while( $Row = $Results9->fetch_row() )
        {
        		
            for( $i=0; $i<count($Row); $i++ )
            {
            	echo "<p>".$Row[$i]."</p>";
            }
        }
        // stop the table HTML
        echo "</table>\n";
    	}
    	else
    	{
        echo "<p>No results returned from the query</p>\n";// no results returned
    	}       
        ?></p>
        <p>
        <a href="https://www.facebook.com/LHUPZTA/" class="fa fa-facebook"></a>
        </p>
    </div>
    <script>
        function openInfoTab(event, tab) {
            var i, tabContent, tablinks;
            tabContent = document.getElementsByClassName("tabContent");
            for (i = 0; i < tabContent.length; i++){
                tabContent[i].style.display="none";
            }
            tablinks = document.getElementsByClassName("boxModal");
            for(i=0; i<tablinks.length;i++){
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tab).style.display = "block";
            event.currentTarget.className += " active";
        } 
    </script>    
    <!-- end of boxes -->

<div class="w3-container w3-padding-32 w3-center w3-opacity w3-light-grey w3-small w3-block">
<p class="w3-text-grey">Copyright 2017 &#169; </p>
    
</div>
</div><!-- end of Body -->
</body>
</html>
