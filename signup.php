<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Responsive website template for products</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300' rel='stylesheet' type='text/css'> 
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body class="signup-page access-page has-full-screen-bg">
    <div class="upper-wrapper">
        <!-- ******HEADER****** -->
        <?php require_once 'components/header.php' ?>
        
        <!-- ******Login Section****** --> 
        <section class="signup-section access-section section">
            <div class="container">
                <div class="row">
                    <div class="form-box col-md-8 col-sm-12 col-xs-12 col-md-offset-2 col-sm-offset-0 xs-offset-0">     
                        <div class="form-box-inner">
                            <h2 class="title text-center">Sign up now</h2>  
                            <p class="intro text-center">It only takes 3 minutes!</p>               
                            <div class="row">
                                <div class="form-container col-md-5 col-sm-12 col-xs-12">
                                    <form class="signup-form">                
                                        <div class="form-group email">
                                            <label class="sr-only" for="signup-email">Your email</label>
                                            <input id="signup-email" type="email" class="form-control login-email" placeholder="Your email">
                                        </div><!--//form-group-->
                                        <div class="form-group password">
                                            <label class="sr-only" for="signup-password">Your password</label>
                                            <input id="signup-password" type="password" class="form-control login-password" placeholder="Password">
                                        </div><!--//form-group-->
                                        <button type="submit" class="btn btn-block btn-cta-primary">Sign up</button>
                                        <p class="note">By signing up, you agree to our terms of services and privacy policy.</p>
                                        <p class="lead">Already have an account? <a class="login-link" id="login-link" href="login.html">Log in</a></p>  
                                    </form>
                                </div><!--//form-container-->
                                <div class="social-btns col-md-5 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-sm-offset-0">  
                                    <div class="divider"><span>Or</span></div>                      
                                    <ul class="list-unstyled social-login">
                                        <li><button class="twitter-btn btn" type="button"><i class="fa fa-twitter"></i>Sign up with Twitter</button></li>
                                        <li><button class="facebook-btn btn" type="button"><i class="fa fa-facebook"></i>Sign up with Facebook</button></li>
                                        <li><button class="github-btn btn" type="button"><i class="fa fa-github-alt"></i>Sign up with Github</button></li>
                                        <li><button class="google-btn btn" type="button"><i class="fa fa-google-plus"></i>Sign up with Google</button></li>
                                    </ul>
                                    <p class="note">Don't worry, we won't post anything without your permission.</p>
                                </div><!--//social-login-->
                            </div><!--//row-->
                        </div><!--//form-box-inner-->
                    </div><!--//form-box-->
                </div><!--//row-->
            </div><!--//container-->
        </section><!--//contact-section-->
    </div><!--//upper-wrapper-->
    
    <!-- ******FOOTER****** --> 
    <?php require_once 'components/footer.php' ?>
    
    <!-- *****CONFIGURE STYLE****** -->  
    <div class="config-wrapper">
        <div class="config-wrapper-inner">
            <a id="config-trigger" class="config-trigger" href="#"><i class="fa fa-cog"></i></a>
            <div id="config-panel" class="config-panel">
                <h5>Choose Colour</h5>
                <ul id="color-options" class="list-unstyled list-inline">
                    <li class="theme-1 active" ><a data-style="assets/css/styles.css" href="#"></a></li>
                    <li class="theme-2"><a data-style="assets/css/styles-2.css" href="#"></a></li>
                    <li class="theme-3"><a data-style="assets/css/styles-3.css" href="#"></a></li>
                    <li class="theme-4"><a data-style="assets/css/styles-4.css" href="#"></a></li>                   
                    <li class="theme-5"><a data-style="assets/css/styles-5.css" href="#"></a></li>                     
                    <li class="theme-6"><a data-style="assets/css/styles-6.css" href="#"></a></li>
                    <li class="theme-7"><a data-style="assets/css/styles-7.css" href="#"></a></li>
                    <li class="theme-8"><a data-style="assets/css/styles-8.css" href="#"></a></li>                    
                    <li class="theme-9"><a data-style="assets/css/styles-9.css" href="#"></a></li>
                    <li class="theme-10"><a data-style="assets/css/styles-10.css" href="#"></a></li>
                </ul><!--//color-options-->
                <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
            </div><!--//configure-panel-->
        </div><!--//config-wrapper-inner-->
    </div><!--//config-wrapper-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="assets/plugins/FitVids/jquery.fitvids.js"></script> 
    <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>  
    <script type="text/javascript" src="assets/js/main.js"></script>
    
            
</body>
</html> 

