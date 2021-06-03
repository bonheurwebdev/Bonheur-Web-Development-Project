<html>
    <head>
        <?php include('bootstrap_file.php');?>
        <style>
.hoverable{
  border: none;
  display:inline-block;
  backface-visibility: hidden;
  vertical-align: middle;
  position:relative;
  box-shadow: 0 0 0px rgba(0,0,0,0);
  tranform: translateZ(0);
  transition-duration: .3s;
  transition-property:transform;
}

.hoverable:before{
  position:absolute;
  pointer-events: none;
  z-index:-1;
  content: '';
  top: 100%;
  left: 5%;
  height:10px;
  width:90%;
  opacity:0;
  background: -webkit-radial-gradient(center, ellipse, #edaec0 0%, rgba(255, 255, 255, 0) 80%);
  background: radial-gradient(ellipse at center, #edaec0, rgba(255, 255, 255, 0) 80%);
  /* W3C */
  transition-duration: 0.3s;
  transition-property: transform, opacity;
}

.hoverable:hover, .hoverable:active, .hoverable:focus{
  transform: translateY(-5px);
}
.hoverable:hover:before, .hoverable:active:before, .hoverable:focus:before{
  opacity: 1;
  transform: translateY(-5px);
}



@keyframes bounce-animation {
  16.65% {
    -webkit-transform: translateY(8px);
    transform: translateY(8px);
  }

  33.3% {
    -webkit-transform: translateY(-6px);
    transform: translateY(-6px);
  }

  49.95% {
    -webkit-transform: translateY(4px);
    transform: translateY(4px);
  }

  66.6% {
    -webkit-transform: translateY(-2px);
    transform: translateY(-2px);
  }

  83.25% {
    -webkit-transform: translateY(1px);
    transform: translateY(1px);
  }

  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

.bounce {
  animation-name: bounce-animation;
  animation-duration: 2s;
}



/*everything below here is just setting up the page, so dont worry about it */


@media (min-width: 768px) {
  .navbar{
    text-align: center !important;
    float: none;
    display: inline-block;
  }
}

body {
  border: none;
  background-color: white;
  font-weight:600;
  text-align:center !important;
  color: #edaec0;
}

nav {
  background: none !important;
  text-transform:uppercase;
  border: 1px solid Transparent!important;;
  li {
    margin-left: 3em;
    margin-right: 3em;
    a{
      transition: .5s color ease-in-out;
    }
  }
}
.page-title {
  opacity: .75 !important;
}

        </style>
    </head>
    <body>
 <div class="container-fluid">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">   
      <ul class="nav navbar-nav">
        <li><a id="len1" style = "color: #e3bc9a" class="hoverable" href="product_dresses.php">Dress</a></li>
        <li><a id="len2" style = "color: #e3bc9a" class="hoverable" href="product_tops.php">Tops</a></li>
        <li><a id="len3" style = "color: #e3bc9a" class="hoverable" href="product_tees.php">Tees</a></li>
        <li><a id="len4" style = "color: #e3bc9a" class="hoverable" href="#">Lingerie</a></li>
        <li><a id="len4" style = "color: #e3bc9a" class="hoverable" href="product_pants.php">Pants</a></li>   
        <li><a id="len4" style = "color: #e3bc9a" class="hoverable" href="#">Other</a></li>
      </ul>
    </div>
  </nav>
</div>
    </body>
</html>