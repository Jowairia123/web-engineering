<!DOCTYPE html>
<html>
    <head>
        <title>T-Shirts Style</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
        <div class="container-fluid">
            <div class="container">
    <!-- Top most bar -->
                <div class="row">  
                    <div class="col-sm-12 col-md-5 col-lg-8">
                        <span>30% off </span>Custom Printed Apparel with<span> Free 8-Day Delivery</span>
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-3">                                        
                        <a href="#account"><img src="img/account.png" alt="account"/> My Account</a>
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-1">                                      
                        <a href="#carts"><img src="img/cart.png" alt="cart"/> Cart</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- Navbar -->        
        <nav class="navbar">
            <div class="container">
                <div class="row navbar-header">  
                    <div class="col-xs-6 col-sm-12 col-md-5 col-lg-7">
                        <a class="navbar-brand" href="t-shirts.com"><img src="img/logo.png" alt="logo"/></a>                            
                    </div>

                    <div class="col-xs-6 col-sm-12 col-md-5 col-lg-6">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button> 
                    </div>                    
                </div>
    <!-- Links -->             
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right"> 
                        <li><button type="button" class="btn btn-default">Design Now</button></li>                                                        
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="https://www.rushordertees.com">
                                Products <span class="caret"></span></a>
    <!-- Products Drop down -->                            
                            <ul class="dropdown-menu">                                   
                                <li><a href="secondPage.html">T-Shirts</a></li>
                                <li><a href="#home">Womens</a></li>
                                <li><a href="#home">Sweatshirts</a></li>
                                <li><a href="#home">Business & Polos</a></li>
                                <li><a href="#home">Athleticwear</a></li>
                                <li><a href="#home">Hats</a></li>
                                <li><a href="#home">Embroidery</a></li>
                                <li><a href="#home">No Minimum</a></li>
                                <li class="divider"></li>
                                <li><a href="#home">View All</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#home">Services
                            <span class="caret"></span></a>
    <!-- Services Drop down -->
                            <ul class="dropdown-menu">
                                <li><a href="secondPage.html">Screen Printing</a></li>
                                <li><a href="#home">Embroidery</a></li>
                                <li><a href="#home">Rush T-Shirt Delivery</a></li>
                                <li><a href="#home">Design Review & Repair</a></li>
                                <li><a href="#home">Samples</a></li>
                                <li class="divider"></li>
                                <li><a href="#home">View All</a></li>                                   
                            </ul>
                        </li>
                        <li><a href="#home" class="active">Templates</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#home">Help
                            <span class="caret"></span></a>
    <!-- Help Drop down -->
                            <ul class="dropdown-menu">
                                <li><a href="#home">Contact Us</a></li>
                                <li><a href="#home">Reordering</a></li>
                                <li><a href="#home">Shipping & Delivery</a></li>
                                <li><a href="#home">Satisfaction Guarantee</a></li>
                                <li><a href="#home">Artwork Assistance</a></li>
                                <li><a href="#home">FAQ</a></li>
                                <li><a href="#home">Pricing</a></li>
                                <li><a href="#home">Payments</a></li>
                                <li class="divider"></li>
                                <li><a href="#home">View All</a></li>                                   
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#home">About
                            <span class="caret"></span></a>
    <!-- About Drop down -->
                            <ul class="dropdown-menu">
                                <li><a href="#home">Reviews</a></li>
                                <li><a href="#home">Our Story</a></li>
                                <li><a href="#home">Awards</a></li>
                                <li><a href="#home">Our Team</a></li>
                                <li><a href="#home">Careers</a></li>
                                <li><a href="#home">In The Press</a></li>
                                <li class="divider"></li>
                                <li><a href="#home">View All</a></li>                                   
                            </ul>
                        </li>
                        <li><img src="img/tel .png" alt="tel"/></li>
                        <li><a href="num">(800) 620-1233</a>Call Us 7 Days A Week</li>     
                    </ul>
                </div>         
            </div>
        </nav> 
        <div class = "container">
            <h1>Custom T-Shirts</h1> 
            <p>Choose custom t-shirts in all styles and colors at the best possible prices. 
                Find the perfect custom t-shirt for your events, meetings, schools, universities, 
                and promotional events.
            </p>
        </div>          
        <div class="container">
            <div class="row">  
    <!--Side Navbar -->
                <div class="col-sm-12 col-md-5 col-lg-3">
                    <div class="list-group">                           
                        <a href="secondPage.html" class="list-group-item">All Products
                        <p class="list-group-item-text"> T-Shirts</p>
                        <?php                                                  
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $databasename = "assignment2";

                            // Create connection
                            $conn = mysqli_connect($servername, $username, $password, $databasename);

                            // Check connection
                            if (!$conn)
                            {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            // Create Query
                            $str = "select name from categories where id = 1";
                            $res = mysqli_query($conn, $str);
                            $row = mysqli_fetch_array($res);
                            echo "<a href='secondPage.html' class='list-group-item'>".
                                    $row['name']."</a>"; 

                            $sql = "select name from products";
                            $result = mysqli_query($conn, $sql);
                            $record = mysqli_fetch_array($result);                           
                            echo "<a href='#deco' class='list-group-item'>".
                                    $record['name']."</a>";
                            
                            $count = 1;

                            while($record = mysqli_fetch_array($result))
                            {
                                echo "<a href='#list' class='list-group-item'>".
                                $record['name']."</a>"; 
                                $count++;
                                if($count == 7)
                                {
                                    break;
                                }
                            }
                        ?>
                    </div>
                </div> 
    <!-- 2nd column -->
                <div class="col-xs-4 col-sm-12 col-md-5 col-lg-9 pics">
                    <img src="img/default.jpg" alt="girl"/>   
                    <div class="center"><a href="secondPage.html">SHOP NOW</a></div>
                </div>
            </div>
        </div>
        <div class = "container-fluid b">                
            <div class="row">  
                <div class="col-xs-4  col-md-5 col-lg-4">
                    <h3><span class="badge">1</span>Pick a Product</h3>
                    <img class="img-responsive" src="img/first.png" alt="first"/>
                    <p>We have hundreds of products to choose from in our catalog. 
                        We have apparel available in sizes from infants to adults.</p>
                </div>

                <div class="col-md-5 col-lg-4">
                    <h3><span class="badge">2</span>Design Your Apparel</h3>
                    <img class="img-responsive" src="img/second.png" alt="second"/>
                    <p>Create a custom design using our templates or clipart. 
                        Already have a design? Upload it in our Design Studio and place it on the 
                        garment.</p>
                </div>

                <div class="col-md-5 col-lg-4">
                    <h3><span class="badge">3</span>Checkout</h3>
                    <img class="img-responsive" src="img/third.png" alt="third"/>
                    <p>The only thing left to do is select a delivery date for your custom apparel. 
                        Our rush deliveries guarantee you’ll get your order on time.</p>
                </div>
            </div>
        </div>                
        <div class="container p">
            <div class="row">  
                <div class="col-xs-4 col-sm-12 col-md-5 col-lg-4">
                    <img class="img-responsive" src="img/ball.png" alt="ball"/>
                    <p>Official Partner of the Philadelphia 76ers</p>
                </div>
                <div class="col-xs-4 col-sm-12 col-md-5 col-lg-4">
                    <img class="img-responsive" src="img/inc.png" alt="inc"/>
                    <p>Recognized as One of the Fastest Growing Private Companies in America</p>
                </div>
                <div class="col-xs-4 col-sm-12 col-md-5 col-lg-4">
                    <img class="img-responsive" src="img/newyork.png" alt="newyork"/>
                    <p>Featured in the New York Times Business Section</p>
                </div>
            </div>
        </div>

        <div class="container-fluid last">
            <div class ="container">
                <div class="row">  
                    <div class="col-sm-12 col-md-5 col-lg-4">                                
                        <img src="img/white logo.png" alt="white"/>
                        <p>T-shirt printing is an art form, 
                            and nothing makes us happier than creating your masterpiece. 
                            We have assembled an amazing team of the world’s best and brightest 
                            designers, printers and project specialists who are available 7 days a week
                            to make sure even the most complicated order is a breeze.
                        </p>
                    </div>

                    <div class="col-sm-12 col-md-5 col-lg-4">
                        <h3>WE'RE HERE TO HELP</h3>
                        <ul>
                            <li><a href="footer">
                                <img class="img-responsive" src="img/phone.png" alt="phone"/> 
                                Call (800) 620-1233</a></li>
                            <li><a href="footer">
                                <img class="img-responsive" src="img/chat.png" alt="chat"/> 
                                Chat with a specialist now</a></li>                                  
                            <li><a href="footer">
                                <img class="img-responsive" src="img/mail.png" alt="mail"/>
                                Shoot us an email</a></li>
                            <li><a href="footer">
                                <img class="img-responsive" src="img/location.png" alt="location"/> 
                                    2727 Commerce Way, Phila PA 19154</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-12 col-md-5 col-lg-4">
                        <img class="img-responsive" src="img/badge.png" alt="footer"/>
                        <h2> 9,902 </h2>
                        <span id="i">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        </span>
                        <p id="end"> CERTIFIED REVIEWS</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
