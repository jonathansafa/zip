<!DOCTYPE html>
<html lang="en">

    <?php include_once 'head.php' ?>

    <body id="page-top">
        <style>
/*            body {
                font-family: "Lato", sans-serif;
                transition: background-color .5s;
            }*/

            .sidenav1 {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 1;
                top: 0;
                right: 0;
                background-color: #111;
                overflow-x: hidden;
                transition: 0.5s;
                padding-top: 60px;
            }

            .sidenav1 a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: #818181;
                display: block;
                /*transition: 0.3s;*/
            }

            .sidenav1 a:hover {
                color: #f1f1f1;
            }

            .sidenav1 .closebtn {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
                margin-left: 50px;
            }

            #main {
                transition: margin-right .5s;
            }

            @media screen and (max-height: 450px) {
                .sidenav {padding-top: 15px;}
                .sidenav a {font-size: 18px;}
            }

            #main.is-open{
                margin-right : 250px;
                margin-left: -250px;
            }
            #mySidenav.is-open{
                width:250px; 
            }
        </style>

        <div id="mySidenav" class="sidenav1">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
        </div>
        <div id="main">
            <?php include_once 'navbar.php' ?>
            <!-- Header -->
            <header class="masthead">
                <div class="container">
                    <div class="row intro-text">
                        <div class="col-md-6 col-sm-12 col-xs-12 pad-bottom">
                            <div class="closed-header">Closed Captions &amp; Delivery Service</div>
                            <div class="closed-header-text">We'll caption and deliver your tv show to any network in under 72 hours. Guaranteed.</div>
                            <div class="text-left"><a class="btn btn-default btn-xl "  onclick="openNav()" href="javascript:void(0)">Start Your First Order</a></div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <img class="home-head-img" src="img/home/99.png" alt=""/>
                        </div>

                    </div>
                </div>
            </header>

            <section id="workedwith">
                <div class="container">
                    <h3 class="worked-with-h3">Who We Work With</h3>
                    <div class="text-center"><img src="img/home/worked_with.png" alt=""/></div>
                </div>
            </section>

            <!-- Complince -->
            <section id="complince">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12 pad-bottom text-view">
                            <div class="compliance-head-main">
                                <div class="compliance-head">We worry about FCC Compliance</div>
                                <div class="compliance-head">so you don't have to.</div>
                            </div>
                            <div class="compliance-head-text">Our captions are compliant with all FCC standards for accuracy.</div>
                            <div class="compliance-head-text">Screen placement and timing.</div>
                            <div class="fcc-btn text-left"><a class="btn-gray btn btn-default btn-xl" href="faq.php">Visit FAQ Page</a></div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 ">
                            <img src="img/home/complince.png" class="img-view" alt="" />
                        </div>
                    </div>
                </div>
            </section>

            <!-- Fast -->
            <section id="fast">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 col-xs-12 ">
                            <img src="img/home/fast.png" class="img-view" alt="" />
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12 pad-bottom text-view">
                            <div class="compliance-head-main">
                                <div class="compliance-head">Blazing Fast</div>
                                <div class="compliance-head">Any network in 72 hours or less</div>
                            </div>
                            <div class="compliance-head-text">Speed is our priority.</div>
                            <div class="compliance-head-text">We promise to deliver final version of your television show complete with closed captioning to any qualifying network in 72 hours. Guaranteed</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Complince -->
            <section id="order">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12 pad-bottom text-view">
                            <div class="compliance-head-main">
                                <div class="compliance-head">Keep track of your orders </div>
                                <div class="compliance-head">and receive delivery updates.</div>
                            </div>
                            <div class="compliance-head-text">We'll notify you when networks</div>
                            <div class="compliance-head-text">receive your files and will let you know </div>
                            <div class="compliance-head-text">of any unforseen complications.</div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 ">
                            <img src="img/home/orders.png" class="img-view" alt="" />
                        </div>
                    </div>
                </div>
            </section>


            <!-- Review -->
            <section id="review">
                <section class="testimonials" id="testimonials_wrap">
                    <div class="page-width">
                        <div class="testimonials__headline">
                            <div class="review-title">#1 IN CUSTOMER SERVICE</div>
                            <h1 class="desk-view">What our </h1>
                            <h1 class="desk-view">clients keep</h1>
                            <h1 class="desk-view">telling us.</h1>
                            <h1 class="mob-view">What our clients keep telling us.</h1>
                        </div>
                        <div class="testimonial" id="testimonial_1" style="background-image: url('img/bg/reviews-bg-white1.png')">
                            <p>“You have streamlined our process, making it easier than ever to deliver programs. We couldn't be happier with the service you all have provided!”</p>
                            <p class="text-left testimonial-name">- Church by the Glades</p>
                            <p class="text-left testimonial-name-sub">Orlando, Florida</p>
                        </div>
                        <div class="testimonial" id="testimonial_2" style="background-image: url('img/bg/reviews-bg-white1.png')">
                            <p>“These prices really are unbeatable.The best in the business.”</p>
                            <p class="testimonial-name">- Middle east TV</p>
                            <p class="text-left testimonial-name-sub">Orange Country, California</p>
                        </div>
                        <div class="testimonial" id="testimonial_3" style="background-image: url('img/bg/reviews-bg-white1.png')">
                            <p>“YES! Such good people , such good work. Delivered on time, everytime.”</p>
                            <p class="testimonial-name">- WPBF</p>
                            <p class="text-left testimonial-name-sub">West Plam Beach, Florida</p>
                        </div>
                        <div class="testimonial" id="testimonial_4" style="background-image: url('img/bg/reviews-bg-white1.png')">
                            <p>“We have worked together for many years and couldn't be happier with the service provided. Thank you!!”</p>
                            <p class="testimonial-name">- Trinity Broadcasting</p>
                            <p class="text-left testimonial-name-sub">Orange Country, California</p>
                        </div>
                        <div>

                        </div>
                    </div>
                </section>
                <section class="footer-review" >
                    <div class="footer-review-head">Get started with your videos today!</div>
                    <div class="text-center"><a class="btn btn-default btn-xl  open-nav" href="javascript:void(0)">Place Your First Order</a></div>
                </section>
            </section>

            <?php include_once 'footer.php'; ?>

            <script>
                function openNav() {
                    $('#mySidenav').toggleClass('is-open');
                    $('#main').toggleClass('is-open');
//                    document.getElementById("mySidenav").style.width = "250px";
//                    document.getElementById("main").style.marginRight = "250px";
//                    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
                }

                function closeNav() {
                    document.getElementById("mySidenav").style.width = "0";
                    document.getElementById("main").style.marginRight = "0";
                    document.body.style.backgroundColor = "white";
                }
            </script>
        </div>

    </body>

</html>
