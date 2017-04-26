<?php	
$db=mysqli_connect('willy', 'comp305_grp1', 'Temp!comp305_grp1','comp305_grp1')
or die ('Error connecting to MySqL Server.');
require "comp305.php";
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" type="text/css" href="mainCSS.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-red.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<title> Under Construction </title>
<body>
<div class="body" style="min-width: 900px">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="mainPageTemplate.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>LHU Fraternity &#38 Sorority</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="National Chapter Web"><i class="fa fa-globe"></i></a>
  <div class="w3-dropdown-hover w3-hide-small">
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
    </div>
  </div>
 </div>
</div>


<!-- Left Page Container With Calander -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
    <!-- Left Column -->
    <div class="w3-col m3">
        <!-- Profile of Calendar -->
        <div class="w3-card-2 w3-round w3-white" style="float: right">
          <div class="w3-container"style="width: 500px; height: 500px">
            <div class="w3-card-2 w3-round w3-light-red w3-center" style="width: auto; height: 500px">
              <iframe src="https://calendar.google.com/calendar/embed?src=9sq4hf7qtm45vq71l4bknaqsnk%40group.calendar.google.com&ctz=America/New_York" style="border: 0px" width="100%"   height="100%" frameborder="0" scrolling="no"></iframe></div>
          </div>
        </div>
        <br>
        <!-- End Left Column -->
    </div>

    <!-- Middle Column -->
    <div class="w3-col m7">

      <div class="w3-row-padding">
        <div class="w3-col m12 ">
          <div class="w3-card-2 w3-round  " style="background-color:#ffe6e6">
            <div class="w3-container w3-padding">
                <div class="w3-container" style="max-width:300px; max-height:300px; margin-bottom:20px" >
                    <?php
                        $fos = $_SESSION['FoS_id'];
                        $pass = $_SESSION['Password'];
                    ?>
                    
                </div>
                <div style="padding:35px;">
                    <h5 class="w3-opacity"><b>Lock Haven University of Pennsylvania Sorority and Fraternity</b></h5>
                    <div>
                        <script>
                            var fos = "<?php echo $fos?>";
                            var pass = "<?php echo $pass?>";
                            var fsNames=[
                                'Alpha Chi Rho', 'Alpha Sigma Phi','Kappa Delta Rho', 'Phi Mu Delta', 'Alpha Sigma Tau','Sigma Kappa', 'Sigma Sigma Sigma', 'Zeta Tau Alph'
                            ];
                            document.write("<p>Fraternity / Sorority: "+fsNames[fos-1]+"</p>");
                            document.write("<p>Password: <span style='background-color:black'><span class='password w3-border'>"+pass+"</span></span></p>");
                        </script>
                        
                    </div> 
                    <hr>
                    <?php
                        if($_SESSION['Member_name']!==null)
                        {
                            echo " <table class='w3-table-all w3-centered'>";
                            echo " <tr>";
                            echo " <th> Member ID</th>";
                            echo " <th> Grad Year</th>";
                            echo " <th> Email</th>";
                            echo " <th> Admin Status</th>";
                            echo " <th> Dues Owed</th>";
                            echo " </tr>";
                            echo " <tr>";
                            echo " <td> ".$_SESSION["Member_id"]."</td>";
                            echo " <td> ".$_SESSION["Grad_Year"]."</td>";
                            echo " <td> ".$_SESSION["Email"]."</td>";
                            echo " <td> ".$_SESSION["Admin_status"]."</td>";
                            echo " <td> ".$_SESSION["Dues_owed"]."</td>";
                            echo " </tr>";
                            echo " </table>";
                        }
                        else
                        {
                            echo "<center>You are not logged in</center>";
                        }
                    ?>					
                </div>
              </div>
            </div>
          </div>
        </div>  
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card-2 w3-round w3-white w3-center" style="border: 0px">
        <div class="w3-container">
            <?php
                echo"<p>Welcome: ".$_SESSION['Member_name']."</p>";
            ?>
            <script>
                        var fos = "<?php echo $fos ?>";
                        
                        var imgArray = new Array();

                        imgArray[1] = new Image();
                        imgArray[1].src ='pictures/ACR.jpg'; 
                        
                        imgArray[2] = new Image();
                        imgArray[2].src ='pictures/ASP.jpg'; 
                        
                        imgArray[3] = new Image();
                        imgArray[3].src ='pictures/KDR.jpg'; 
                        
                        imgArray[4] = new Image();
                        imgArray[4].src ='pictures/PMD.jpg'; 
                        
                        imgArray[5] = new Image();
                        imgArray[5].src ='pictures/AST.jpg'; 
                        
                        imgArray[6] = new Image();
                        imgArray[6].src ='pictures/SK.jpg'; 
                        
                        imgArray[7] = new Image();
                        imgArray[7].src ='pictures/SSS.jpg'; 
                        
                        imgArray[8] = new Image();
                        imgArray[8].src ='pictures/ZTA.jpg';
                        
                        document.write("<img src='"+imgArray[fos].src+"'/>");
                    </script>
          <hr>
          <p><button class="w3-button w3-block w3-theme-l4">Learn More</button></p>
          <!-- Profile -->
            <p> This is where the outline of the fraternity or sorority would pop up and be nice to look at. with link to fb and twitter.</p>
              <hr>
            	  <a href="logOut.php"><button type="button" class="w3-button w3-theme" ><i class="fa fa-pencil"></i>  Log Out</button></a>
            </div>
        </div>
      </div>
<br>
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column  -->
    
   <div>
        
          <!-- Profile -->
         
      <br>


    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16 w3-center w3-color-pink">
    <h5>LHU COMP305 Scrum Final</h5>
    <h6 class="w3-opacity">Don't tell ANYONE your password!</h6>
    
</footer>
</body>

