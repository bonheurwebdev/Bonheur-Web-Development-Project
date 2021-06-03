<html>
    <style>
        
    /* CONNECT */
        .social a{
            font-size: 3em;
            padding: 3rem;
        }
        .fa-facebook{color: #3b5998;}
        .fa-twitter{color: #00aced;}
        .fa-instagram{color: #517fa8;}
        .fa-youtube{color: #bb0000;}

        .fa-facebook:hover,
        .fa-twitter:hover,
        .fa-instagram:hover,
        .fa-youtube:hover{
            color: #d5d5d5;
        }

    /* FOOTER */ 
        footer{
            background-color: #F3C4BF;
            color: #d5d5d5;
            padding-top: 2rem
        }

        hr.light{
            border-top: 1px solid, #BC7B6A;
            width: 75%;
            margin-top: .8rem;
            margin-bottom: 1rem;
        }

/* Link Hover */

        footer a{
            display: block;
            color: darkgray;
            text-decoration: none;
            position: relative;
        }
        footer a::after{
            content: "";
            background: white;
            width: calc(100% + 20px);
            height: 0;
            position: absolute;
            bottom: -4px;
            left: -10px;
            transition: all .3s cubic-bezier(0.445, 1.05, 0.55, 0.95);
        }

        footer a:hover::after{height: calc(100% + 8px);}
    </style>
    <body>
       
    <!------ FOOTER ------>
        <footer>
            <div class="container-fluid padding">
                <div class="row text-center">
                    <div class="col-md-4" style="color: darkgrey">
                        <img src="Images/logo/hanger.png" style="height: 100px">
                        <hr class="light">
                        <p>Hotline</p>
                        <p>bonheur@gmail.com</p>
                        <p>Cainta, Rizal</p>
                    </div>
                    <div class="col-md-4" style="color: darkgrey">
                        <hr class="light">
                        <h5>Our Hours</h5>
                        <hr class="light">
                        <p>Weekdays: 10:00am - 5:oopm</p>
                        <p>Weekend: 12:00pm - 4:oopm</p>
                        <p>Holidays: Close</p>
                    </div>
                    <div class="col-md-4 nav nav-pills nav-stacked" style="color: darkgrey">
                        <hr class="light">
                        <h5>About Us</h5>
                        <hr class="light">
                        <a href="#">FAQS</a><br>
                        <a href="#">Contact Us</a><br>
                        <a href="#">Be a Member</a>
                    </div>
                    <div class="col-12" style="color: darkgrey">
                        <hr class="light-100">
                        <h5>Copyright Bonheur Apparel Co. 2021</h5>
                    </div>
                </div>  
            </div>   
        </footer> 
    </body>
</html>