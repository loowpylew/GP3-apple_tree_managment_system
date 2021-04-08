<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!--Boostrap css file is linked before the custom css file to overwrite the default properties of the bootstrap file-->
  <!--Bootsrap css file-->
  <link rel="stylesheet" href="../../assets/grocery_crud/css/added_css/bootstrap.min.css" type="text/css"/>
  <link rel="stylesheet" href="../../../assets/grocery_crud/css/added_css/bootstrap.min.css" type="text/css"/> 
  <link rel="stylesheet" href="../../../../assets/grocery_crud/css/added_css/bootstrap.min.css" type="text/css"/> 
  <!--font awesome items-->
  <!--Custom css file-->
  <link rel="stylesheet" type="text/css" href="../../assets/grocery_crud/css/added_css/style.css?v=2"/>
  <link rel="stylesheet" type="text/css" href="../../../assets/grocery_crud/css/added_css/style.css?v=2"/>
  <link rel="stylesheet" type="text/css" href="../../../../assets/grocery_crud/css/added_css/style.css?v=2"/>
  
  <link rel="stylesheet" type="text/css" href="../../assets/grocery_crud/css/added_css/partials/_variables.css?v=2"/> 
  <link rel="stylesheet" type="text/css" href="../../assets/grocery_crud/css/added_css/partials/_global.css?v=2"/> 
	<style>
		h1 { text-align: center; 	font-family: Calibri; }

    .apple-link > img {
    height: 63px; 
    width: 10%; 
    margin-top: 40%;
    margin-left: 80%; 
    margin-bottom: 10%;
  }
   .call-now {
    margin-top: 21% ; 
    margin-bottom: 10%; 
    margin-left: 1%
   }
   #apple-variety{ 
     margin-top: 5%;
   }
   #apple-variety> h1{
    font-size: 50px;  
    text-transform: uppercase;
    font-weight: bold;
    
   }
   #para { 
    margin-top: 5%; 
    margin-left: 10%;
   }
   #apple-variety-dbtable {
     margin-top: 5%; 
   }
  #apple-one > img {
    width: 10%; 
    margin-top: 38%;
    margin-left: 80%; 
    margin-bottom: 0%;
  }
  #apple-two > img {
    width: 10%; 
    margin-top: 38%;
    margin-left: 80%; 
    margin-bottom: 0%;
  }
  #apple-three > img {
    width: 10%; 
    margin-top: 38%;
    margin-left: 80%; 
    margin-bottom: 0%;
  }
  .navbar-toggler{
    margin-top: -25%;
    margin-left: -1340%;
  }

	</style>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>


  <textarea id="home" cols="0" rows="0">Home</textarea>
  <textarea id="orders" cols="0" rows="0">Orders</textarea>
  <textarea id="items" cols="0" rows="0">Items</textarea>
  <textarea id="customers" cols="0" rows="0">Customers</textarea>
  <textarea id="orderline" cols="0" rows="0">OrderLine</textarea>
  <textarea id="apple-variety" cols="0" rows="0">Apple Variety</textarea>
  <textarea id="trees" cols="0" rows="0">Trees</textarea>
  <textarea id="orchard" cols="0" rows="0">Orchard</textarea>
  <textarea id="trees-planted" cols="0" rows="0">Trees Planted</textarea>
  <textarea id="sign-up" cols="0" rows="0">Sign up</textarea>
  <textarea id="login" cols="0" rows="0">Log in</textarea>
  <textarea id="logout" cols="0" rows="0">Log Out</textarea>
  <textarea id="users" cols="0" rows="0">Users</textarea>
 
  <textarea id="phoneNumber" cols="0" rows="0">(+44)07634212074</textarea>

                    
  <textarea id="apple-variety-Para" cols="0" rows="0">Here in the 'Apple Variety' page, you can enter details such as assigning a unique ID to a variety and assign a fruit which the variety produces with 
    its relevant name and colour. You can add a new variety to the list via the 'Add variety' button on the top left of the orders table, you can view individual details about 
    a particular variety via the 'view' button, you can change details about a particular variety via the 'edit' button and you can delete details about a particular variety 
    by simply clicking on the 'delete' button </textarea>

  <div id="apple-variety"> 
   <h1>Apple Variety</h1>
  </div> 

<div id="para"> 
<p>Here in the 'Apple Variety' page, you can enter details such as assigning a unique ID to a variety and assign the fruit which the variety produces with its relevant name and colour. You can add a new variety 
   to the list <br> via the 'Add variety' button on the top left of the orders table, you can view individual details about a particular variety via the 'view' button, you can change details about 
   a particular variety via the 'edit' button and <br> you can delete details about a particular variety by simply clicking on the 'delete' button </textarea><input onclick="appleVarietyPara()" type="button" value="Speak"></p></div> 

    <div id="apple-variety-dbtable">
		<?php echo $output; ?>
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
                   <div id="apple-two">
                    <img src="../../../assets/images/apple.png" alt="link-1">
                   </div>
                   <div id="apple-three">
                    <img src="../../../../assets/images/apple.png" alt="link-1">
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
            document.getElementById('apple-variety-Para').style.display = "none";
            
    </script> 
    <script src="../../assets/grocery_crud/js/added_js/bootstrap.min.js"></script>
    <script src="../../../assets/grocery_crud/js/added_js/bootstrap.min.js"></script>
    <script src="../../../../assets/grocery_crud/js/added_js/bootstrap.min.js"></script>
    <script src="../../../../assets/grocery_crud/js/added_js/apple_variety_https.js"></script> 
    <script>
        window.onload = function(){
            if(window.location.href == "http://localhost:8080/orders/index.php/main/applevariety"){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
              document.getElementById('apple-two').style.display = "none";
              document.getElementById('apple-three').style.display = "none";
            }
            if(window.location.href == "http://localhost:8080/orders/index.php/main/applevariety/add"){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-one').style.display = "none"; 
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
              document.getElementById('apple-one').style.display = "none";
              document.getElementById('apple-three').style.display = "none";
            }
            
            /////////////////////////////////////////////////////////////////////////////////////////////
            if(location.href == "http://localhost:8080/orders/index.php/main/applevariety#"){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-two').style.display = "none";
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
              document.getElementById('apple-two').style.display = "none";
              document.getElementById('apple-three').style.display = "none";
            }
            if(window.location.href == "http://localhost:8080/orders/index.php/main/applevariety/add#"){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-one').style.display = "none"; 
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
              document.getElementById('apple-one').style.display = "none";
              document.getElementById('apple-three').style.display = "none";
            }
            if(window.location.href == "http://localhost:8080/orders/index.php/main/applevariety/success"){
              document.getElementById('image-zero').style.display = "none";
              document.getElementById('image-one').style.display = "none"; 
              document.getElementById('image-three').style.display = "none";
              document.getElementById('image-four').style.display = "none";
              document.getElementById('apple-one').style.display = "none";
              document.getElementById('apple-three').style.display = "none";
            }
              
        }
    </script> 
</body>
</html>
