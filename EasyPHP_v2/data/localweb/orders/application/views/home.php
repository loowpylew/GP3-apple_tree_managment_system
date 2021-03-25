<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    * {
       box-sizing: border-box;
    }
    #myInput {
    background-image: url("/css/searchicon.png");
    background-position: 10px 10px;
    background-repeat: no-repeat;
    width: 100%;
    font-size: 16px;
    padding: 12px 20px 12px 40px;
    border: 1px solid #ddd;
    margin-bottom: 12px;
  }
  #myTable {
    border-collapse: collapse;
    width: 100%;
    border: 1px solid #ddd;
    font-size: 18px;
  }
  #myTable th, #myTable td {
    text-align: left;
    padding: 12px;
  }
  #myTable tr {
    border-bottom: 1px solid #ddd;
  }
  #myTable tr.header, #myTable tr:hover {
    background-color: #f1f1f1;
  }
  .media > img {
    width: 10%; 
    height: 10%; 
  }
  .Further_instructions {
    margin-top: 5%; 
}
  .Grow_image > img {
    width: 30%; 
    height: 30%; 
    margin-left: 70%; 
    margin-top: -28%;
 }
 .Jobs2DoTable {
   margin-top: 5%; 
 }

</style>
  </head>
  <body>
  <!-- =========================== Start Header Area =========================== -->
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
            <img src="assets/images/Apple_tree.jpg" width="100" height="100" class="d-inline-block align-top" alt="logo" loading="lazy">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            
              <span class="navbar-toggler-icon"></span>
            </button>
          </a>
        </nav>
      </div>
    </div>
  </header>
    <!-- =========================== End Header Area =========================== -->

    <!-- =========================== Start Main Area =========================== -->
    <main class="site-main">      
      <!-- =========================== Start Banner Area =========================== -->
      <section class="site-banner">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-12 site-title"> <!-- col-lg specifies compatabilty with desktop screens. Bootstrap allows for maxium of 12 column width size for text, here we are using 6. md is for medium devices, the 12 is used to componsate for the change in width of the screen -->
              <h1 class="title-text text-uppercase">HATS APPLE TREE SUPPLIERS</h1>
              <h2 class="title-text">Every apple helps</h2>
              <div class="site-buttons">
                <div class="d-flex flex-row flex-wrap"><!--Bootstrapclass used to automatically adjust position of button when screen of browser is changed in size (moves to the next line if screen is squashed-->
                  <button onclick="speakTextHelp()" type="button" class="btn button primary-button mr-4 text-uppercase" data-toggle="popover">HELP PROMPT</button>
                   <textarea id="Help" cols="0" rows="0">Help Prompt</textarea>

    
                    <button onfocus="speakTextUserGuide()" type ="button" class ="btn button secondary-button text-uppercase" data-toggle="popover2">User Guide</button>
                
                  
                    <textarea id="User_Guide" cols="0" rows="0">User Guide</textarea>
                </div>
              </div> 
            </div>
            <div class="col-lg-6 col-md-12 site-title">
              <img src="assets/images/Apple_tree_home.jpg" alt="banner-img" class="img-fluid">
            </div>
          </div>
        </div>
      </section>

      <textarea id="home" cols="0" rows="0">Home.</textarea>
      <textarea id="orders" cols="0" rows="0">Orders.</textarea>
      <textarea id="items" cols="0" rows="0">Items.</textarea>
      <textarea id="customers" cols="0" rows="0">Customers.</textarea>
      <textarea id="orderline" cols="0" rows="0">OrderLine.</textarea>
      <textarea id="suppliers" cols="0" rows="0">Suppliers.</textarea>

      <textarea id="txt" cols="0" rows="0"  >What we are about? Here at Hatfields Tree suppliers,
       we offer a wide of range of tree varieties such as Plum, 
       European peach, cherry and many more. There is something special about picking a piece of fruit off a tree in your own garden. 
                                  Some trees can grow to take up a lot of space while others can be kept quite small to adapt to your garden size. 
                                  If you live in an urban jungle with little space on your patio or a home in suburbia with plenty of surrounding space in your backyard - 
                                  there is always a way to create a thriving outdoor space full of fruitful plants, shrubs, and trees.
                                  Apple trees require pollination. While trees requiring a pollinator may seem like additional work, it’s really just a strength in numbers game. 
                                  Big or small orchard–here are tips on the best low-maintenance apple trees to plant in your garden or fill your small outdoor space with. </textarea>
        
      <textarea id="Contact_information" cols="0" rows="0">You can call us directly on 076342212074 or you can email us at hatsappletreesuppliers@gmail.com</textarea>
      <textarea id="varieties" cols="0" rows="0">We offer: Ambassy, Blenheim Orange, Braeburn, Bramley, Decio, Golden Noble, Kidds, Underleaf</textarea>
      <textarea id="Refunds" cols="0" rows="0"> To request a refund, you can contact us via mobile/telephone or you can email us so that we can process your request or offer an alternative.</textarea>
      <textarea id="delivery_times" cols="0" rows="0"> As the Coronavirus has spread, we’ve seen an increase in people shopping online. As a result, estimated delivery times for some items may be longer than usual at the moment.</textarea> 
      <textarea id="safe_orders" cols="0" rows="0"> According to the WHO (external link),
                                                    “The likelihood of an infected person contaminating commercial goods is low and the risk of catching the virus that
                                                     causes COVID-19 from a package that has been moved, travelled, and exposed to different conditions and temperature is also low.” 
                                                     You can find the latest information on COVID-19 on the information pages of the UK Government (external link)
                                                     and the World Health Organization(external link).</textarea>

      <textarea id="reduce_contact" cols="0" rows="0">Yes. HATS apple tree suppliers delivery associates and partners have been advised to reduce contact with customers, 
        this may include placing packages at the customer’s doorstep and stepping back. If an ID check is required,
        the driver will complete the check at a distance. You can also choose a safe place location where the driver can leave your package if you can’t answer the door.
        Drivers are asked to follow your delivery preference where possible. 
        You are able to set your delivery preference during checkout on the Review your order screen
        by clicking on Add delivery instructions and selecting your desired safe place option.</textarea>

      <textarea id="deliveries" cols="0" rows="0">HATS apple tree suppliers are a local branch so only deliver within mainland UK by default. Requests can be made to individuals outside mainland UK,
                                                  but will come with additional costs dependant on the location and total weight of items bought. </textarea>

      <textarea id="returns" cols="0" rows="0">Yes, you can continue to return items. 
                                               To return an item, please contact us via mobile/telphone or email so we can give you a step by step guide on how to return the item/items.</textarea>
      

     <textarea id="introduction" cols="0" rows="0">Introduction. Apples are probably the easiest tree fruit to grow and the most popular with gardeners.
                                                   You may be lucky enough to have one in your garden already, but if not, they are easy to establish.
                                                   There are thousands of different types of apples, but they broadly fall into two categories: dessert apples for eating,
                                                   and cookers, as the name suggest, for cooking. Some are dual-purpose, so suitable for both uses.</textarea>

      <textarea id="jobs2DoNow" cols="0" rows="0">Jobs to do now. Number 1, Feed plants, sprinkling on a balanced general fertiliser. Number 2, Weed and mulch around base of trees.
                                                  Number 3, Plant bare-root and container-grown trees. Months to plant are between January to March and months to harvest are from August 
                                                  to September. In November you can both plant and harvest.</textarea>

      <textarea id="grow" cols="0" rows="0">Growing. Apples are probably the easiest tree fruit to grow and the most popular with gardeners. You may be lucky enough to have one in your garden already, but if not,
                                            they are easy to establish. There are thousands of different types of apples, but they broadly fall into two categories: dessert apples for eating, and cookers,
                                            as the name suggest, for cooking. Some are dual-purpose, so suitable for both uses.</textarea>

      <textarea id="feeding" cols="0" rows="0">Feeding. In early spring, sprinkle a balanced general fertiliser (such as Growmore) around the base of the plant, following the manufacturer’s instructions.</textarea>

      <textarea id="pruning" cols="0" rows="0">Pruning. Apples should be pruned every year to get the best crop. Timing and method of pruning depends on the type of apple you are growing.</textarea>

      <textarea id="plant" cols="0" rows="0">Planting. If you don’t have an apple tree in your garden, planting one is a good investment, for there is nothing like eating the fresh fruit straight from the tree in autumn. It's generally recommended to buy named cultivars
                                             of apples from a reputable specialist nursery. They are supplied as young trees ready for planting. Sowing apples from their pips would just take too long, and just as children are not identical to their parents, fruit
                                             trees are not true to type when reproduced from seed. The ideal position for an apple tree is a sunny, sheltered site, well away from any frost pockets. Avoid poorly-drained or shallow soils. You will see apple trees
                                             for sale in two forms: bare-root stock (as the name suggested, the roots are exposed when you purchase these plants) or in containers. Bare-root plants should be planted from late autumn until early spring;
                                             containerised plants can be planted at any time of year, though winter is preferred. If planting in the garden, dig a hole no deeper than the roots, but up to three times the diameter of the root system
                                             (spread the roots out on the ground before digging the hole). If the sides or base of the planting hole are really hard, break the soil up with a fork before planting. Place the plant in the planting hole and carefully
                                             refill, placing soil between and around all the roots to eliminate air pockets. Firm the soil gently by stepping on it.</textarea>
    
      <textarea id="ambassy" cols="0" rows="0"> Ambassy is a great heavy cropping apple with pale yellow fruits flushed with crimson. The crisp flesh is sharp with a mix of flavours, a honey-like sweetness with a hint of aniseed.</textarea>
      <textarea id="blenheim-Orange" cols="0" rows="0">Nutty, sweet-flavoured, large fruit that are excellent both for eating and for cooking. When cooked the apples hold their shape well but will also make a thick purée.</textarea>
      <textarea id="bramley" cols="0" rows="0">Cooking Apple Bramley's Seedling fruit trees - By far the most popular cooking apple. The reason is easy to see. Heavy crops of extra large fruit, with creamy white flesh that is juicy and full of flavour.</textarea>
      
      <textarea id="phoneNumber" cols="0" rows="0">(+44)07634212074</textarea>

      <textarea id="enterQuestion" cols="0" rows="0">Please enter your question</textarea>
      <!-- =========================== End Banner Area =========================== -->
      <!-- ===========================     About area    =========================== -->
      <section class="about-area"> 
          <div class="container-fluid">
           <div class="row">
              <div class="col-lg-5 col-md-12 site-title"> <!-- col-lg specifies compatabilty with desktop screens. Bootstrap allows for maxium of 12 column width size for text, here we are using 6. md is for medium devices, the 12 is used to componsate for the change in width of the screen -->
                <div class="about-image">
                  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                  <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/images/ambassy_2220x1372.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Ambassy</h5>
                      <p>Ambassy is a great heavy cropping apple with pale yellow fruits flushed with crimson. 
                         The crisp flesh is sharp with a mix of flavours, a honey-like sweetness with a hint of aniseed.</p>
                         <input onclick="ambassy()" type="button" value="Speak">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/BlenheimOrange.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block BO ">
                        <h5>Blenheim Orange</h5>
                        <p>Nutty, sweet-flavoured, large fruit that are excellent both for eating and for cooking. 
                        When cooked the apples hold their shape well but will also make a thick purée.</p>
                        <input onclick="blenheimOrange()" type="button" value="Speak">
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/bramley.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Bramley</h5>
                        <p>Cooking Apple Bramley's Seedling fruit trees - By far the most popular cooking apple. 
                           The reason is easy to see. Heavy crops of extra large fruit, with creamy white flesh that is juicy and full of flavour.</p>
                        <input onclick="bramley()" type="button" value="Speak">
                      </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
       
            <div class="col-lg-6 col-md-12 about-title">
              <div class ="What-we-are-about">
                <h1 class= "text-uppercase pt-5">
                  <span> What we are about? </span>
                </h1>
                <div class="paragragh py-4 w-75">
                  <p class="para">Here at Hatfields Tree suppliers, we offer a wide of range of tree varieties such as Plum, European peach, cherry and many more. </p>
                                
                  <p class="para">There is something special about picking a piece of fruit off a tree in your own garden. 
                                  Some trees can grow to take up a lot of space while others can be kept quite small to adapt to your garden size. 
                                  If you live in an urban jungle with little space on your patio or a home in suburbia with plenty of surrounding space in your backyard - 
                                  there is always a way to create a thriving outdoor space full of fruitful plants, shrubs, and trees.
                                  Apple trees require pollination. While trees requiring a pollinator may seem like additional work, it’s really just a strength in numbers game. 
                                  Big or small orchard–here are tips on the best low-maintenance apple trees to plant in your garden or fill your small outdoor space with.</p>  
                                </p>
                  </p>
                  <input onclick="speakTextAbout()" type="button" value="Speak">
                </div>
              </div>
           </div>  
      </section>
        <!-- Links To --> 
        <section class="links"> 
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-6 col-lg-12 col-md-12">
                <a href="http://localhost:8080/orders/index.php">
                 <div class="apple-link">
                  <img src="assets/images/apple.png" alt="link-1">
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
      <!-- =========================== Emmet Abbreviation =========================== -->
    </main>
    <!-- =========================== End Main Area =========================== -->
    <script type="text/javascript" src="https://code.responsivevoice.org/responsivevoice.js"></script>
    <script>

            document.getElementById('home').style.display = "none";
            document.getElementById('orders').style.display = "none";
            document.getElementById('items').style.display = "none";
            document.getElementById('customers').style.display = "none";
            document.getElementById('orderline').style.display = "none";
            document.getElementById('suppliers').style.display = "none";
            
            document.getElementById('txt').style.display = "none";
            document.getElementById('Help').style.display = "none"; 
            document.getElementById('User_Guide').style.display = "none";
            document.getElementById('Contact_information').style.display = "none";
            document.getElementById('varieties').style.display = "none";
            document.getElementById('Refunds').style.display = "none";
            document.getElementById('delivery_times').style.display = "none";
            document.getElementById('safe_orders').style.display = "none";
            document.getElementById('reduce_contact').style.display = "none";
            document.getElementById('deliveries').style.display = "none";
            document.getElementById('returns').style.display = "none";
            
            document.getElementById('introduction').style.display = "none";
            document.getElementById('jobs2DoNow').style.display = "none";
            document.getElementById('grow').style.display = "none";
            document.getElementById('feeding').style.display = "none";
            document.getElementById('pruning').style.display = "none";
            document.getElementById('plant').style.display = "none";

            document.getElementById('ambassy').style.display = "none";
            document.getElementById('blenheim-Orange').style.display = "none";
            document.getElementById('bramley').style.display = "none";
            
            document.getElementById('phoneNumber').style.display = "none";

            document.getElementById('enterQuestion').style.display = "none";

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
      </script>

    <script type="text/javascript">
          $(document).ready(function(){
            $('[data-toggle="popover"]').popover({
              trigger: 'click',
              container: 'body',
              placement : 'top',
              html : true,
              sanitize: false,
              title : 'USER HELP',
              content:  '<h2>FREQUENTLY ASKED QUESTIONS</h2>\
<input type="text" id="myInput" onclick="enterQuestion()" placeholder="Enter your question..." >\
<table id="myTable">\
  <tr class="header">\
    <th style="width:60%;">Question</th>\
    <th style="width:40%;">Awnser</th>\
  </tr>\
  <tr>\
    <td>Where can I contact HATS Suppliers?</td>\
    <td>You can call us directly on 076342212074 or you can email us at hatsappletreesuppliers@gmail.com <input onclick="speakTextContactInfo()" type="button" value="Speak"></td>\
  </tr>\
  <tr>\
    <td>What variety of tree species do you offer? </td>\
    <td>We offer:\n Ambassy, Blenheim Orange, Braeburn, Bramley, Decio, Golden Noble, Kidds, Underleaf <input onclick="speakTextVarieties()" type="button" value="Speak"></td>\
  </tr>\
  <tr>\
    <td>How would I go about getting a refund?</td>\
    <td>To request a refund, you can contact us via mobile/telephone or you can email us so that we can process your request or offer an alternative.\
    <input onclick="speakTextRefund()" type="button" value="Speak"></td>\
  </tr>\
  <tr>\
    <td>Are delivery times affected?</td>\
    <td>As the Coronavirus has spread, we’ve seen an increase in people shopping online.\
        As a result, estimated delivery times for some items may be longer than usual at the moment. <input onclick="speakTextAffectedTimes()" type="button" value="Speak"></td>\
  </tr>\
  <tr>\
    <td>Is it safe to receive orders?</td>\
    <td>According to the <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/question-and-answers-hub/q-a-detail/coronavirus-disease-covid-19"> WHO </a>(external link),\
    “The likelihood of an infected person contaminating commercial goods is low and the risk of catching the virus that\
     causes COVID-19 from a package that has been moved, travelled, and exposed to different conditions and temperature is also low.” \
     You can find the latest information on COVID-19 on the information pages of the <a href="https://www.gov.uk/coronavirus">UK Government</a> (external link)\
     and the <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/question-and-answers-hub/q-a-detail/coronavirus-disease-covid-19">World Health Organization</a>\
     (external link). <input onclick="speakTextSafeOrders()" type="button" value="Speak"></td>\
  </tr>\
  <tr>\
    <td>Is it possible to reduce contact with the driver when they deliver my order?</td>\
    <td>Yes. HATS apple tree suppliers delivery associates and partners have been advised to reduce contact with customers, \
        this may include placing packages at the customer’s doorstep and stepping back. If an ID check is required,\
        the driver will complete the check at a distance. You can also choose a safe place location where the driver can leave your package if you can’t answer the door.\
        Drivers are asked to follow your delivery preference where possible. \
        You are able to set your delivery preference during checkout on the Review your order screen\
        by clicking on Add delivery instructions and selecting your desired safe place option. <input onclick="speakTextReduceContact()" type="button" value="Speak"></td>\
  </tr>\
  <tr>\
    <td>Do you deliver outside of the UK?</td>\
    <td>HATS apple tree suppliers are a local branch so only deliver within mainland UK by default. Requests can be made to individuals outside mainland UK,\
    but will come with additional costs dependant on the location and total weight of items bought <input onclick="speakTextDeliveries()" type="button" value="Speak"></td>\
  </tr>\
  <tr>\
    <td>Is it possible to return items?</td>\
    <td>Yes, you can continue to return items. To return an item, please contact us via mobile/telphone or email so we can give you a step by step guide on how to return the item/items.\
    <input onclick="speakTextReturns()" type="button" value="Speak"></td>\
  </tr>\
</table>'
 });


            $(document).on("click", ".popover .close" , function(){
              $(this).parents(".popover").popover('hide');
            });
          });
     </script>



    <script>
    function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
 <!--[data-toggle="popover2"]-->
<script type="text/javascript">
    $(document).ready(function(){
    $('[data-toggle="popover2"]').popover({
       trigger: 'click', 
       container: 'body',
       placement : 'top',
       html : true,
       sanitize: false,
       title : 'USER GUIDE',
       content: '<div class="media"><img src="assets/images/apple_user_guide.png" class="mr-3" alt="Sample Image">\
                 <div class="media-body"><h5 class="media-heading">Introduction</h5>\
                 <p>Apples are probably the easiest tree fruit to grow and the most popular with gardeners.\
                    You may be lucky enough to have one in your garden already, but if not, they are easy to establish.\
                    There are thousands of different types of apples, but they broadly fall into two categories: dessert apples for eating,\
                    and cookers, as the name suggest, for cooking. Some are dual-purpose, so suitable for both uses.</p>\
                    <input onclick="introduction()" type="button" value="Speak"> </div></div>\
                    <section class="Jobs2DoTable">\
                    <table id="myTable">\
                      <tr class="header">\
                        <th style="width:60%;">Jobs to do now <input onclick="jobs2DoNow()" type="button" value="Speak"></th>\
                        <th style="width:40%;">Month by month</th>\
                      </tr>\
                      <tr>\
                        <td>.Feed plants, sprinkling on a balanced general fertiliser\
                        <br><br>.Weed and mulch around base of trees\
                        <br><br>.Plant bare-root and container-grown trees</td>\
                        <td> <div class="table-responsive-sm">\
                                <table class="table">\
                                  <tr class="header">\
                                    <th style="width:40%;">Jan</th>\
                                    <th style="width:40%;">Feb</th>\
                                    <th style="width:40%;">March</th>\
                                    <th style="width:40%;">April</th>\
                                    <th style="width:40%;">May</th>\
                                    <th style="width:40%;">June</th>\
                                  </tr>\
                                  <tr>\
                                     <td> Plant </td>\
                                     <td> Plant </td>\
                                     <td> Plant </td>\
                                  </tr> \
                                  <tr class="header">\
                                    <th style="width:40%;">July</th>\
                                    <th style="width:40%;">August</th>\
                                    <th style="width:40%;">September</th>\
                                    <th style="width:40%;">October</th>\
                                    <th style="width:40%;">November</th>\
                                    <th style="width:40%;">December</th>\
                                  </tr>\
                                  <tr>\
                                     <td></td>\
                                     <td>Harvest</td>\
                                     <td>Harvest</td>\
                                     <td>Harvest</td>\
                                     <td>Plant<br>Harvest</td>\
                                     <td>Harvest</td>\
                                  </tr> \
                                </table>\
                             </div>\
                        </td>\
                      </tr>\
                      </table>\
                      </section>\
                      <section class="Further_instructions">\
                      <div class="Grow"><h5 class="media-heading">Grow</h5>\
                      <p>Apples are probably the easiest tree fruit to grow and the most popular with gardeners.\
                         You may be lucky enough to have one in your garden already, but if not,<br> they are easy to establish.\
                          There are thousands of different types of apples, but they broadly fall into two categories: dessert apples for eating,\
                          and cookers,<br> as the name suggest, for cooking. Some are dual-purpose, so suitable for both uses.</p>\
                          <input onclick="grow()" type="button" value="Speak"></div>\
                          <div class="Feeding"><h5 class="media-heading2">Feeding</h5>\
                          <p> In early spring, sprinkle a balanced general fertiliser (such as Growmore) around the base of the plant,\
                              following the manufacturer’s instructions.\
                          </p><input onclick="feeding()" type="button" value="Speak">\
                          <div class="Prunning"><h5 class="media-heading3">Pruning</h5>\
                          <p>Apples should be pruned every year to get the best crop. Timing and method of pruning depends on the type of apple you are growing.</p>\
                          <input onclick="prunning()" type="button" value="Speak"></div>\
                          <div class="Plant"><h5 class="media-heading3">Plant</h5>\
                          <p> If you don’t have an apple tree in your garden, planting one is a good investment,\
                              for there is nothing like eating the fresh fruit straight from the tree in autumn.\
                              It\'s generally recommended to <a href= https://www.rhs.org.uk/Advice/profile?pid=331> buy named cultivars <br> of apples </a> from a reputable specialist nursery.\
                              They are supplied as young trees ready for planting. Sowing apples from their pips would just take too long,\
                              and just as children are not identical to their parents, fruit <br> trees are not true to type when reproduced from seed.\
                              The ideal position for an apple tree is a sunny, sheltered site, well away from any frost pockets. Avoid poorly-drained or shallow soils.\
                              You will see apple trees <br> for sale in two forms: bare-root stock (as the name suggested,\
                              the roots are exposed when you purchase these plants) or in containers. Bare-root plants should be planted from late autumn until early spring;<br>\
                              containerised plants can be planted at any time of year, though winter is preferred.\
                              If planting in the garden, dig a hole no deeper than the roots,\
                              but up to three times the diameter of the root system <br> (spread the roots out on the ground before digging the hole).\
                              If the sides or base of the planting hole are really hard, break the soil up with a fork before planting.\
                              Place the plant in the planting hole and carefully <br> refill, placing soil between and around all the roots to eliminate air pockets.\
                              Firm the soil gently by stepping on it.\
                          </p><input onclick="plant()" type="button" value="Speak">\
                          <div class="Grow_image"><img src="assets/images/apples-growing.jpg" class="mr-3" alt="Sample Image"></div>\
                         </section>' 
                  });
                });
</script> 


  </body>
</html>