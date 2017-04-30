<?php
require "comp305.php";

//header('Location: http://penguin.lhup.edu/~lnr7605/COMP305-master/adminPage.php ');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="registerModal.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-red.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
     
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse w3-theme-d5">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="mainPageTemplate.php">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Users</a></li>
        <li><a href="#">Edit</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
         <li><a href="logOut.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="Chart1.jpg">Event Calendar</a></p>
      
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Welcome</h1>
     
      <?php	
        if ( isset( $_SESSION["Member_id"]))
        {
        // echo the current user
            echo "   <h5 class='w3-center'> ".$_SESSION["Member_name"]."</h5>\n";
        }
        else
        {
        // echo no login yet
            echo "   <h5 >No user logged in</h5>\n";
        }
    ?>
      <hr>
      <h3>Members Table</h3>
      <?php 
      	$fos = $_SESSION['FoS_id'];
			writeRegistrationINFO($fos);      
      ?>
      	<!--<form action ='' method='POST'>
		<input type='' id ='MemberID' name='MemberID'/><br/>
		<input type='submit' name='submit' />
	</form>-->
       
    </div>
    <div class="col-sm-2 sidenav">
    </div>
  </div>
</div>

<div id="edit" class="modal">
	<span onclick="document.getElementById('edit').style.display='none'" class="close" title="Close Modal">&times;</span>
	<form class="modal-content animate " name="data-input" method="POST">
	<div class="w3-container w3-card-4 w3-padding-32">
        <?php
        
        $postDues = $_POST['Dues_owed'];
        $postMem = $_POST['Member_id'];
        
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

        $SQL = "UPDATE Members SET Dues_owed=$postDues WHERE Member_id = $postMem";
        mysqli_query($conn, $SQL);
        ?>
        <script>
            function clickEvent(id){
                getButtonValue(id);
                startModal();
            }
            function startModal(){
                document.getElementById('edit').style.display='block';
            }
            
            function getButtonValue(id){					
                var final = document.getElementById('Member_id').value = id;  
            }
        </script>
        <label>Update Dues Owed:</label><br>
		<input type="number" id="Dues_owed" name="Dues_owed"/>		
		<input type="number" id="Member_id" name="Member_id" style="display:none" value=""/>
		<button type="submit" name="submit" class="w3-button w3-green">Update Dues</button>
		
		</div>
	</form>
		
<script>
    var modal = document.getElementById('edit');
    
    window.onclick = function(event){
        if(event.target==modal){
            modal.style.display ="block";
        }
    }
</script>
</div>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-32 w3-theme-d5">
  <p>Admin Page</p>
</footer>

</body>
</html>


















