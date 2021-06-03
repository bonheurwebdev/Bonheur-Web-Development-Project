<html>
    <head>
        <title>Dresses</title>
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

        <div class="container" style="font-family: georgia;">
            <h2>Dresses</h2>
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
        
        

        <div class="container" style="font-family: georgia;">
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/dresses/adele/black.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Adele Dress
<b>Color: </b>Black
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                </div>
            </div>
            </a>
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/dresses/agnes/pink.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Agnes Dress
<b>Color: </b>Pink
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
<span>&#8369;</span> 200.00</pre>
                </div>
            </div>
            </a>
            
            <a href="#">
            <div class="col-sm-3" style=" margin-top: 20px;">
                <div class="thumbnail">
                    <img src="Images/dresses/laura_linen/pink.jpg" class="img-responsive">
                    <pre style="border: none; background: none;">
Laura Dress
<b>Color: </b>Pink
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                </div>
            </div>
            </a>
        </div>
        <!----- FOOTER ------>
        <?php include('footer.php');?>
    </body>
</html>