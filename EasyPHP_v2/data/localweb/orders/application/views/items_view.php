<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!--Boostrap css file is linked before the custom css file to overwrite the default properties of the bootsrap file-->
    <!--Bootsrap css file-->
    <link rel="stylesheet" href="../../assets/grocery_crud/css/added_css/bootstrap.min.css" type="text/css" /> 
    <!--font awesome items-->
    <!--Custom css file-->
    <link rel="stylesheet" type="text/css" href="../../assets/grocery_crud/css/added_css/style.css?v=2"/>
    <link rel="stylesheet" type="text/css" href="../../assets/grocery_crud/css/added_css/partials/_variables.css?v=2"/> 
    <link rel="stylesheet" type="text/css" href="../../assets/grocery_crud/css/added_css/partials/_global.css?v=2"/> 
	<style>
		h1 { text-align: center; 	font-family: Calibri; }
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
<header class="header_area">
    <div class="main-menu">
      <div class="navbar-static-top">
        <div class="collapse" id="navbarToggleExternalContent">
          <div class="bg-dark p-4">
            <div class="navbar-nav">
            <li><a onclick="home()" class="nav-item nav-link active" href='<?php echo site_url('')?>'>Home<span class="sr-only">(current)</span></a></li>
                  <li><a onclick="orders()" class="nav-item nav-link" href='<?php echo site_url('main/orders')?>'>Orders</a></li>
                  <li><a onclick="items()" class="nav-item nav-link" href='<?php echo site_url('main/items')?>'>Items</a></li>
                  <li><a onclick="customers()" class="nav-item nav-link" href='<?php echo site_url('main/customers')?>'>Customers</a></li>
                  <li><a onclick="orderline()" class="nav-item nav-link" href='<?php echo site_url('main/orderline')?>'>OrderLine</a></li>
                  <li><a onclick="suppliers()" class="nav-item nav-link" href='<?php echo site_url('main/suppliers')?>'>Suppliers</a></li>
            </div>
          </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
          <a class="navbar-brand" href="#">
            <img src="../../assets/images/Apple_tree.jpg" width="100" height="100" class="d-inline-block align-top" alt="logo" loading="lazy">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            
              <span class="navbar-toggler-icon"></span>
            </button>
          </a>
        </nav>
      </div>
    </div>
  </header>

  <textarea id="home" cols="0" rows="0">Home.</textarea>
  <textarea id="orders" cols="0" rows="0">Orders.</textarea>
  <textarea id="items" cols="0" rows="0">Items.</textarea>
  <textarea id="customers" cols="0" rows="0">Customers.</textarea>
  <textarea id="orderline" cols="0" rows="0">OrderLine.</textarea>
  <textarea id="suppliers" cols="0" rows="0">Suppliers.</textarea>

<h1>Items</h1>
    <div>
		<?php echo $output; ?>
    </div>
    <script type="text/javascript" src="https://code.responsivevoice.org/responsivevoice.js"></script>
    <script> 
             document.getElementById('home').style.display = "none";
             document.getElementById('orders').style.display = "none";
             document.getElementById('items').style.display = "none";
             document.getElementById('customers').style.display = "none";
             document.getElementById('orderline').style.display = "none";
             document.getElementById('suppliers').style.display = "none";

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
            function suppliers(){
              var text = document.getElementById('suppliers').value;
              responsiveVoice.speak(text);
            }
    </script> 
    <script src="../../assets/grocery_crud/js/added_js/bootstrap.min.js"></script>
</body>
</html>
