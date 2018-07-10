<!DOCTYPE html>
<html lang="en">
    <link rel="canonical" href="https://zipcaptions.com" />
    <head>
        <meta name="description" content="A leader in closed captioning and delivery. Your tv shows captioned and delivered in 72 hours or less.">
        <title>zipcaptions.com | Home</title>
        <?php include_once 'head.php' ?>
        <link href="<?= SITE_URL ?>/css/pricing.css" rel="stylesheet" type="text/css">
    </head>
    <body id="page-top">
        <?php include_once 'sidebar-modal.php' ?>
        <div id="main-view">
            <?php include_once 'navbar.php' ?>
            <div class="Pricing-Header">
                <div class="Pricing-Header-container container-wide">
                    <div class="row center-xs">
                        <div class="col-xs-12">
                            <h1 class="Pricing-Header-title zip-pricing-PageTitle">
                                Simple, wallet-friendly pricing.
                                <span class="Pricing-Header-subTitle zip-pricing-PageSubtitle">Easy. Affordable. Fast.</span>
                            </h1>
                        </div>
                    </div>

                    <div class="row middle-xs center-xs">
                        <div class="plus-sign-div"><i class="fa fa-plus" aria-hidden="true"></i></div>
                        <div class="plan-padding-zero col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="Plan price-standard">
                                <h2 class="price-title zip-pricing-Uppercase">Captioning Only</h2>
                                <div class="price-cardPricing">
                                    <div class="price-cardRate">
                                        <div class="price-cardRate-fixed">
                                            $
                                        </div>
                                        <div class="price-cardRate-percent">
                                            50
                                        </div>
                                    </div>
                                    <div class="price-cardRate-description">
                                        per 30 minute program
                                    </div>
                                </div>
                                <ul class="price-list">
                                    <li class="price-listItem">
                                        <img src="<?= SITE_URL ?>/img/plan-star.svg" width="26" height="26" alt="fees icon">
                                        Include SSC, MCC, or a number of other formats.
                                    </li>
                                    <li class="price-listItem">
                                        <img src="<?= SITE_URL ?>/img/fcc.png" width="26" height="26" alt="pay icon">
                                        All our captions are fully FCC Compliant. 
                                    </li>
                                </ul>
                                <a href="javascript:void(0)"  class="price-button zip-pricing-Uppercase zip-pricing-Link-arrow open-nav">
                                    How to Order
                                </a>
                            </div>
                        </div>
                        <div class="plan-padding-zero col-xs-11 col-sm-6 col-md-6 col-lg-6">
                            <div class="Plan price-enterprise">
                                <h2 class="price-title price-title-enterprise zip-pricing-Uppercase">Encoding + delivery</h2>
                                <div class="price-cardPricing">
                                    <div class="price-cardRate">
                                        <div class="white-color price-cardRate-fixed">
                                            $
                                        </div>
                                        <div class="white-color price-cardRate-percent">
                                            50
                                        </div>
                                    </div>
                                    <div class="price-cardRate-description">
                                        per network delivered
                                    </div>
                                </div>
                                <div class="price-tableContainer">
                                    <table class="price-table">
                                        <tbody><tr class="price-table-row">
                                                <td class="price-table-cell price-table-cell-alternating">Any U.S. network</td>
                                                <td class="price-table-cell">under 72 hours</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="javascript:void(0)" onclick="openChat();" class="price-button price-Button-enterprise zip-pricing-Uppercase zip-pricing-Link-arrow">Contact Sales</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="TransfersAside">
                <div class="container">
                    <div class="row center-xs">
                        <div class="col-xs col-sm-12 col-md-9">
                            <img src="<?= SITE_URL ?>/img/stopwatch.png" width="50" height="50" alt="stop watch">
                            <p class="zip-pricing-BodyText TransfersAside-body">
                                <strong class="TransfersAside-title-head">ALL FILES: 72 hours or less</strong>
                            </p>
                            <p class="zip-pricing-BodyText TransfersAside-body">
                                <strong class="TransfersAside-title">Fast transfers.</strong>
                                We guarantee our captions arrive accurately and on time, every time.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="price-footer withCards">
                <section class="price-footer-sections">
                    <div class="container-xl">
                        <a class="zip-pricing-Link price-footer-section card-customers">
                            <img src="<?= SITE_URL ?>/img/business.png"/>
                            <h2 class="zip-pricing-Uppercase zip-pricing-Link-arrow">See our customers</h2>
                            <p class="zip-pricing-BodyText">From affiliate stations to the 3rd largest broadcast group in U.S. See some of the video producers that use zipcations.com to deliver their content.</p>
                        </a>

                        <a class="zip-pricing-Link price-footer-section card-documentation">
                            <img src="<?= SITE_URL ?>/img/icon-documents.png"/>
                            <h2 class="zip-pricing-Uppercase zip-pricing-Link-arrow">Download our required specs</h2>
                            <p class="zip-pricing-BodyText">Start prepping your video and begin captioning your first video in minutes.</p>
                        </a>


                    </div>
                </section>

                <section class="footer-sec-2">
                    <div class="container-lg">

                        <div class="content">
                            <h1 class="title">
                                <span class="subtitle">Ready to get started?</span>
                                Get in touch, we'd love to speak.
                            </h1>
                        </div>

                        <div class="zip-pricing-btn-grp buttons">

                            <a class="zip-pricing-Button zip-pricing-Button-default" href="mailto:jonathan@zipcaptions.com">
                                SEND AN EMAIL
                            </a>

                            <a href="javascript:void(0)" class="zip-pricing-Button" onclick="openChat();">
                                CHAT WITH SALES
                            </a>
                        </div>

                    </div>
                </section>
                <?php include_once 'footer_white.php' ?>
            </footer>
            <?php include_once 'scripts.php' ?>
        </div>

    </body>

</html>
