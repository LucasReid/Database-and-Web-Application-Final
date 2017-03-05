<?php	
$db=mysqli_connect('willy', 'comp305_grp1', 'Temp!comp305_grp1','comp305_grp1')
or die ('Error connecting to MySqL Server.');
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8"></meta>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="mainCSS.css"/>
<script src="webJS.js" defer></script>
</head>

<title> Under Construction </title>
<body>
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
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
        document.getElementById("navigation").style.width = "0";
        document.getElementById("body").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
    }
</script>
<!---------------- START PAGE BODY ---------------->  
<div id="body">   
    <div class="title">   
        <h1 class="title">LHU Fraternity &#38; Sorority</h2>
    </div>



    <!----------------START OF FRATERNITIES TABS---------------->    
    <h2>Fraternities</h2>
    <div id="boxes">
    <!-- picture tabs -->
        <a href="javascript:void(0)" class="Box" onclick="openInfoTab(event, 'ACR')">
            <div>
                <img src="pictures/ACR.jpeg">
           </div>
            </a>

        <a href="javascript:void(0)" class="Box" onclick="openInfoTab(event, 'ASP')">
            <div>
                
               <img src="pictures/ASP.jpg">

            </div>
        </a>
        <a href="javascript:void(0)" class="Box" onclick="openInfoTab(event, 'KDR')">
            <div>
                <img src="pictures/KDR.jpg">
            </div>
        </a>
        <a href="javascript:void(0)" class="Box" onclick="openInfoTab(event, 'PMD')">    
            <div>
               <img src="pictures/PMD.jpg">
            </div>
        </a>    
        </div>
        <!-- info tabs -->
        <div id="ACR" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black">
            <h3 class="w3-animate-left">Alpha Chi Rho</h3>
            <p>TODO: ACR description needed</p>
        </div>
        <div id="ASP" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black">
            <h3 class="w3-animate-top">Alpha Sigma Phi</h3>
            <p>TODO: ASP description needed</p>
        </div>
         <div id="KDR" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black">
             <h3 class="w3-animate-top">Kappa Delta Rho</h3>
            <p>TODO: KDR description needed</p>
        </div>
         <div id="PMD" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black">
             <h3 class="w3-animate-right">Phi Mu Delta</h3>
            <p >TODO: PMD description needed</p>
        </div>

    <!----------------START OF SORORITIES TABS---------------->    

        <h2 class="">Sororities</h2>
    <div id="boxes">
    <!-- picture tabs -->
        <a href="javascript:void(0)" class="Box" onclick="openInfoTab(event, 'AST')">
            <div>
                <img src="pictures/AST.png">
           </div>
            </a>

        <a href="javascript:void(0)" class="Box" onclick="openInfoTab(event, 'SK')">
            <div>
                
               <img src="pictures/SK.jpg">

            </div>
        </a>
        <a href="javascript:void(0)" class="Box" onclick="openInfoTab(event, 'SSS')">
            <div>
                <img src="pictures/SSS.png">
            </div>
        </a>
        <a href="javascript:void(0)" class="Box" onclick="openInfoTab(event, 'ZTA')">    
            <div>
               <img src="pictures/ZTA.jpg">
            </div>
        </a>    
        </div>
        <!-- info tabs -->
        <div id="AST" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black">
            <h3 class="w3-animate-left">Alpha Sigma Tau</h3>
            <p> TODO: AST description needed</p>
        </div>
        <div id="SK" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black">
            <h3 class="w3-animate-top">Sigma Kappa</h3>
            <p>TODO: SK description needed </p>
        </div>
         <div id="SSS" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black">
             <h3 class="w3-animate-top">Sigma Sigma Sigma</h3>
            <p>TODO: SSS description needed</p>
        </div>
         <div id="ZTA" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black">
             <h3 class="w3-animate-right">Zeta Tau Alpha</h3>
            <p >TODO: ZTA description needed</p>
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
</div><!-- end of Body -->
<footer class="w3-container w3-padding-32 w3-center w3-opacity w3-light-grey w3-small">
<p class="w3-text-grey">Copyright 2017 &#169; </p>
    
</footer>
</body>
</html>
