<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bonheur Ph </title>
    <?php include('bootstrap_file.php');?>
</head>
<body>
    
    
    <!----- CAROUSEL ----->
    <center>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%; height: 500px;">
    <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

    <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" style="width: 100%; margin: auto;">
        
                <div class="item active">
                    <img src="Images/carousel/trial.png" alt="image"  style="height: 500px;">
                    <div class="carousel-caption">
                    </div>      
                </div>

                <div class="item">
                    <img src="Images/carousel/trial1.png" alt="image"  style="height: 500px;">
                    <div class="carousel-caption">
                    </div>      
                </div>
        
                <div class="item">
                    <img src="Images/carousel/trial2.png" alt="image"  style="height: 500px;">
                    <div class="carousel-caption">
                    </div>      
                </div>
            </div>

    <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><br><br><br>
  
    </center>
    
    <!----- LOGIN MODAL / LOGIN POP UP ------>
    
    <div class="modal fade" id="loginModal" role="dialog">
        <div class="modal-dialog">
    
      <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button style="float: left;" type="button" class="close glyphicon glyphicon-chevron-left" data-dismiss="modal"></button><br>
                    <h1 class="modal-title text-center" style="font-family: georgia"><b>Sign in</b></h1>
                </div>
                <div class="modal-body">
                    
                    <!----FORM--->
                    <form role="form">
                        <div class="form-group">
                            <label for="usrname" class="text-left"><span class="glyphicon glyphicon-user"></span> Email</label><br>
                        <div class="text-center">
                            <input type="text" style="width: 300px;" id="usrname">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="psw"  class="text-left"><span class="glyphicon glyphicon-eye-open"></span> Password</label><br>
                        <div class="text-center">
                            <input type="password" style="width: 300px;  height: 30px;" id="psw">
                            </div>
                        </div>
                        
                        <div class="checkbox">
                            <label  class="text-left list-inline"><input type="checkbox" value="" checked>Remember me</label>
                            <a href="#"><label  class="text-right">Forgot password?</label></a>
                        </div>
                        <div class="text-center"><br><br>
                            <button type="submit" class="btn btn-success" style="width: 300px; height: 40px; background-color: #bd7c6a;"><span class="glyphicon glyphicon-log-in"></span> Sign in</button><br><br>
                            
                     <a href="#" data-dismiss="modal">Be a member today! Sign up</a>
                        </div>
                    </form>
                    
                </div>
                <div class="modal-footer text-left">
                </div>
            </div>
      
        </div>
    </div>
    
    <!----- NAVIGATION BAR ----->
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="bonheur_home.php"><img src="Images/logo/hanger.png" style="height: 150px;"></a>
            </div>
            <div id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-user" style="color:#bd7c6a; font-size: 24px;"></span></a></li>
          
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart counter" style="color:#bd7c6a; font-size: 24px;"></span> <span class="badge" >11</span></a>
                        
                    </li>
                </ul>
            </div>
        </div>
    </nav> 
    
  
    <!---- BODY PRODUCTS ------>  
    <div class="container">
        <a href="products_page.php"><img src="Images/logo/shop_now.png" height="300px;" class="img-responsive"></a>
    </div><br>
    <div class="container">
        <!------- Venice Dresses ------->
        <ul class="list-inline">
            <li style="font-size: 32px; font-family: georgia;" class="text-left"><b>Venice Dresses</b></li>
        </ul>  
        <div class="row">
            <div class="col-sm-3">
                <a href="#">
                    <div class="thumbnail" style="border: none;">
                        <img src="Images/dresses/venice/pink.jpg" class="img-responsive" style="width:100%;" alt="Image">
                        <div class="caption">
                            <pre style="border: none; background: none;">
Venice Dress
<b>Color: </b>Pink
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col-sm-3">
                <a href="#">
                    <div class="thumbnail" style="border: none;">
                        <img src="Images/dresses/venice/green.jpg" class="img-responsive" style="width:100%" alt="Image"> 
                        <div class="caption">
                            <pre style="border: none; background: none;">
Venice Dress
<b>Color: </b>Green
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                        </div>
                    </div>
                </a>    
            </div>
            <div class="col-sm-3">
                <a href="#">
                    <div class="thumbnail" style="border: none;">
                        <img src="Images/dresses/venice/red.jpg" class="img-responsive" style="width:100%" alt="Image"> 
                        <div class="caption">
                            <pre style="border: none; background: none;">
Venice Dress
<b>Color: </b>Rust
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                        </div>
                    </div>
                </a> 
            </div>
            <div class="col-sm-3">
                <a href="#">
                    <div class="thumbnail" style="border: none;">
                        <img src="Images/dresses/love_marie/black.jpg" class="img-responsive" style="width:100%" alt="Image">
                        <div class="caption">
                            <pre style="border: none; background: none;">
Venice Dress
<b>Color: </b>Black
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    
        <h4 class="text-right" style="font-family: georgia; margin-right: 10px;"><a href="#">View All</a></h4><br>
    
        <div id="myCarousel" class="carousel slide" data-interval="2000" data-ride="carousel" style="width: 100%;">
           

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
    <br><br><br>
        <!----- JULIET DRESSES ------>
        <ul class="list-inline">
            <li style="font-size: 32px; font-family: georgia;" class="text-left"><b>Juliet Dresses</b></li>
        </ul>   
        <div class="row">
            <div class="col-sm-3">
                <a href="#">
                    <div class="thumbnail" style="border: none;">
                        <img src="Images/dresses/juliet_dresses/black.jpg" class="img-responsive" style="width:100%" alt="Image">
                        <div class="caption">
                            <pre style="border: none; background: none;">
Juliet Dress
<b>Color: </b>Black
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#">
                    <div class="thumbnail" style="border: none;">
                        <img src="Images/dresses/juliet_dresses/blue.jpg" class="img-responsive" style="width:100%" alt="Image">
                        <div class="caption">
                            <pre style="border: none; background: none;">
Juliet Dress
<b>Color: </b>Blue
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#">
                    <div class="thumbnail" style="border: none;">
                        <img src="Images/dresses/juliet_dresses/brown.jpg" class="img-responsive" style="width:100%" alt="Image">
                        <div class="caption">
                            <pre style="border: none; background: none;">
Juliet Dress
<b>Color: </b>Brown
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#">
                    <div class="thumbnail" style="border: none;">
                        <img id="view_more" src="Images/dresses/juliet_dresses/green.jpg" class="img-responsive" style="width:100%" alt="Image">
                        <div class="caption">
                            <pre style="border: none; background: none;">
Juliet Dress
<b>Color: </b>Green
<b>Size: </b>Mediumn (free size)
<span>&#8369;</span> 200.00</pre>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    
        <h4 class="text-right" style="font-family: georgia; margin-right: 10px;"><a href="#">View All</a></h4>
    </div>
   <?php include('footer.php')?>

</body>
</html>