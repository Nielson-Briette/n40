<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>N40 | Pricing</title>
    <meta name="description" content="This is a website created for a senior capstone project for BYU-I" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="/css/styles.css" />
    <link rel="stylesheet" href="/css/pricing.css"/>
</head>

<body>
    <div> 
        <header role="banner" id="page_header">
            <?php include '/php/header.php'; ?>
        </header>
    </div>
    <main>
    <section id="pricing-table">
            <div class="container">
                <div class="row">
                    <div class="pricing">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <p class="pricing-title">Free Plan</p>
                                    <p class="pricing-rate"><sup>$</sup> 0 <span>/Mo.</span></p>
                                    <a href="#" class="btn btn-custom">And Get Free Month</a>
                                </div>

                                <div class="pricing-list">
                                    <ul>
                                        <li><i class="fa fa-envelope"></i>1,000 messages</li>
                                        <li><i class="fa fa-signal"></i><span>limited</span> data</li>
                                        <li><i class="fa fa-user"></i><span>limited</span> users</li>
                                        <li><i class="fa fa-smile-o"></i>first 10 day free</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <p class="pricing-title">Business Plan</p>
                                    <p class="pricing-rate"><sup>$</sup> 20 <span>/Mo.</span></p>
                                    <a href="#" class="btn btn-custom">And Get Free Month</a>
                                </div>

                                <div class="pricing-list">
                                    <ul>
                                        <li><i class="fa fa-envelope"></i>10,000 messages</li>
                                        <li><i class="fa fa-signal"></i><span>unlimited</span> data</li>
                                        <li><i class="fa fa-user"></i><span>unlimited</span> users</li>
                                        <li><i class="fa fa-smile-o"></i>first 10 day free</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <p class="pricing-title">Extended Plan</p>
                                    <p class="pricing-rate"><sup>$</sup> 80 <span>/Mo.</span></p>
                                    <a href="#" class="btn btn-custom">And Get Free Month</a>
                                </div>

                                <div class="pricing-list">
                                    <ul>
                                        <li><i class="fa fa-envelope"></i>10,0000 messages</li>
                                        <li><i class="fa fa-signal"></i><span>unlimited</span> data</li>
                                        <li><i class="fa fa-user"></i><span>unlimited</span> users</li>
                                        <li><i class="fa fa-smile-o"></i>first 10 day free</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

<!--BEGIN FOOTER-->
<footer id="footer" role="contentinfo">
     <div>
                <?php include '/php/footer.php'; ?>
            </div>
</footer>
<div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <img src="//placehold.it/1200x700/222?text=..." id="galleryImage" class="img-responsive" alt="social media icons"/>
                <p>
                    <br/>
                    <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
                </p>
            </div>
        </div>
    </div>

<!--scripts loaded here from cdn for performance -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>