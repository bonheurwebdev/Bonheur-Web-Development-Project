<html>
    <head>
        <title>FAQs</title>
            <?php include('bootstrap_file.php');?>
        <style>
            a{
                text-decoration: none;
                color: white;
            }
            .img-responsive:hover{
                opacity: .5;
                transition: .4s;
            }
            .thumbnail{
                border: none;
            }

            .container {
                padding: 60px 50px;
            }
            .p{
                margin: auto;
            }
            
            h4{
                color: #c08475;
            }

        </style>

    </head>
    <body>
        
        <!---- Navigation accounts----->
        
        <nav class="navbar navbar-fixed-top" id="account_nav">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="bonheur_home.php"><img src="Images/logo/hanger.png" style="height: 150px;"></a>
                    </div>
                    <div id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                    
                    <!-- User Account page-->
                            <li><a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-user" style="color:#bd7c6a; font-size: 24px;"></span></a></li>
          
                    <!---- Cart ---->
                            <li><a href="#"><span class="glyphicon glyphicon-shopping-cart counter" style="color:#bd7c6a; font-size: 24px;"></span> <span class="badge" >11</span></a>
                        
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> 
        <div>
            <img src="Images/dresses/wallpaper.jpg" width="100%">
        </div>
        
        <!----Product navigations---->
        
        
        <?php include('product_navbar.php');?>
        
        
        <!-----FAQs----->
        

        <div class="container" style="font-family: georgia;">
            <h1 style="color: #BC7B6A;">FAQs</h1>
        </div>
        
           <div class="container">
               
        <h4 style="color: #c08475;"><strong>Why is my order still processing?</strong></h4>
           </div>
           <div class="container">    
     <p class="lead text-muted mb-0">

Generally, we will process your orders well within 3-7 days. An email will be send once shipped out.
     </p>
        </div>
            <div class="container">

            <h4 style="color: #c08475;"><strong>Why I didn’t get an email about my order being shipped?</strong></h4>
            </div>
      <div class="container">
     <p class="lead text-muted mb-0">After placing your order, we may need 1-3 days to prepare your order. <br>

<br>This will be our processing time to make sure that your order  is accurate. This processing time does not include shipping time. 
We will inform you with an email after shipment or if there is 
any delay. 

<br>Please make sure you login the right email account and please check your mailbox spam folder as well. If you can't find an 
email fifteen days after you’ve placed the order, please contact our Customer Service. <br>
        </div>
    
            <h4 style="color: #c08475;"><strong>Can I cancel my order?</strong></h4>
            <div class="container">
     <p class="lead text-muted mb-0">     
     Yes, you can. There are two types of order cancellation:<br>

         <b><br>1. Cancelling a paid order.</b>

<br>If you haven't received the shipping notification, you can cancel this order under "My Orders". Or you can contact 
our Customer Service for assistance.<br>

         <b><br>2. Cancelling an unpaid order:</b>

<br>An unpaid order will be canceled automatically after 12 hours. Or please log into your account >> click on "My Orders" 
and click on the "Cancel Order" button. Your order will be cancelled.
     </p>
            </div>
  
            
            
<section id="scroll-target">
   
         <h4 style="color: #c08475;"><strong>Do you have phone service?</strong></h4>       
         <div class="container">
    <p class="lead text-muted mb-0">
             Thank you for contacting us. We are sorry to tell you that we don't have phone service currently.<br>

        <b>BONHEUR provides chat service.</b><br>

Here are working time:<br>

        <b>1. Chat Service : </b> anytime excluding midnight or sleeping hours.<br>

        <b>2. E-mail Service: </b> Reply within 24 Hours.<br>

             </p>
         
         </div>
    
<section id="scroll-target">
    
         <h4 style="color: #c08475;"><strong>How long does it take for my order to ship?</strong></h4>   
           <div class="container">
   <p class="lead text-muted mb-0">
            
       When you place an order with Bonheur we will have to process the order first. Processing usually takes 1-3 business days. 
Shipping time will be 6-8 working days by standard shipping and 2-4 working days by express shipping.<br>
               </p>
               
        </div>
        
        <h4 style="color: #c08475;"><strong>How long will the order take to arrive?</strong></h4>
            <div class="container">
   <p class="lead text-muted mb-0">
       
       We kindly suggest you to check our Shipping Policy or the predicted arriving time at product details page first before purchasing. <br>

       If you already placed the order, please choose order below for status checking or logistics tracking.
                </p>
    </div>
     
        <h4 style="color: #c08475;"><strong> How can I track my order? </strong></h4>
            <div class="container">
   <p class="lead text-muted mb-0">
       
       1. Shipping Email: It contains tracking number and tracking link. <br>

       2. Track via <b>"My Order"</b>, which has a <b>"TRACK"</b>   button.<br>

       -Please log into your account >> click on <u>My Orders"</u> and click on the <b>"Track"</b> button for more details.<br>

<br><b>Note:</b>
It may take 3-5 days to see any activity once it has shipped out from our end as the next facility need time to scan parcels.
Please allow some time for the courier to update the latest tracking info after reaching the next station.<br>
                </p>
    </div>
    
    
     
        
  

      <!-- End-->
        <!----- FOOTER ------>
        <?php include('footer.php');?>
    </body>
</html>