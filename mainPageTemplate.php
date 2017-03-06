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
        <h3 class="w3-animate-left w3-bold w3-black">Alpha Chi Rho</h3>
        <p>Alpha Chi Rho is a national
            men's collegiate fraternity whose
            The National Fraternity of Alpha Chi Rho
            Cultivating Men of Word and Deed
            purpose is to enhance the lifelong
            intellectual, moral and social
            development of our members
            through the guidance of our
            Landmarks.</p>
        <p> @AlphaChiRhoHQ</p>
    </div>
        <div id="ASP" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black">
        <h3 class="w3-animate-top w3-bold w3-black">Alpha Sigma Phi</h3>
        <p>Found at Yale University on December 6,
            1845, Alpha Sigma Phi continues to be the
            organization of choice for collegiate men
            founded on the values of Silence,
            Charity, Purity, Honor, and Patriotism. </p>
        <p>@alphasigs</p>
    </div>
         <div id="KDR" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black w3-highlight-yellow">
        <h3 class="w3-animate-top">Kappa Delta Rho</h3>
        <p>  Kappa Delta Rho was founded on May 17, 1905 at Middlebury College in Middlebury, VT. 
    Since then we have grown to 25,000+ initiated members and have 37 active chapters across the country. 
    These individuals have accepted the challenge of Kappa Delta Rho to strive to place Honor Above All Things in their daily lives by:
    Embracing the principles and spirit of the Kappa Delta Rho Gentleman, treating all those they encounter with dignity and respect;
    Working diligently in the pursuit of their education, understanding that they are students first and that the quest for 
    knowledge is an endeavor which lasts a lifetime;
    Meeting all of their obligations to the Fraternity in a timely manner, as to ensure that they 
    are doing their share and they are not a burden to their brothers;
    Engaging in the service of mankind, not for the praise or recognition that such service may bring, 
    but because it is the right thing to do,
    Serving as their brother’s keeper, holding one another accountable for their actions; and
    Supporting their Alma mater, that she may regard Kappa Delta Rho as a partner in the development of her students.
</p>
<p>@KDRNational</p>
    </div>
        <div id="PMD" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black">
        <h3 class="w3-animate-right">Phi Mu Delta</h3>
        <p >Founded nationally in 1918 as the first national fraternity to accept men 
        regardless of their race or religious affiliation Phi Mu Delta has as its mission, 
        to provide a positive fraternity experience for today's college man, encouraging 
        high personal standards, morally, mentally, and spiritually, and, to help its members 
        live the ideals of our founders: democracy, brotherhood and service.
        </p>
        <p>@PhiMuDelta</p>
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
       <div id="AST" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black w3-bold w3-black">
        <h3 class="w3-animate-left">Alpha Sigma Tau</h3>
        <p>For more than 115 years,
            Alpha Sigma Tau has empowered women to excel in life.
            The Sorority invests in women by instilling the skills
            necessary to navigate life, and inspires members to
            enrich their own lives and the lives of others.</p>
        <p>@alphasigmatau</p>
    </div>
    <div id="SK" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black">
        <h3 class="w3-animate-top">Sigma Kappa</h3>
        <p>The purpose of Sigma Kappa Sorority
            is to provide women lifelong opportunities and support
            for social, intellectual and spiritual development
            by bringing women together to positively impact our
            communities.
        </p>
        <p>SigmaKappa</p>
    </div>
    <div id="SSS" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black w3-bold">
        <h3 class="w3-animate-top">Sigma Sigma Sigma</h3>
        <p>Sigma Sigma Sigma was founded by a group of eight women on
            April 20, 1898 in Farmville, Virginia. Margaret Lee Batten,
            Louise Marie Davis, Martha Trent Featherston, Isabella Merrick,
            Sallie Jackson Michie, Lelia Scott, Elizabeth Watkins and
            Lucy Wright set out to establish a sisterhood based on the
            bond of friendship. Founded at the State Female Normal School
            (now Longwood University), Tri Sigma became part of the group of
            sororities known as the “Farmville Four” – four Greek letter sororities
            established at the State Female Normal School between 1898 and 1901.
            The Charter of Incorporation was granted by the Commonwealth of Virginia
            on February 12, 1903, and Tri Sigma adopted its first constitution in April 1903.
        </p>
        <p>@trisigma</p>
    </div>
    <div id="ZTA" style="display:none" class="tabContent w3-panel w3-grey w3-margin-left w3-margin-right w3-leftbar w3-border-black w3-bold">
        <h3 class="w3-animate-right">Zeta Tau Alpha</h3>
        <p >To make a difference in the lives of our members
            by developing the potential of each individual
            through innovative programming, which emphasizes
            leadership development, service to others, academic
            achievement and continued personal growth for women,
            with a commitment to friendship and the future based
            on the sisterhood, values and traditions of the past.</p>
        <p>@ZTAFraternity</p>
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
