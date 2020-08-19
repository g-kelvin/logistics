<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="BDS Service is a privately owned family business established in 2015 in Belgium...." />
    <meta name="keywords" content="Parcel, Agency, Transport,Export, Import, Bwds, Best Services" />

    <!--====== TITLE TAG ======-->
   <title>Best World Delivery Services - BDS</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/stellarnav.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body class="home-two">

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area" id="home">
        <div class="top-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="header-top-area">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="#home" class="navbar-brand"><img src="img/logo.png" alt="logo"></a>
                        </div>
                        <div class="search-and-language-bar pull-right">
                            <ul>
                                <li><a href="#"><i class="fa fa-user"></i></a></li>
                                <li class="search-box"><i class="fa fa-search"></i></li>
                                <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                                <li class="select-language">
                                    <select name="#" id="#">
                                    <option selected value="End">ENG</option>
                                    <option value="ARA">ARA</option>
                                    <option value="CHI">CHI</option>
                                </select>
                                </li>
                            </ul>
                            <form action="#" class="search-form">
                                <input type="search" name="search" id="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div id="main-nav" class="stellarnav">
                            <ul id="nav" class="nav navbar-nav">
                                <li><a href="index.html">home</a></li>
                                  <li><a href="express.html">Express</a>
                                     <ul>
                                        <li><a href="express.html">BDS Express</a></li>
                                        <li><a href="tracking.html">Tracking</a></li>
                                        <li><a href="shipping.html">Export Services</a></li>
                                        <li><a href="ticket.html">Ticketing</a></li>
                                    </ul>

                                  </li>
                                  <li><a href="parcel-ecommerce.html">Parcel & eCommerce </a></li>
                                  <li><a href="shipping.html">Logistics</a></li>
                                  <li><a href="https://bwds.co.ke:2096/cpsess0675551474/webmail/paper_lantern/index.html?login=1&post_login=97388163579863">Mails</a></li>
                                  <li><a href="careers.html">Careers</a></li>
                                <li><a href="about.html">about</a>
                                    <ul>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="about-company-history.html">About History</a></li>
                                        

                                        <li><a href="service.html">Service</a>
                                    <ul>
                                        <li><a href="service.html">Services</a></li>
                                    </ul>
                                </li>


                                    </ul>

                                </li>



                                <li><a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>
        <div class="welcome-area">
            <div class="welcome-area-bg"></div>
            <div class="container">
                <div class="row flex-v-center">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="welcome-text text-center">
                            <h1>Successfully Tracked</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--END TOP AREA-->

   <?php
	 $con= mysqli_connect("localhost","bwdscoke", "oZG)K#8y0r26hB","bwdscoke_bwds");
	if(!$con){
		echo "Connection Aborted";
	}
	else{
		$search = $_POST['search'];
		
		$qry =  "SELECT * FROM parcels where id = '$search'";
		$res = mysqli_query($con,$qry);
		if(mysqli_num_rows($res)>0){
			while ($row= mysqli_fetch_assoc($res)){
				echo "<center><h3><br><br>Parcel Number: " .$row['id']."<br> Sent By: ". $row['name']." Sent To: ". $row['rname']."<br> From ". $row['town']." To ". $row['rtown']." Was Sent on ". $row['datee']." ".$row['timee']."</h3></center><br><br>";
			}
		}
		else{
			echo "<center style ='color: red'><h3><br><br>The Track Number is not Valid</h3></center><br><br>";
		}
	}
	


  ?>


    <!--FOOER AREA-->
    <div class="footer-area dark-bg">
        <div class="footer-area-bg"></div>
        <div class="footer-top-area wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="subscribe-content">
                            <h2>Track Your Shipment</h2>
                            <p>Kindly type your tracking unique number here</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="subscriber-form-area">
                            <form action="search.php" method="post" class="subsriber-form">
                                <label for="subscriber-mail"><i class="fa fa-envelope-o"></i></label>
                                <input type="text" name="search" placeholder="shipment Code">
                                <button type="submit">TRACK</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-border"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget footer-about">
                            <h3>About Us</h3>
                            <p style="color: white">BDS Supply ,  BDS Group, is the world’s leading contract logistics provider. Combining value-added and......<a href="about.html" style="color: blue">More</a></p>
                            <ul style="color: white">
                                <li><i class="fa fa-phone"></i> <a href="callto:+324 602 12339" style="color: white">+324 602 12339</a></li>

                                <li><i class="fad fa-paper-plane"></i> <a href="mailto:info@bds.co.ke" style="color: white">info@bds.co.ke</a></li>
                                <li><i class="fa fa-map-marker"></i>Bruges Beer Museum, Breidelstraat 3, 8000, Brugge, BEL, country-Belgium</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget twitter-widget">
                            <h3>Latest Tweets</h3>
                            <ul>
                                <li>
                                    <div class="twitter-icon"><i class="fa fa-phone"></i></div>
                                    <div class="tweet-detail" style="color: white">
                                        <p>We are always available, feel free to contact us. We deliver to your door step.</p>
                                        <a href="#" class="tweet-meta" style="color: yellow">5 Miniutes Ago</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="twitter-icon"><i class="fa fa-phone"></i></div>
                                    <div class="tweet-detail">
                                        <p style="color: white">We have started delivering parcels and loads in Ethiopia.</p>
                                        <a href="#" class="tweet-meta" style="color: yellow">30 Miniutes Ago</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget list-widget">
                            <h3>Quick Links</h3>
                            <ul style="color: white">
                                <li><a href="#" style="color: white">Home</a></li>
                                <li><a href="#" style="color: white">About Us</a></li>
                                <li><a href="#" style="color: white">Services</a></li>
                                <li><a href="#" style="color: white">Express</a></li>
                                <li><a href="#" style="color: white">Logistics</a></li>
                                <li><a href="#" style="color: white">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget instafeed-widget">
                            <h3>Customer Service</h3>
                            <ul>
                                <li><a href="#"><img src="img/instafeed/1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/instafeed/2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/instafeed/3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/instafeed/4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/instafeed/5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/instafeed/6.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-border"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="footer-copyright wow fadeIn">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Best World Deliveries Services  </p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="footer-social-bookmark text-right wow fadeIn">
                            <ul class="social-bookmark">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FOOER AREA END-->


    <!--====== SCRIPTS JS ======-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="js/vendor/jquery.easing.1.3.js"></script>
    <script src="js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/vendor/jquery.appear.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/stellarnav.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="js/main.js"></script>
</body>

</html>

