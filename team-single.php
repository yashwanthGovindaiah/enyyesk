<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Ennyesk</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/ennyeskico.png">
    </head>
    <body>
        <!-- loader -->
        <div class="loader">
            <div id="movingBallG">
                <div class="movingBallLineG"></div>
                <div id="movingBallG_1" class="movingBallG"></div>
            </div>
        </div>
        <!-- loader end -->
        <!--================= main start ================-->
        <div id="main">
            <!--=============== header ===============-->	
            <?php 
             require_once 'header.php';
             ?> 
            <!--=============== wrapper ===============-->	
            <div id="wrapper">
                <!-- content-holder  -->
                <div class="content-holder">
                    <!-- Page title -->
                    <div class="dynamic-title">CEO</div>
                    <!-- Page title  end--> 
                    <!-- content  -->
                    <div class="content hor-content pad-con no-bg-con">
                        <section id="sec1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2 class="section-title">Mr.<strong> Karthik</strong></h2>
                                        <p>Mr. Karthik founded Ennyesk Design in 2013. After earning his engineering degree from
SJCE in Mysore, his love of architecture and design drove him to start training as an
intern for renowned architects early in his undergraduate years. Field experience as an
intern gave him insight into client expectations and budgets. He also observed that
many clients were deciding to build their villas with the assistance of nontechnical and
non-architect assistants out of fear of exorbitant fees. Also, the belief that hiring
professional architects would overshoot their budget would result in them feeling
exploited and disappointed.</p>
                                        <p>He believes that having ultimate confidence in God inspires him to think creatively about
how to make his clientele happy and content.</p>
                                        <div class="process-box">
                                            <h3>Responsibility</h3>
                                            <ul class="creat-list">
                                                <li><a href="#">Design</a></li>
                                                <li><a href="#">Architecture</a></li>
                                                <li><a href="#">Construction</a></li>
                                            </ul>
                                        </div>
                                        <h3 class="bold-title">Awards</h3>
										<p>Mr. Karthik is not only the finest at what he does, but he has also received numerous
awards for his architectural work, including multiple prizes for &quot;excellence in
architecture&quot;, such as:<br>
1. Spaciux.<br>
2. Times now.</p>
                                       
                                    </div>
                                    <div class="col-md-4">
                                        <div class="parallax-box" data-top-bottom="transform: translateY(-150px);" data-bottom-top="transform: translateY(150px);">
                                            <img src="images/ceo/Karthik.jpeg" class="respimg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- content end -->
                    <!-- content footer-->
                    <div class="height-emulator"></div>
     <?php 
                    require_once 'footer.php';
                     ?>
            <!-- Fixed footer end-->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </body>
</html>