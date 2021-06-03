 <html>
    <head>
    <title>Shopping Cart</title>
        <?php include('bootstrap_file.php');?>
        
        
        <!---- CSS ----->
        
        
    <style>
    
        .navbar{
            
            margin-bottom: 100px;
        }
        
        .container{
            
            margin-top: 100px;
        }
        .btn{
            
            background-color: #BC7B6A;
        }
    
    </style>
    
    </head>
    
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <body>
        
        
        <!---- Navigation accounts----->
    
        
    <nav class="navbar" id="account_nav">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="bonheur_home.php"><img src="Images/logo/hanger.png" style="height: 150px;"></a>
                    </div>
                    <div id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">

                        </ul>
                    </div>
                </div>
            </nav>
        
        
        <!---- Shopping Cart Content ----->

        
        <div class="container">
           <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Shopping Cart</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <div class="thumbnail pull-left"> <img class="media-object" src="Images/tees/comic_tees/blackpanther.jpg" style="width: 72px; height: 72px;"> </div>
                            <div class="media-body">
                                <h4 class="media-heading" style="font-family: georgia;">Black Panther Comic Tees</h4>
                                <h5 class="media-heading"> by Bonheur Apparel</h5>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="text" class="form-control" id="quantityinput" value="3">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>PHP150.00</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>PHP450.00</strong></td>
                        <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Delete
                        </button></td>
                    </tr>
                    <tr>
                        <td class="col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="Images/tops/minimalist_top/hot_air_balloon.jpg" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading" style="font-family: georgia;">Hot Air Baloon Tops</h4>
                                <h5 class="media-heading"> by Bonheur Apparel</h5>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-md-1" style="text-align: center">
                        <input type="text" class="form-control" id="quantityinput" value="2">
                        </td>
                        <td class="col-md-1 text-center"><strong>PHP150.00</strong></td>
                        <td class="col-md-1 text-center"><strong>PHP300.00</strong></td>
                        <td class="col-md-1">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Delete
                        </button></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>PHP750.00</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong>PHP50.00</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>PHP800.00</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type="button" class="btn btn-default" style="background-color: #BC7B6A; color: white;">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></td>
                        <td>
                        <button type="button" class="btn btn-default" style="background-color: #BC7B6A; color: white;">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
               </div>
            </div>
        
        
            
            
            
            <!---- Input Form ----->
            
    <?php
            if(isset($POST['save']))
                {
                    $dbHost = 'localhost';
                    $dbUser = 'bryan';
                    $dbPass = 'eunice69';
                    $conn = mysql_connect($dbHost, $dbUser, $dbPass);
                if (! $conn)
                {
                    die('Could not connect: '. mysql_error());
                }
                }
            
            ?>
            

           <form method="post" action = " <?php $_PHP_SELF ?> ">
               <div class="form-row">
    <div class="form-group col-lg-6">
      <label for="customer_fullname">Full Name</label>
      <input type="FullName" class="form-control" id="customer_fullname" placeholder="Full Name">
    </div>
                   
      <div class="form-group col-lg-6">
            <label for="inputPhoneNumber">Phone Number</label>
                <input type="text" class="form-control" id="inputPhoneNumber" placeholder="Phone Number">
  </div>
  <div class="form-group">
      <div class="form-group col-lg-6">
            <label for="inputRegion">Region</label>
                <input type="text" class="form-control" id="inputRegion" placeholder="Region">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputProvince">Province</label>
        <input type="text" class="form-control" id="inputProvince" placeholder="Province">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity" placeholder="City">
    </div>
    <div class="form-group col-md-6">
      <label for="inputBarangay">Barangay</label>
        <input type="text" class="form-control" id="inputBarangay" placeholder="Barangay">
    </div>
      <div class="form-group col-md-6">
          <label for="inputPostalCode">Postal Code</label>
            <input type="text" class="form-control" id="inputPostalCode" placeholder="Postal Code">
    </div>
      <div class="form-group col-md-6">
        <label for="inputDetailedAddress">Detailed Address</label>
            <input type="text" class="form-control" id="inputDetailedAddress" placeholder="Block, St., City">
  
  </div>
      <div class="text-center">
  <button type="submit" class="btn btn-primary" id = "save">Save</button>
      </div>
 </div>
 </div>     
               </div>               
        </form>
</div>
                   
          
        <!-- End-->
        <!----- FOOTER ------>
        <?php include('footer.php');?>
    </body>
</html>