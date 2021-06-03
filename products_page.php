<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Products</title>
        <?php include('bootstrap_file.php'); ?>
        
        <style>
            
            .thumbnail{
                
                border: 1px solid Transparent!important;
            }
            
            a.header-link:link{
                cursor: default;
                color: #F3C4BF;
            }
            a.header-link{
                color: #BC7B6A;
            }
            a.header-link:hover{
                cursor: default;
                transition: 0.3s; 
                color: #F3C4BF;
            }
        </style>
    </head>
    <body>
        <div>
            <img src="5.png">
        </div>
        
        <!--- Navigation ---->
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
                            <li><a href="#"><span class="glyphicon glyphicon-shopping-cart counter" style="color:#bd7c6a; font-size: 24px;"></span></a>
                        
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> 
            
        <div id="myCarousel" class="carousel slide" data-interval="4000" data-ride="carousel" style="width: 100%;">
           

    <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" style="width: 100%; margin: auto;">
                <div class="item active">
                    <img src="Images/carousel/marvel.png" alt="image"  style="height: auto;">
                </div>

                <div class="item">
                    <img src="Images/carousel/bands.png" alt="image"  style="height: auto;">   
                </div>
            </div>

        </div>
        
        
        <!--- Products Navigation ---->
        
        
        
        <?php include('product_navbar.php');?>
        
        
        <!---- Products ----->
        
        <!--- Dress ---->
        <div class="container" style="font-family: georgia;">
            <h2><a class="header-link" href="product_dresses.php">Dresses</a></h2>
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/dresses/daphne_dresses/navy.png" class="img-responsive">
                    <pre style="border: none; background: none;">
Daphne Dress
<b>Color: </b>Navy
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                </div>
            </div>
            </a>
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/dresses/love_marie/navy_blue.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Love Marie Dress
<b>Color: </b>Navy
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                </div>
            </div>
            </a>
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/dresses/juliet_dresses/brown.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Juliet Dress
<b>Color: </b>Brown
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                </div>
            </div>
            </a>
            
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/dresses/venice/pink.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Venice Dress
<b>Color: </b>Pink
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                </div>
            </div>
            </a>
        </div>
        
        
        <!--- Tees ---->
        
        
        <div class="container" style="font-family: georgia;">
            <h2><a class="header-link" href="product_tees.php">Tees</a></h2>
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/tees/graphic_tees/gamer.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Daphne Dress
<b>Color: </b>Navy
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                </div>
            </div>
            </a>
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/tees/band_tees/beatles.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Daphne Dress
<b>Color: </b>Maroon
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                </div>
            </div>
            </a>
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/tees/band_tees/kurt_cobain.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Daphne Dress
<b>Color: </b>Green
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                </div>
            </div>
            </a>
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/tees/vintage_tees/godzilla.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Daphne Dress
<b>Color: </b>Gray
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                </div>
            </div>
            </a>
        </div>
        
        
        <!--- Tops ---->
        
        
              <div class="container" style="font-family: georgia;">
            <h2><a class="header-link" href="product_tops.php">Tops</a></h2>
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/dresses/daphne_dresses/navy.png" class="img-responsive">
                    <pre style="border: none; background: none;">
Daphne Dress
<b>Color: </b>Navy
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                </div>
            </div>
            </a>
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/dresses/love_marie/navy_blue.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Love Marie Dress
<b>Color: </b>Navy
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                </div>
            </div>
            </a>
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/dresses/juliet_dresses/brown.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Juliet Dress
<b>Color: </b>Brown
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                </div>
            </div>
            </a>
            
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/dresses/venice/pink.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Venice Dress
<b>Color: </b>Pink
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                </div>
            </div>
            </a>
        </div>
        
        
        
        <!----- 3rd row ------>
        
        <div class="container" style="font-family: georgia;">
            <a href="#">
            <div class="col-sm-8" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/logo/bike_set.png" class="img-responsive" style="height: 370px;">
                </div>
            </div>
            </a>
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/logo/dolly_sweat1.png" class="img-responsive" style="height: 370px; width: 300px;">
                </div>
            </div>
            </a>
        </div>
        
        
    <!------ FOOTER ------>
        <?php include('footer.php');?>
        
    </body>
</html>