<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Statement Of Originality</title>
    
    <!-- Template CSS -->
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
    <!-- breadcrumb -->
    <section class="w3l-about-breadcrumb">
        <div class="breadcrumb-bg breadcrumb-bg-about">
            <div class="container py-5">
                <div class="w3breadcrumb-gids text-center py-sm-5 py-4">
                    <div class="w3breadcrumb-info">
                        <h2 class="w3ltop-title">Statement Of Originality</h2>
                    </div>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="https://users.sussex.ac.uk/~yy414/3dapp/assignmnet/">Home</a></li>
                        <li class="active"><span class="fas fa-arrow-right mx-2"></span> Statement Of Originality</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
   
   
    <!--/contact-form-->
    <section class="w3l-contact-main" id="contact">
        <div class="contact-infhny py-5">
            <div class="container py-lg-5">
                <div class="top-map">
                    <div class="map-content-9">
                        
                            <div class="form-top1">
                                <div class="w3header-section text-center">
                                    
                                    <h3 class="title-w3l mb-0">
                                        Statement of Originality</h3>
                                    <p class="mb-lg-5 mb-5 text-center"><?php echo ($list[0]['content']); ?></p>
                                </div>

                              
                                
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//contact-form-->
	
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

</body>

</html>