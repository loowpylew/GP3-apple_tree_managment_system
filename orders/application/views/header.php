
<?php
   session_start();   
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      #image-zero > img {
       margin-top: 5%; 
       margin-bottom: -100%; 
       margin-left: -1445%;
     }
     #image-one > img {
       margin-top: 5%; 
       margin-bottom: -100%; 
       margin-left: -1445%;
     }
    #image-two > img {
       margin-top: 5%; 
       margin-bottom: -100%; 
       margin-left: -1445%;
    }
    #image-three > img {
       margin-top: 5%; 
       margin-bottom: -100%; 
       margin-left: -1445%;
     }
    #image-four > img {
       margin-top: 5%; 
       margin-bottom: -100%; 
       margin-left: -1445%;
    }
     .navbar-toggler{
      margin-top: -25%;
      margin-left: -1340%;
    }
    </style> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap css file is linked before the custom css file to overwrite the default properties of the bootsrap file-->
    <!--Bootsrap css file-->
    <link rel="stylesheet" href="assets/grocery_crud/css/added_css/bootstrap.min.css" type="text/css" /> 
    <!--font awesome items-->
    <link rel="stylesheet" type="text/css" href="assets/grocery_crud/css/added_css/all.min.css?v=2"/> 
    <!--Custom css file-->
    <link rel="stylesheet" type="text/css" href="assets/grocery_crud/css/added_css/style.css?v=2"/>
    <link rel="stylesheet" type="text/css" href="assets/grocery_crud/css/added_css/partials/_variables.css?v=2"/> 
    <link rel="stylesheet" type="text/css" href="assets/grocery_crud/css/added_css/partials/_global.css?v=2"/>
  </head>
  <body>
  <header class="header_area">
    <div class="main-menu">
      <div class="navbar-static-top">
        <div class="collapse" id="navbarToggleExternalContent">
          <div class="bg-dark p-4">
            <div class="navbar-nav">
                  <?php
                    //if exists, user is already logged in 
                   
                  
                    if (isset($_SESSION["usersuid"])){
                      if($_SESSION["usersuid"] === "HeadGrower"){  
                         echo '<li><a onclick="home()" href="'.site_url().'" class="nav-item nav-link">Home<a/></li>';
                         echo '<li><a onclick="appleVariety()" href="'.site_url().'/main/applevariety" class="nav-item nav-link">Apple Variety<a/></li>';
                         echo '<li><a onclick="trees()" href="'.site_url().'/main/trees" class="nav-item nav-link">Trees<a/></li>';
                         echo '<li><a onclick="orchard()" href="'.site_url().'/main/orchard" class="nav-item nav-link">Orchard<a/></li>';
                         echo '<li><a onclick="treesPlanted()" href="'.site_url().'/main/treesPlanted" class="nav-item nav-link">TreesPlanted<a/></li>';
                         echo '<li><a onclick="orders()" href="'.site_url().'/main/orders" class="nav-item nav-link">Orders<a/></li>';
                         echo '<li><a onclick="users()" href="'.site_url().'/main/users" class="nav-item nav-link">Users<a/></li>';
                         echo '<li><a onclick="logOut()" href="'.site_url().'/main/logOut" class="nav-item nav-link">Log Out<a/></li>';
                        
                       }
                      else if ($_SESSION["usersuid"] === "Growers"){
                        echo '<li><a onclick="home()" href="'.site_url().'" class="nav-item nav-link">Home<a/></li>';
                        echo '<li><a onclick="appleVariety()" href="'.site_url().'/main/applevariety" class="nav-item nav-link">Apple Variety<a/></li>';
                        echo '<li><a onclick="trees()" href="'.site_url().'/main/trees" class="nav-item nav-link">Trees<a/></li>';
                        echo '<li><a onclick="orchard()" href="'.site_url().'/main/orchard" class="nav-item nav-link">Orchard<a/></li>';
                        echo '<li><a onclick="treesPlanted()" href="'.site_url().'/main/treesPlanted" class="nav-item nav-link">TreesPlanted<a/></li>';
                        echo '<li><a onclick="orders()" href="'.site_url().'/main/orders" class="nav-item nav-link">Orders<a/></li>';
                        echo '<li><a onclick="logOut()" href="'.site_url().'/main/logOut" class="nav-item nav-link">Log Out<a/></li>';
                      
                      }
                      else{
                        echo '<li><a onclick="home()" href="'.site_url().'" class="nav-item nav-link">Home<a/></li>';
                        echo '<li><a onclick="appleVariety()" href="'.site_url().'/main/applevariety" class="nav-item nav-link">Apple Variety<a/></li>';
                        echo '<li><a onclick="trees()" href="'.site_url().'/main/trees" class="nav-item nav-link">Trees<a/></li>';
                        echo '<li><a onclick="orchard()" href="'.site_url().'/main/orchard" class="nav-item nav-link">Orchard<a/></li>';
                        echo '<li><a onclick="logOut()" href="'.site_url().'/main/logOut" class="nav-item nav-link">Log Out<a/></li>';
                       }
                      }
                      else if(empty($_SESSION['usersuid'])){
                        echo '<li><a onclick="home()" href="'.site_url().'" class="nav-item nav-link">Home<a/></li>';
                        echo '<li><a onclick="signUp()" href="'.site_url().'/main/signUpPage" class="nav-item nav-link">Sign Up<a/></li>';
                        echo '<li><a onclick="login()" href="'.site_url().'/main/loginPage" class="nav-item nav-link">Login<a/></li>';
                       
                      }
                      

                                        

                      
                  
                      /*<li><a onclick="home()" class="nav-item nav-link active" href='<?php echo site_url('')?>'>Home<span class="sr-only">(current)</span></a></li>
                      <li><a onclick="appleVariety()" class="nav-item nav-link" href='<?php echo site_url('main/applevariety')?>'>Apple Variety</a></li>
                      <li><a onclick="trees()" class="nav-item nav-link" href='<?php echo site_url('main/trees')?>'>Trees</a></li>
                      <li><a onclick="orchard()" class="nav-item nav-link" href='<?php echo site_url('main/orchard')?>'>Orchard</a></li>
                      <li><a onclick="treesPlanted()" class="nav-item nav-link" href='<?php echo site_url('main/treesPlanted')?>'>Trees Planted</a></li>
                      <li><a class="nav-item nav-link" href='<?php echo site_url('main/orders')?>'>Orders</a></li>*/
                    /*else if(  isset($_SESSION["usersuid"]) !== "HeadGrower" and isset($_SESSION["usersuid"]) !== "Growers" and isset($_SESSION["usersuid"]) ){ 
                      echo '<li><a onclick="home()" href="'.site_url().'" class="nav-item nav-link">Home<a/></li>';
                      echo '<li><a href="'.site_url().'/main/logOut" class="nav-item nav-link">Log Out<a/></li>';
                    }*/
                    
                  
                    ?> 
            </div>
          </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
          <a class="navbar-brand" href="#">
            <div id="image-zero"> 
               <img src="assets/images/Apple_tree.jpg" width="100" height="100" class="d-inline-block align-top" alt="logo" loading="lazy">
            </div> 
            <div id="image-one">
              <img  src="../../assets/images/Apple_tree.jpg" width="100" height="100" class="d-inline-block align-top one" alt="logo" loading="lazy"/>
            </div> 
            <div id="image-two">
              <img  src="../../../assets/images/Apple_tree.jpg" width="100" height="100" class="d-inline-block align-top" alt="logo" loading="lazy"/>
            </div>
            <div id="image-three">
              <img  src="../../../../assets/images/Apple_tree.jpg" width="100" height="100" class="d-inline-block align-top" alt="logo" loading="lazy"/>
            </div>
            <div id="image-four">
              <img  src="../../../../assets/images/Apple_tree.jpg" width="100" height="100" class="d-inline-block align-top" alt="logo" loading="lazy"/>
            </div> 

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            
              <span class="navbar-toggler-icon"></span>
            </button>
          </a>
        </nav>
      </div>
    </div>
  </header>
  <script type="text/javascript" src="https://code.responsivevoice.org/responsivevoice.js"></script>
  <script>

            function home(){
              var text = document.getElementById('home').value;
              responsiveVoice.speak(text);
            }
            function orders(){
              var text = document.getElementById('orders').value;
              responsiveVoice.speak(text);
            }
            function items(){
              var text = document.getElementById('items').value;
              responsiveVoice.speak(text);
            }
            function customers(){
              var text = document.getElementById('customers').value;
              responsiveVoice.speak(text);
            }
            function orderline(){
              var text = document.getElementById('orderline').value;
              responsiveVoice.speak(text);
            }
            function treesPara(){
              var text = document.getElementById('trees-Para').value;
              responsiveVoice.speak(text);
            }
            function appleVariety(){
              var text = document.getElementById('apple-variety').value;
              responsiveVoice.speak(text);
            }
            function trees(){
              var text = document.getElementById('trees').value;
              responsiveVoice.speak(text);
            }
            function orchard(){
              var text = document.getElementById('orchard').value;
              responsiveVoice.speak(text);
            }
            function treesPlanted(){
              var text = document.getElementById('trees-planted').value;
              responsiveVoice.speak(text);
            }
            function signUp(){
              var text = document.getElementById('sign-up').value;
              responsiveVoice.speak(text);
            }
            function login(){
              var text = document.getElementById('login').value;
              responsiveVoice.speak(text);
            }
            function logOut(){
              var text = document.getElementById('logout').value;
              responsiveVoice.speak(text);
            }
            function users(){
              var text = document.getElementById('users').value;
              responsiveVoice.speak(text);
            }


            function speakTextAbout(){
              var text = document.getElementById('txt').value;
              responsiveVoice.speak(text);
            }
            function speakTextHelp(){
              var text = document.getElementById('Help').value;
              responsiveVoice.speak(text);
            }
            function speakTextUserGuide(){
              var text = document.getElementById('User_Guide').value;
              responsiveVoice.speak(text);
            }
            function speakTextContactInfo(){
              var text = document.getElementById('Contact_information').value;
              responsiveVoice.speak(text);
            }
            function speakTextVarieties(){
              var text = document.getElementById('varieties').value;
              responsiveVoice.speak(text);
            }
            function speakTextRefund(){
              var text = document.getElementById('Refunds').value;
              responsiveVoice.speak(text);
            }
            function speakTextAffectedTimes(){
              var text = document.getElementById('delivery_times').value;
              responsiveVoice.speak(text);
            }
            function speakTextSafeOrders(){
              var text = document.getElementById('safe_orders').value;
              responsiveVoice.speak(text);
            }
            function speakTextReduceContact(){
              var text = document.getElementById('reduce_contact').value;
              responsiveVoice.speak(text);
            }

            function speakTextDeliveries(){
              var text = document.getElementById('deliveries').value;
              responsiveVoice.speak(text);
            }
            function speakTextReturns(){
              var text = document.getElementById('returns').value;
              responsiveVoice.speak(text);
            }

            function introduction(){
              var text = document.getElementById('introduction').value;
              responsiveVoice.speak(text);
            }
            function jobs2DoNow(){
              var text = document.getElementById('jobs2DoNow').value;
              responsiveVoice.speak(text);
            }
            function grow(){
              var text = document.getElementById('grow').value;
              responsiveVoice.speak(text);
            }
            function feeding(){
              var text = document.getElementById('feeding').value;
              responsiveVoice.speak(text);
            }
            function prunning(){
              var text = document.getElementById('pruning').value;
              responsiveVoice.speak(text);
            }
            function plant(){
              var text = document.getElementById('plant').value;
              responsiveVoice.speak(text);
            }

            function ambassy(){
              var text = document.getElementById('ambassy').value;
              responsiveVoice.speak(text);
            }
            function blenheimOrange(){
              var text = document.getElementById('blenheim-Orange').value;
              responsiveVoice.speak(text);
            }
            function bramley(){
              var text = document.getElementById('bramley').value;
              responsiveVoice.speak(text);
            }
            function phoneNumber(){
              var text = document.getElementById('phoneNumber').value;
              responsiveVoice.speak(text);
            }

            function enterQuestion(){
              var text = document.getElementById('enterQuestion').value;
              responsiveVoice.speak(text);
            }
            function appleVarietyPara(){
              var text = document.getElementById('apple-variety-Para').value;
              responsiveVoice.speak(text);
            }
            function treesPara(){
              var text = document.getElementById('trees-Para').value;
              responsiveVoice.speak(text);
            }
            function orchardPara(){
              var text = document.getElementById('orchard-Para').value;
              responsiveVoice.speak(text);
            }
            function treesPlantedPara(){
              var text = document.getElementById('trees-planted-Para').value;
              responsiveVoice.speak(text);
            }
            function fullName(){
              var text = document.getElementById('fullname').value;
              responsiveVoice.speak(text);
            }
            function emails(){
              var text = document.getElementById('email').value;
              responsiveVoice.speak(text);
            }
            function username(){
              var text = document.getElementById('username').value;
              responsiveVoice.speak(text);
            }
            function password(){
              var text = document.getElementById('password').value;
              responsiveVoice.speak(text);
            }
            function repeatPassword(){
              var text = document.getElementById('repeatPassword').value;
              responsiveVoice.speak(text);
            }
            function userPwd(){
              var text = document.getElementById('username-email').value;
              responsiveVoice.speak(text);
            }
    

            
    </script>
    <!--JQUERY js file (used to simply turn javascript code into useable one line functions) -->
    <script src="assets/grocery_crud/js/added_js/jquery.3.5.1.js"></script>
    <script src="assets/grocery_crud/js/added_js/popper.min.js"></script>
    <!--Bootstrap js file -->
    <script src="assets/grocery_crud/js/added_js/bootstrap.min.js"></script>
    
  </body>
</html>