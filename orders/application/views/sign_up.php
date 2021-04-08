<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <!--Boostrap css file is linked before the custom css file to overwrite the default properties of the bootstrap file-->
  <!--Bootsrap css file-->
  <link rel="stylesheet" href="../../assets/grocery_crud/css/added_css/bootstrap.min.css" type="text/css"/>
  <link rel="stylesheet" type="text/css" href="../../assets/grocery_crud/css/added_css/style.css?v=2"/> 
  <link rel="stylesheet" type="text/css" href="../../assets/grocery_crud/css/added_css/partials/_variables.css?v=2"/> 
  <link rel="stylesheet" type="text/css" href="../../assets/grocery_crud/css/added_css/partials/_global.css?v=2"/> 
  <style>
   .signup-form-form{ 
     margin-left: 20%; 
   }

  input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type=submit]:hover {
  background-color: #45a049;
}

.signup-form{ 
  margin-top: 3%; 
  margin-left: 15%; 
}

.title > h2 { 
  margin-top: 5%;  
  margin-left: 45%; 
  margin-bottom: 5%; 
  font: bold; 
}
.border {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  padding-top: 0px;
}

#apple-one > img {
    width: 10%; 
    margin-top: 0%;
    margin-left: 75%; 
    margin-bottom: -43%;
  }
#message{
  margin-left: 35%; 

}
</style>
</head>
  <body>

  <textarea id="home" cols="0" rows="0">Home.</textarea>
  <textarea id="orders" cols="0" rows="0">Orders.</textarea>
  <textarea id="items" cols="0" rows="0">Items.</textarea>
  <textarea id="customers" cols="0" rows="0">Customers.</textarea>
  <textarea id="orderline" cols="0" rows="0">OrderLine.</textarea>
  <textarea id="apple-variety" cols="0" rows="0">Apple Variety.</textarea>
  <textarea id="trees" cols="0" rows="0">Trees.</textarea>
  <textarea id="orchard" cols="0" rows="0">Orchard</textarea>
  <textarea id="trees-planted" cols="0" rows="0">Trees Planted.</textarea>
  <textarea id="sign-up" cols="0" rows="0">Sign up</textarea>
  <textarea id="login" cols="0" rows="0">Log in</textarea>
  <textarea id="logout" cols="0" rows="0">Log Out</textarea>
  <textarea id="users" cols="0" rows="0">Users</textarea>

  <textarea id="phoneNumber" cols="0" rows="0">(+44)07634212074</textarea>

  <textarea id="fullname" cols="0" rows="0">Full name</textarea>
  <textarea id="email" cols="0" rows="0">Email</textarea>
  <textarea id="username" cols="0" rows="0">Username</textarea>
  <textarea id="password" cols="0" rows="0">Password</textarea>
  <textarea id="repeatPassword" cols="0" rows="0">Repeat Password</textarea>

  <div class="title"> 
    <h2>Sign Up</h2> 
 </div> 
    <div class="border">
      <section class="signup-form"> 
        <div class="signup-form-form">
          <form action="signUpInc" method="post"> 
              <input onclick="fullName()" type="text" name="name" placeholder="Full name..."> 
              <input onclick="emails()" type="text" name="email" placeholder="Email..."> 
              <input onclick="username()" type="text" name="uid" placeholder="Username..."> 
              <input onclick="password()" type="password" name="pwd" placeholder="Password..."> 
              <input onclick="repeatPassword()" type="password" name="pwdrepeat" placeholder="Repeat Password..."> 
              <button onclick="signUp()" type="submit" name="submit">Sign Up</button> 
          </form> 
        </div>
        <div id="message"> 
         <?php 
            if(isset($_GET["error"])){
              if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields!</p>";
              }
              else if($_GET["error"] == "invalidUid"){
                echo"<p>Choose a proper username</p>"; 
              }
              else if($_GET["error"] == "invalidemail"){
                echo"<p>Choose a proper email</p>"; 
              }
              else if($_GET["error"] == "passwordsdontmatch"){
                echo"<p>Passwords doesnt match!</p>"; 
              }
              else if($_GET["error"] == "stmtfailed"){
                echo"<p>Something went wrong, please try again!</p>"; 
              }
              else if($_GET["error"] == "usernametaken"){
                echo"<p>Username already taken!</p>"; 
              }
              else if($_GET["error"] == "none"){
                echo"<p>You have signed up!!!</p>"; 
              }
            }
          ?> 
      </div>
       </section> 
     </div>
     

  <!-- Links To --> 
  <section class="links"> 
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-6 col-lg-12 col-md-12">
                <a href="http://localhost:8080/orders/index.php">
                 <div class="apple-link">
                  <div id="apple-one">
                    <img src="../../assets/images/apple.png" alt="link-1">
                   </div>
                 </div>
                </a>
              </div>
              <div class="col-xl-6 col-lg-12 col-md-12">
                <div class="details">
                  <div class="d-flex flex-row call-area"> 
                    <span><i class="fas fa-mobile fa-3x"></i></span>
                    <div class="call-now">
                      <a href="#" class="text-uppercase h4 font-Cormorant"> Call Now </a>
                      <span class="font-Cormorant py-2">(+44)07634212074</span>
                      <input onclick="phoneNumber()" type="button" value="Speak">
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </section>

        <script>
            document.getElementById('home').style.display = "none";
            document.getElementById('orders').style.display = "none";
            document.getElementById('items').style.display = "none";
            document.getElementById('customers').style.display = "none";
            document.getElementById('orderline').style.display = "none";
            document.getElementById('apple-variety').style.display = "none";
            document.getElementById('trees').style.display = "none";
            document.getElementById('orchard').style.display = "none";
            document.getElementById('trees-planted').style.display = "none";
            document.getElementById('sign-up').style.display = "none";
            document.getElementById('login').style.display = "none";
            document.getElementById('logout').style.display = "none";
            document.getElementById('users').style.display = "none";
          
            document.getElementById('phoneNumber').style.display = "none";
            document.getElementById('fullname').style.display = "none";
            document.getElementById('email').style.display = "none";
            document.getElementById('username').style.display = "none";
            document.getElementById('password').style.display = "none";
            document.getElementById('repeatPassword').style.display = "none";
    </script> 

  <!--JQUERY js file (used to simply turn javascript code into useable one line functions) -->
  <script src="../../assets/grocery_crud/js/added_js/jquery.3.5.1.js"></script>
  <script src="../../assets/grocery_crud/js/added_js/popper.min.js"></script>
  <!--Bootstrap js file -->
  <script src="../../assets/grocery_crud/js/added_js/bootstrap.min.js"></script>

  <script type="text/javascript" src="https://code.responsivevoice.org/responsivevoice.js"></script>
  <script>
    document.getElementById('sign-up').style.display = "none";

    function signUp(){
      var text = document.getElementById('sign-up').value;
      responsiveVoice.speak(text);
    }
   </script> 
   <script>
        window.onload = function(){
            if(window.location.href == "http://localhost:8080/orders/index.php/main/signUpPage"){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }

            if(window.location.href == "http://localhost:8080/orders/index.php/main/signUpPage#"){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }
          
          if(window.location.href == "http://localhost:8080/orders/index.php/main/signUpPage?error=emptyinput"){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }
          
          if(window.location.href == "http://localhost:8080/orders/index.php/main/signUpPage?error=invalidUid"){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }
          
          if(window.location.href == "http://localhost:8080/orders/index.php/main/signUpPage?error=invalidemail"){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }
          
          if(window.location.href == "http://localhost:8080/orders/index.php/main/signUpPage?error=passwordsdontmatch"){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }
          
          if(window.location.href == "http://localhost:8080/orders/index.php/main/signUpPage?error=stmtfailed"){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }
          
          if(window.location.href == ""){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }
          
          if(window.location.href == "http://localhost:8080/orders/index.php/main/signUpPage?error=usernametaken"){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }
          
          if(window.location.href == "http://localhost:8080/orders/index.php/main/signUpPage?error=none"){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }
          
            if(window.location.href == "http://localhost:8080/orders/index.php/main/signUpPage?error=emptyinput#"){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }
          
          if(window.location.href == "http://localhost:8080/orders/index.php/main/signUpPage?error=invalidUid#"){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }
          
          if(window.location.href == "http://localhost:8080/orders/index.php/main/signUpPage?error=invalidemail#"){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }
          
          if(window.location.href == "http://localhost:8080/orders/index.php/main/signUpPage?error=passwordsdontmatch#"){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }
          
          if(window.location.href == "http://localhost:8080/orders/index.php/main/signUpPage?error=stmtfailed#"){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }
          
          if(window.location.href == ""){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }
          
          if(window.location.href == "http://localhost:8080/orders/index.php/main/signUpPage?error=usernametaken#"){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }
          
          if(window.location.href == "http://localhost:8080/orders/index.php/main/signUpPage?error=none#"){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
            }
          }

    </script> 
 </body>
</html>








