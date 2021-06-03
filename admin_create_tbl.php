<html>
<head>
<title>Admin Side</title>
<?php include('bootstrap_file.php');?>

        <style>
            a{
                text-decoration: none;
                color: white;
            }
            .img-responsive:hover {
                opacity: .5;
                transition: .4s;
            }
            .thumbnail {
                border: none;
            }

            .container {
                padding: 60px 50px;
            }
            .p {
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
        
        

<h1 style="font-family: georgia;"> Creating Table </h1>

<?php
if(isset($_POST['create_tbl']))
{
$dbhost = 'localhost';
$dbuser = 'bryan';
$dbpass = 'eunice69';
$conn = mysql_connect($dbhost,$dbuser, $dbpass);
if (! $conn)
{
die ('Could not Connect: ' . mysql_error());
}
$sql = "CREATE TABLE bonheur_customer_detail_tbl( ".
"customer_id INT NOT NULL AUTO_INCREMENT, ".
"customer_fullname VARCHAR(50) NOT NULL, ".
"customer_birthday DATE NOT NULL, ".
"customer_phone_number VARCHAR(12) NOT NULL, ".
"region VARCHAR(30) NOT NULL, ".
"province VARCHAR(30) NOT NULL, ".
"city VARCHAR(30) NOT NULL, ".
"barangay VARCHAR(30) NOT NULL, ".
"postal_code VARCHAR(4) NOT NULL, ".
"detailed_address VARCHAR(60) NOT NULL, ".
"PRIMARY KEY ( customer_id )
); ";
mysql_select_db( 'bryan' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
die('Could not create table: ' . mysql_error());
incl    ude('footer.php');    
}
echo "Table bonheur_customer_detail_tbl Created Successfully\n";
mysql_close($conn);
}
?>

    
<form method = "post" action = "<?php $_PHP_SELF ?> ">
    <div class="container">    
        <input class="btn btn-default" type="submit" name="create_tbl" id="create_tbl" value="Create Table">
    </div>    
</form>        
        
        <!----- FOOTER ------>
        <?php include('footer.php');?>
    
    </body>
</html>