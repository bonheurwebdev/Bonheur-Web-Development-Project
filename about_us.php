<html>
    <head>
        <title>About Us</title>
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
        
        
        <!-----About Us----->
        

        <div class="container" style="font-family: georgia;">
            <h1>About Us</h1>
        </div>
        <div class="container-fluid">   
           <div class="container">
               
     <p class="lead text-muted mb-0">Bonheur Apparel is an online clothing shop that was established in July 2020.
     Bonheur is a French word means “happiness”.  We will always strive to provide you a great quality of 
     our products and motivate you to always wear your beautiful smile and feel confident with our pieces.
     </p>
               
     <p class="lead text-muted">We offers youthful and fashionable outfit yet affordable with the latest trends that caters exclusively to women
     who want to add a twist to their style. Every piece is designed and created by the hands of our local artisans.
     </p><br>
      <a href="#scroll-target" class="btn btn-default btn-lg" style="font-family: georgia; margin-top: 5px;">Get in Touch</a> 
               
            </div>
            
            
            
      <!-----Our Values----->  
            
            
            <div class="container" style="font-family: georgia;">
                <div class="col-lg-12" style="margin-top: 40px">
            <h1>Our Values</h1>
                </div>
            </div>
            <h4><strong>MISSION</strong></h4>
      <div class="container">
     <p class="lead text-muted mb-0">• To support and collaborate with fashion and design industries to achieve sustainable progress <br>
      • To offer great quality stylish and affordable ladies’ apparel and to express their best version of them selves <br>
      • To improve the well-being and satisfaction of our customers. We treat our customers with high priority in 
                                                                            order to serve them better.
      </p></div>
    
            <h4><strong>WHERE YOU CAN FIND US</strong></h4>
            <div class="container">
     <p class="lead text-muted mb-0">     
     Bonheur now ships to countries and regions nationwide. Bonheur continues to thrive due in part to the company's values in controlling the excellence of in-house production. Bonheur aims to provide the highest value trendy pieces while also being dedicated to quality, value and service.
     </p>
            </div>
 
            
     <!-----Meet Bonheur----->  
            
            
<section id="scroll-target">
     <div class="container" style="font-family: georgia;">
         <div class="col-lg-12" style="margin-top 40px;"></div>
            <h1>Meet Bonheur</h1>
            </div>       
            
     <div class="container">
         <div class="col-lg-3">
            <img src="Images/logo/logo.jpg" class="img-rounded" alt="Logo" width="200px" height="200px">
         </div>
         <div class="col-lg-9">
            <h4><strong>Product Design</strong></h4>
             <p class="lead text-muted">The first design we want to introduce is a beautiful girl inside and out.
Our designs has its own unique sense of fashion; some focus on 
creating  elegant, cute, sexy, trendy and all different styles. 
Our designers understand that you, as the customer, are looking for 
more than beautiful and fashionable clothes. </p>
         
         </div>
     </div>
     
     <div class="container">
        <div class="col-lg-10">
            <h4><strong>Manufacturing</strong></h4>
            <p class="lead text-muted">All of our products are created by machinery that
emphasizes precision and attention to detail and style.
We value quality and sometimes our products are
crafted by individuals experienced in hand sewing.</p>
         </div>
         
        <div class="col-lg-1">
         <img src="Images/trackJacket_bikeset/123145007_275948880417811_6611492443074896392_n.jpg" class="img-rounded" alt="Logo" width="200px" height="200px">
         </div>
    </div>
</section>  
        
  

      <!-- End-->
        <!----- FOOTER ------>
        <?php include('footer.php');?>
    </body>
</html>