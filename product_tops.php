<html>
    <head>
        <title>Tops</title>
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
                border: 1px solid Transparent!important;
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
        <!-----Products----->

        <div class="container" style="font-family: georgia; border: 0;">
            <h2>Tops</h2>
            <a href="#">
            <div class="col-sm-3 border-0" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/tops/kylie_top/mint.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Kylie Top
<b>Color: </b>Mint Green
<b>Size: </b>Medium (free size)
<span>&#8369;</span> 150.00</pre>
                </div>
            </div>
            </a>
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/tops/minimalist_top/hot_air_balloon.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Hot Air Balloon Sleeveless Top
<b>Color: </b>White
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 150.00</pre>
                </div>
            </div>
            </a>
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/tops/square_neck/black.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Square Neck
<b>Color: </b>Black
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 150.00</pre>
                </div>
            </div>
            </a>
            
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/tops/zara_cutout/red.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Zara Cutout
<b>Color: </b>Red
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 170.00</pre>
                </div>
            </div>
            </a>
        </div>
        
        

        <div class="container" style="font-family: georgia;">
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/tops/dixie_top/dixie_grey.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Dixie Top
<b>Color: </b>Grey
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 150.00</pre>
                </div>
            </div>
            </a>
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/tops/kylie_knitted_top/light_blue.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Kylie Knitted Top
<b>Color: </b>Sky Blue
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                </div>
            </div>
            </a>
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/dresses/angela/gray.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Angela Dress
<b>Color: </b>Gray
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 150.00</pre>
                </div>
            </div>
            </a>
            
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/tops/square_neck/green.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Square Neck
<b>Color: </b>Green
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 150.00</pre>
                </div>
            </div>
            </a>
        </div>
        <!----- FOOTER ------>
        <?php include('footer.php');?>
    </body>
</html>