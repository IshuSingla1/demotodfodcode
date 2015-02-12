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

<body class="blog-page blog-category-page">
    <div class="wrapper">
        <!-- ******HEADER****** --> 
        <header class="header navbar-fixed-top">  
            <div class="container">       
                <h1 class="logo">
                    <a href="blog.html">Velocity <span class="sub">Blog</span></a>
                </h1><!--//logo-->
                <nav class="main-nav navbar-right" role="navigation">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button><!--//nav-toggle-->
                    </div><!--//navbar-header-->
                    <div id="navbar-collapse" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Categories <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-category.html">Tech</a></li>
                                    <li><a href="blog-category.html">Apps</a></li>
                                    <li><a href="blog-category.html">News</a></li>
                                    <li><a href="blog-category.html">Community</a></li>              
                                </ul>                            
                            </li><!--//dropdown-->
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Archives <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-archive.html">Sep 2014 (5)</a></li>
                                    <li><a href="blog-archive.html">Aug 2014 (6)</a></li>
                                    <li><a href="blog-archive.html">July 2014 (3)</a></li>
                                    <li><a href="blog-archive.html">June 2014 (4)</a></li>              
                                </ul>                            
                            </li><!--//dropdown-->
                            <li class="nav-item nav-item-main-site last"><a href="index.html"><i class="fa fa-home"></i> Back to main site</a></li>
                        </ul><!--//nav-->
                        
                        <div class="searchbox-container">
                            <form class="searchbox">
                                <label class="sr-only" for="search-form">Search</label>
                                <input id="search-form" class="form-control searchbox-input" onkeyup="buttonUp();" placeholder="Search the blog..." type="search" value="" name="search-form">
                                <input class="searchbox-submit" type="submit" value="GO">
                                <i class="fa fa-search searchbox-icon"></i>
                            </form>
                        </div><!--//searchbox-container-->                                                
                        
                    </div><!--//navabr-collapse-->
                </nav><!--//main-nav-->         
            </div><!--//container-->
        </header><!--//header-->       
        
        <!-- ******BLOG LIST****** --> 
        <div class="blog blog-category container">
            <h2 class="page-title text-center"><i class="fa fa-folder-open"></i> Category: Tech</h2>
            <div class="row">
                <div class="blog-list blog-category-list">
                    <article class="post col-md-10 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                        <div class="post-inner">
                            <figure class="post-thumb">
                                <a href="blog-single.html"><img class="img-responsive" src="assets/images/blog/post-1.jpg" alt="" /></a>                                
                            </figure><!--//post-thumb-->
                            <div class="content">
                                <h3 class="post-title"><a href="blog-single.html">Ideas are easy, execution is hard</a></h3>
                                <div class="meta">
                                    <ul class="meta-list list-inline">                                       
                                    	<li class="post-time">16th Oct, 2014</li>
                                    	<li class="post-author"> by <a href="#">James Lee</a></li>
                                    	<li class="post-comments-link">
                                	        <a href="blog-single.html#comment-area"><i class="fa fa-comments"></i>8</a>
                                	    </li>
                                	</ul><!--//meta-list-->                           	
                                </div><!--meta-->
                                <div class="post-entry">
                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. </p>
                                    <a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
                                </div>                                
                            </div><!--//content-->
                        </div><!--//post-inner-->
                    </article><!--//post-->
                    
                    <article class="post col-md-10 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                        <div class="post-inner">
                            <figure class="post-thumb">
                                <a href="blog-single.html"><img class="img-responsive" src="assets/images/blog/post-6.jpg" alt="" /></a>                                
                            </figure><!--//post-thumb-->
                            <div class="content">
                                <h3 class="post-title"><a href="blog-single.html">Etiam imperdiet imperdiet orci</a></h3>
                                <div class="meta">
                                    <ul class="meta-list list-inline">                                       
                                    	<li class="post-time">24th Sep, 2014</li>
                                    	<li class="post-author"> by <a href="#">Stella	Harper</a></li>
                                    	<li class="post-comments-link">
                                	        <a href="blog-single.html#comment-area"><i class="fa fa-comments"></i>8</a>
                                	    </li>
                                	</ul><!--//meta-list-->                           	
                                </div><!--meta-->
                                <div class="post-entry">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lobortis mattis erat, dictum facilisis magna posuere ac. Curabitur consectetur magna mauris, et aliquam lectus ornare nec.</p>
                                    <a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
                                </div>                                
                            </div><!--//content-->
                        </div><!--//post-inner-->
                    </article><!--//post-->
                    
                    <article class="post col-md-10 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                        <div class="post-inner">
                            <figure class="post-thumb">
                                <a href="blog-single.html"><img class="img-responsive" src="assets/images/blog/post-9.jpg" alt="" /></a>                                
                            </figure><!--//post-thumb-->
                            <div class="content">
                                <h3 class="post-title"><a href="blog-single.html">Curabitur consectetur magna mauris</a></h3>
                                <div class="meta">
                                    <ul class="meta-list list-inline">                                       
                                    	<li class="post-time">18th Sep, 2014</li>
                                    	<li class="post-author"> by <a href="#">James Lee</a></li>
                                    	<li class="post-comments-link">
                                	        <a href="blog-single.html#comment-area"><i class="fa fa-comments"></i>8</a>
                                	    </li>
                                	</ul><!--//meta-list-->                           	
                                </div><!--meta-->
                                <div class="post-entry">
                                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
                                    <a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
                                </div>                                
                            </div><!--//content-->
                        </div><!--//post-inner-->
                    </article><!--//post-->
                    
                    <article class="post col-md-10 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                        <div class="post-inner">
                            <figure class="post-thumb">
                                <a href="blog-single.html"><img class="img-responsive" src="assets/images/blog/post-8.jpg" alt="" /></a>                                
                            </figure><!--//post-thumb-->
                            <div class="content">
                                <h3 class="post-title"><a href="blog-single.html">Phasellus accumsan</a></h3>
                                <div class="meta">
                                    <ul class="meta-list list-inline">                                       
                                    	<li class="post-time">12th Aug, 2014</li>
                                    	<li class="post-author"> by <a href="#">Adam Stevens</a></li>
                                    	<li class="post-comments-link">
                                	        <a href="blog-single.html#comment-area"><i class="fa fa-comments"></i>8</a>
                                	    </li>
                                	</ul><!--//meta-list-->                           	
                                </div><!--meta-->
                                <div class="post-entry">
                                    <p>Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa. Sed cursus turpis vitae tortor. Donec posuere vulputate arcu. Phasellus accumsan cursus velit.</p>
                                    <a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
                                </div>                                
                            </div><!--//content-->
                        </div><!--//post-inner-->
                    </article><!--//post-->
                    
                    <article class="post col-md-10 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                        <div class="post-inner">
                            <figure class="post-thumb">
                                <a href="blog-single.html"><img class="img-responsive" src="assets/images/blog/post-7.jpg" alt="" /></a>                                
                            </figure><!--//post-thumb-->
                            <div class="content">
                                <h3 class="post-title"><a href="blog-single.html">Vestibulum ante ipsum primis in faucibus</a></h3>
                                <div class="meta">
                                    <ul class="meta-list list-inline">                                       
                                    	<li class="post-time">12th Aug, 2014</li>
                                    	<li class="post-author"> by <a href="#">Adam Stevens</a></li>
                                    	<li class="post-comments-link">
                                	        <a href="blog-single.html#comment-area"><i class="fa fa-comments"></i>8</a>
                                	    </li>
                                	</ul><!--//meta-list-->                           	
                                </div><!--meta-->
                                <div class="post-entry">
                                    <p>Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.</p>
                                    <a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
                                </div>                                
                            </div><!--//content-->
                        </div><!--//post-inner-->
                    </article><!--//post-->
                                        
                </div><!--//blog-list-->  
            </div><!--//row-->
            <div class="pagination-container text-center">
                <ul class="pagination">
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul><!--//pagination-->
            </div><!--//pagination-container-->
        </div><!--//blog-->        
    </div><!--//wrapper-->
    
    <!-- ******FOOTER****** --> 
    <?php require_once 'components/footer.php' ?>
    
    <!-- Video Modal -->
    <div class="modal modal-video" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="videoModalLabel" class="modal-title sr-only">Video Tour</h4>
                </div>
                <div class="modal-body">
                    <div class="video-container">
                        <iframe src="//player.vimeo.com/video/28872840?color=ffffff&amp;wmode=transparent" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div><!--//video-container-->
                </div><!--//modal-body-->
            </div><!--//modal-content-->
        </div><!--//modal-dialog-->
    </div><!--//modal-->
    
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
      
    <!-- blog specific js starts --> 
    <script type="text/javascript" src="assets/plugins/imagesloaded/imagesloaded.pkgd.min.js"></script>     
    <script type="text/javascript" src="assets/plugins/masonry.pkgd.min.js"></script> 
    <script type="text/javascript" src="assets/js/blog.js"></script>    
    <!-- blog specific js ends --> 
    
    <script type="text/javascript" src="assets/js/main.js"></script>
    
            
</body>
</html> 

