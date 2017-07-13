<body id="page-top">
   <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="header-content">
                        <div class="header-content-inner">
                            <h1>We setup a technology to facilitate Pradhan Mantri Awas Yojana.</h1>
                            <a href="#register" class="btn btn-outline btn-xl page-scroll">Register Now!</a>
                        </div>
                    </div>
                </div>

                <!--<div class="col-sm-5">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device">
                                <div class="screen">
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                    <!--<img src="<?php echo base_url('assets/img/demo-screen-1.jpg')?>" class="img-responsive" alt="">
                                </div>
                                <div class="button">
                                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                <!--</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->

        </div>
    </header>

    <section id="about" class="download bg-danger ">
        <?php include('includes/about.php'); ?>
    </section>

    <?php 
     if(isset($is_searched) && $is_searched){ ?>
        <script type="text/javascript">$(function() { 
                document.location.href = '#search_result';
            });</script>
    <section id="search_result" class="download bg-success">
            <?php include('includes/search.php'); ?>
    </section>
    <?php } ?>

    <?php if(isset($isValidated) && $isValidated===FALSE){ ?>
    <script type="text/javascript">$(function() { 
            document.location.href = '#register';
        });</script>
    <?php } ?>

    <section id="register" class="features">
       <?php include('includes/register.php'); ?>
    </section>


    <!--<section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2>Unlimited Features, Unlimited Fun</h2>
                        <p class="text-muted">Check out what you can do with this app theme!</p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device">
                                <div class="screen">
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                   <!-- <img src="<?php echo base_url('assets/img/demo-screen-1.jpg')?>" class="img-responsive" alt=""> </div>
                                <div class="button">
                                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                <!--</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-screen-smartphone text-primary"></i>
                                    <h3>Device Mockups</h3>
                                    <p class="text-muted">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-camera text-primary"></i>
                                    <h3>Flexible Use</h3>
                                    <p class="text-muted">Put an image, video, animation, or anything else in the screen!</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-present text-primary"></i>
                                    <h3>Free to Use</h3>
                                    <p class="text-muted">As always, this theme is free to download and use for any purpose!</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-lock-open text-primary"></i>
                                    <h3>Open Source</h3>
                                    <p class="text-muted">Since this theme is MIT licensed, you can use it commercially!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <section class="cta">
        <div class="cta-content">
            <div class="container">
                <h2>Stop waiting.<br>Start registrering.</h2>
                <a href="#register" class="btn btn-outline btn-xl page-scroll">Let's Get Started!</a>
            </div>
        </div>
        <div class="overlay"></div>
    </section>


<section id="gallery" >
  <?php include('includes/gallery.php'); ?>
</section>

<section id="contact" class="contact bg-primary">
  <?php include('includes/contact.php'); ?>
</section>
<script src="<?php echo base_url('assets/lib/jquery/jquery.validate.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>