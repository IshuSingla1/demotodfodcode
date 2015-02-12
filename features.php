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

<body class="features-page">    
    <!-- ******HEADER****** --> 
    <?php require_once 'components/header.php' ?>
    
    <div class="headline-bg">
    </div><!--//headline-bg-->         
    
    <!-- ******Video Section****** --> 
    <section class="features-video section section-on-bg">
        <div class="container text-center">          
            <h2 class="title">Take a quick tour to see how it works</h2>
            <div class="video-container">
                <iframe src="//player.vimeo.com/video/90299717?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div><!--//video-container--> 
        </div><!--//container-->
    </section><!--//feature-video-->
    
    <!-- ******Features Section****** -->       
    <section class="features-tabbed section">
        <div class="container">
            <h2 class="title text-center">Product Features</h2>
            <div class="row">
                <div class=" text-center col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs text-center" role="tablist">
                        <li class="active"><a href="#feature-1" role="tab" data-toggle="tab"><i class="fa fa-cloud-upload"></i><br /><span class="hidden-sm hidden-xs">Feature One</span></a></li>
                        <li><a href="#feature-2" role="tab" data-toggle="tab"><i class="fa fa-tachometer"></i><br /><span class="hidden-sm hidden-xs">Feature Two</span></a></li>
                        <li><a href="#feature-3" role="tab" data-toggle="tab"><i class="fa fa-photo"></i><br /><span class="hidden-sm hidden-xs">Feature Three</span></a></li>
                        <li class="last"><a href="#feature-4" role="tab" data-toggle="tab"><i class="fa fa-users"></i><br /><span class="hidden-sm hidden-xs">Feature Four</span></a></li>
                    </ul><!--//nav-tabs-->
                    
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="feature-1">
                            <h3 class="title sr-only">Feature One</h3>                                    
                            <figure class="figure text-center">
                                <img class="img-responsive" src="assets/images/features/screenshot-1.png" alt="" />
                                <figcaption class="figure-caption">(Screenshot source: Coral - App &amp; website startup kit)</figcaption>
                            </figure>
                            <div class="desc text-left">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc congue leo mauris, a fringilla nisi posuere tincidunt. Aliquam elementum lorem eget sollicitudin suscipit.</p>
                                <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-star"></i>Lorem ipsum dolor sit amet.</li>
                                    <li><i class="fa fa-star"></i>Aliquam tincidunt mauris eu risus.</li>
                                    <li><i class="fa fa-star"></i>Ultricies eget vel aliquam libero.</li>
                                    <li><i class="fa fa-star"></i>Maecenas nec odio.</li>
                                </ul>
                                
                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                            </div><!--//desc-->
                        </div><!--//tab-pane-->
                        <div class="tab-pane" id="feature-2">
                            <h3 class="title sr-only">Feature Two</h3>                                    
                            <figure class="figure text-center">
                                <img class="img-responsive" src="assets/images/features/screenshot-2.png" alt="" />
                                <figcaption class="figure-caption">(Screenshot source: Coral - App &amp; website startup kit)</figcaption>
                            </figure>
                            <div class="desc text-left">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc congue leo mauris, a fringilla nisi posuere tincidunt. Aliquam elementum lorem eget sollicitudin suscipit.</p>
                                <p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id nulla at libero ultricies tempus. Duis porta justo quam, ut ultrices felis posuere sit amet. Sed imperdiet bibendum est, sit amet sagittis ante sagittis eu. <a href="#">Integer fringilla</a> a purus sit amet laoreet. Ut consequat volutpat sapien sed lobortis. Nullam laoreet vitae justo nec dignissim. 
                                </p>
                                <blockquote>
                                    <p>Viverra magna pellentesque in magnis gravida sit augue felis vehicula vestibulum semper penatibus justo ornare semper Gravida felis platea arcu mus non. Montes at posuere. Natoque.</p>
                                </blockquote>
                                
                            </div><!--//desc-->
                        </div><!--//tab-pane-->
                        <div class="tab-pane" id="feature-3">
                            <h3 class="title sr-only">Feature Three</h3>
                            <figure class="figure text-center">
                                <img class="img-responsive" src="assets/images/features/screenshot-3.png" alt="" />
                                <figcaption class="figure-caption">(Screenshot source: Coral - App &amp; website startup kit)</figcaption>
                            </figure>
                            <div class="desc text-left">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc congue leo mauris, a fringilla nisi posuere tincidunt. Aliquam elementum lorem eget sollicitudin suscipit.</p>
                                
                                <p>Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                                
                                <div class="table-responsive">  
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nullam consequat</th>
                                                <th>Commodo metus</th>
                                                <th>Dapibus porta</th>
                                                <th>Sed porta</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Faucibus purus</td>
                                                <td>Aliquam sit</td>
                                                <td>Sed porta leo</td>
                                                <td>Duis ut ornare dui</td>
                                            </tr>
                                            <tr>
                                                <td>Condimentum</td>
                                                <td>Curabitur tempus</td>
                                                <td>Fusce vehicula</td>
                                                <td>Nasceturs</td>
                                            </tr>
                                            <tr>
                                                <td>Neque a condimentum</td>
                                                <td>Cum sociis natoque</td>
                                                <td>Penatibus magnis</td>
                                                <td>Curabitur</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!--//table-responsive-->
                            </div><!--//desc-->                                    
                        </div><!--//tab-pane-->
                        <div class="tab-pane" id="feature-4">
                            <h3 class="title sr-only">Feature Four</h3>                                    
                            <figure class="figure text-center">
                                <img class="img-responsive" src="assets/images/features/screenshot-4.png" alt="" />
                                <figcaption class="figure-caption">(Screenshot source: Coral - App &amp; website startup kit)</figcaption>
                            </figure>
                            <div class="desc text-left">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc congue leo mauris, a fringilla nisi posuere tincidunt. Aliquam elementum lorem eget sollicitudin suscipit.</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu</p>
                                <p class="box">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id nulla at libero ultricies tempus. Duis porta justo quam, ut ultrices felis posuere sit amet. Sed imperdiet bibendum est, sit amet sagittis ante sagittis eu. Ut consequat volutpat sapien sed lobortis. Nullam laoreet vitae justo nec dignissim.
                                </p>
                            </div><!--//desc-->
                        </div><!--//tab-pane-->
                    </div><!--//tab-content-->
                </div><!--//col-md-x-->
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//features-tabbed-->
    
    <!-- ******Steps Section****** --> 
    <section class="steps section">
        <div class="container">
            <h2 class="title text-center">3 Simple Steps to Get you started with Velocity</h2>
            <div class="row">
                 <div class="step text-center col-md-4 col-sm-4 col-xs-12">
                     <h3 class="title"><span class="number">1</span><br /><span class="text">Sign up</span></h3>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                 </div><!--//step-->
                 <div class="step text-center col-md-4 col-sm-4 col-xs-12">
                     <h3 class="title"><span class="number">2</span><br /><span class="text">Choose your lorem ipsum</span></h3>
                     <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                 </div><!--//step-->
                 <div class="step text-center col-md-4 col-sm-4 col-xs-12">
                     <h3 class="title"><span class="number">3</span><br /><span class="text">Start building ipsum</span></h3>
                     <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet.</p>
                 </div><!--//step-->
            </div><!--//row-->
            
            <div class="text-center"><a class="btn btn-cta btn-cta-primary" href="signup.html">Get Started - It's Free</a></div>
            
        </div><!--//container-->        
    </section><!--//steps-->
    
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

