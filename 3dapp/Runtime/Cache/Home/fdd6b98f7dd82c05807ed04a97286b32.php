<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>3D app  Home</title>
   
    <link rel="stylesheet" href="/~yy414/3dapp/assignmnet/Public/css/style-starter.css">
</head>
<!--/Header-->

<body>
	  <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <h1><a class="navbar-brand pe-xl-5 pe-lg-4" href="index.html">
                        My<span class="log">Coca-Cola</span>
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link <?php if($dao == 1): ?>active<?php endif; ?>" aria-current="page" href="https://users.sussex.ac.uk/~yy414/3dapp/assignmnet/">Home</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link <?php if($dao == 2): ?>active<?php endif; ?>" href="https://users.sussex.ac.uk/~yy414/3dapp/assignmnet/index.php/Home/Index/StatementOfOriginality">Statement Of Originality</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($dao == 3): ?>active<?php endif; ?>" href="https://users.sussex.ac.uk/~yy414/3dapp/assignmnet/index.php/Home/Index/models">Models</a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" href="javascript::" onclick="contact()">Contact</a>
                        </li>

                    </ul>
                    
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//Header-->
    <!--//Banner-slider-->
    <section class="w3l-main-slider banner-slider position-relative" id="home">
        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <div class="slider-info banner-view banner-top1">
                    <div class="container">
                        <div class="banner-info header-hero-19">
                            <p class="w3hny-tag"><h3 class="title-hero-19">Coca Cola Great Britain</h3></p>
                            <p class="w3hny-tag"><h4 style="color:red">Founded in 1886 Dr John S Pemberton</h4></div>
							<p class="w3hny-tag">
                        The Coca Cola Company is the world's leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands.
                    </p>
                            

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- //main-slider -->
   
   <section class="w3l-feature-with-photo-1" id="ab">
        <div class="feature-with-photo-hny py-5">
            <div class="container py-lg-5">
                <div class="ab-in-flow row mb-lg-5 mb-3">

                    <div class="col-lg-6 ab-right mb-lg-0 mb-4">
                        
                        <h3 class="title-w3l mb-4"><?php echo ($list[0]['title']); ?>

                        </h3>
                        <p class=""><?php echo ($list[0]['content']); ?></p>
                        

                        <div class="w3l-buttons mt-sm-5 mt-4">
                            <a class="btn btn-primary btn-style" href="<?php echo ($list[0]['url']); ?>">Read More</a>

                        </div>
                    </div>
                    <div class="col-lg-6 ab-left ps-lg-5">
                        <img src="<?php echo ($list[0]['img']); ?>" alt="" class="img-fluid radius-image">
                    </div>
                </div>

            </div>
        </div>
    </section>
	<section class="w3l-services-page w3l-bg-grey py-5" id="ab" >
        <div class="feature-with-photo-hny py-5">
            <div class="container py-lg-5">
                <div class="ab-in-flow row mb-lg-5 mb-3">

                    <div class="col-lg-6 ab-right mb-lg-0 mb-4">
                        
                        <h3 class="title-w3l mb-4"><?php echo ($list[0]['title1']); ?>

                        </h3>
                        <p class=""><?php echo ($list[0]['content1']); ?></p>
                        

                        <div class="w3l-buttons mt-sm-5 mt-4">
                            <a class="btn btn-primary btn-style" href="<?php echo ($list[0]['url1']); ?>">Read More</a>

                        </div>
                    </div>
                    <div class="col-lg-6 ab-left ps-lg-5">
                        <img src="<?php echo ($list[0]['img1']); ?>" alt="" class="img-fluid radius-image">
                    </div>
                </div>

            </div>
        </div>
    </section>
	<section class="w3l-feature-with-photo-1" id="ab">
        <div class="feature-with-photo-hny py-5">
            <div class="container py-lg-5">
                <div class="ab-in-flow row mb-lg-5 mb-3">

                    <div class="col-lg-6 ab-right mb-lg-0 mb-4">
                        
                        <h3 class="title-w3l mb-4"><?php echo ($list[0]['title2']); ?>

                        </h3>
                        <p class=""><?php echo ($list[0]['content2']); ?></p>
                        

                        <div class="w3l-buttons mt-sm-5 mt-4">
                            <a class="btn btn-primary btn-style" href="<?php echo ($list[0]['url2']); ?>">Read More</a>

                        </div>
                    </div>
                    <div class="col-lg-6 ab-left ps-lg-5">
                        <img src="<?php echo ($list[0]['img2']); ?>" alt="" class="img-fluid radius-image">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//w3llets-work-->
    <!--/footer-->
    <footer class="w3l-footer">
        <div class="w3l-footer-16 py-5">
            <div class="container py-md-5">
                <div class="row footer-p">
                    <div class="col-lg-6 col-md-6 pe-lg-5">
                        <h2 class="footerw3l-logo"><a class="navbar-brand" href="index.html">
                                My<span class="log">Coca-Cola</span>
                            </a></h2>

                    </div>
                    <div class="col-lg-6 col-md-6">
                        
                    </div>
                </div>
                <div class="row footer-p mt-5 pt-lg-4">
                    <div class="col-lg-4 col-md-6 pe-lg-5">
                        <div class="column">
                            <h3>Phone</h3>
                            <p><a href="tel:+(21) 255 088 4943">+(21) 255 088 4943</a></p>
                        </div>

                        

                    </div>
                    <div class="col-lg-4 col-md-6">

                        <div class="column">
                            <h3>Support</h3>
                            <p><a href="mailto:finagenc@mail.com" class="mail">finagenc@mail.com</a></p>
                        </div>
                        

                    </div>
                    <div class="col-lg-4 col-md-6">

                        <div class="column">
                            <h3>Contact</h3>
                            <p><a href="mailto:contact@mail.com" class="mail">contact@mail.com</a></p>
                        </div>
                       

                    </div>
                </div>

                <div class="below-section pt-lg-4 mt-5">
                    <div class="row">

                        <p class="copy-text col-lg-7">Copyright &copy; 2024
                        </p>
                        <div class="col-lg-5 w3footer-gd-links d-flex">

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	<!--/Js-scripts-->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-arrow-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>
    <!-- //move-top-->
    <!-- Template JavaScript -->
   <script src="/~yy414/3dapp/assignmnet/Public/js/jquery.min.js"></script>	
    <script src="/~yy414/3dapp/assignmnet/Public/js/theme-change.js"></script>
    
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- //bootstrap -->
    <script src="/~yy414/3dapp/assignmnet/Public/js/bootstrap.min.js"></script>
    <script>

   function contact(){
   
     alert("E-mail:yy414@sussex.ac.uk");
   
   }

</script>
    <!-- //footer -->
    
</body>

</html>