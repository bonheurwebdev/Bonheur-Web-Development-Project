<html>
    <head>
        <title>Tees</title>
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
            <h2>Tees</h2>
            <a href="#">
            <div class="col-sm-3 border-0" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/tees/band_tees/paramore.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Paramore Band Tee
<b>Color: </b>White
<b>Size: </b>Medium (free size)
<span>&#8369;</span> 180.00</pre>
                </div>
            </div>
            </a>
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/tees/comic_tees/ironman.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Iron Man Comic Tee
<b>Color: </b>White
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 180.00</pre>
                </div>
            </div>
            </a>
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/tees/band_tees/acdc.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
ACDC Band Tee
<b>Color: </b>White
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 180.00</pre>
                </div>
            </div>
            </a>
            
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/tees/vintage_tees/formula_race.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Formula Race Vintage Tee
<b>Color: </b>White
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 180.00</pre>
                </div>
            </div>
            </a>
        </div>
        
        

        <div class="container" style="font-family: georgia;">
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/tees/vintage_tees2/hard_rock.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Hard Rock Vintage Tee
(Pants not included)
<b>Color: </b>White
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 150.00</pre>
                </div>
            </div>
            </a>
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/tees/comic_tees/blackpanther.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Black Panther Comic Tee
<b>Color: </b>White
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 180.00</pre>
                </div>
            </div>
            </a>
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/tees/vintage_tees/godzilla.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Godzilla Vintage Tee
<b>Color: </b>White
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 180.00</pre>
                </div>
            </div>
            </a>
            
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/tees/vintage_tees2/home_alone.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Home Alone Vintage Tee
(Pants not included)
<b>Color: </b>White
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 180.00</pre>
                </div>
            </div>
            </a>
        </div>
        <!----- FOOTER ------>
        <?php include('footer.php');?>
    </body>
</html>