<html>
    <head>
        <title>Pants</title>
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
            <h2>Pants</h2>
            <a href="#">
            <div class="col-sm-3 border-0" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/pants/dollysweat_pants/black.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Dolly Sweat Pants (Black)
<b>Color: </b>Black
<b>Size: </b>Free Size
<span>&#8369;</span> 250.00</pre>
                </div>
            </div>
            </a>
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/pants/dollysweat_pants/green.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Dolly Sweat Pants (Army Green)
<b>Color: </b>Green
<b>Size: </b>Free Size
<span>&#8369;</span> 250.00</pre>
                </div>
            </div>
            </a>
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/pants/dollysweat_pants/oat.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Dolly Sweat Pants (Oatmeal)
<b>Color: </b>Oat
<b>Size: </b>Free Size
<span>&#8369;</span> 250.00</pre>
                </div>
            </div>
            </a>
            
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/pants/dollysweat_pants/peach.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Dolly Sweat Pants (Peachy)
<b>Color: </b>Pink Peach
<b>Size: </b>Free Size
<span>&#8369;</span>250.00</pre>
                </div>
            </div>
            </a>
        </div>
        
        

        <div class="container" style="font-family: georgia;">
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/pants/dollysweat_pants/red.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Dolly Sweat Pants (Pale Red)
<b>Color: </b>Red
<b>Size: </b>Free Size
<span>&#8369;</span> 250.00</pre>
                </div>
            </div>
            </a>
            <a href="#">
            </a>
        </div>
        
        <!----- FOOTER ------>
        <?php include('footer.php');?>
    </body>
</html>