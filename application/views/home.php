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
        <div class="container">
          <h2>Registration Form</h2>
          <!--<form class="form-vertical" action="" method="post">-->
          <?php
              //form data
              $attributes = array('class' => 'form-vertical', 'id' => 'registration', 'name' => 'registration');

              //form validation
              echo validation_errors();
              
              echo form_open('register', $attributes);
          ?>

            <div class="form-group">
              <div class="col-sm-3">
              <label for="email">First Name:</label>
              
                <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" value="<?php echo set_value('fname'); ?>">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-3">     
              <label class="control-label" for="pwd">Last Name:</label>                   
                <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" value="<?php echo set_value('lname'); ?>">
              </div>
            </div>

             <div class="form-group">
              <div class="col-sm-3">     
              <label class="control-label" for="pwd">Father's Name:</label>                   
                <input type="text" class="form-control" id="father" placeholder="Enter Father's Name" name="father" value="<?php echo set_value('father'); ?>">
              </div>
            </div>
             <div class="form-group">
              <div class="col-sm-3">     
              <label class="control-label" for="pwd">Mother's Name:</label>                   
                <input type="text" class="form-control" id="Mother" placeholder="Enter Mother's name" name="mother" value="<?php echo set_value('mother'); ?>">
              </div>
            </div>

             <div class="form-group">
              <div class="col-sm-3">
              <label class="control-label " for="email">Email:</label>
              
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo set_value('email'); ?>">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-3">     
              <label class="control-label" for="pwd">Mobile:</label>                   
                <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile no" name="mobile" value="<?php echo set_value('mobile'); ?>">
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-3">     
              <label class="control-label" for="pwd">Aadhar No:</label>                   
                <input type="text" class="form-control" id="aadhar" placeholder="Enter Aadhar no" name="aadhar" value="<?php echo set_value('aadhar'); ?>">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-3">     
              <label class="control-label" for="pwd">Area Type:</label>                   
                <input type="radio" name="area" value="urban" checked="true">Urban 
                <input type="radio" name="area" value="ruler">Ruler
                <input type="radio" name="area" value="slum">Slum

              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-3">     
              <label class="control-label" for="pwd">Current House:</label>
                <input type="radio" name="current_house" value="own" >Own House 
                <input type="radio" name="current_house" value="rented" checked="true">Rented
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>

          <!--</form>-->
          <?php echo form_close(); ?>
        </div>
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
        <div class="container">
            <!--<h2>We <i class="fa fa-heart"></i> new friends!</h2>-->
            <h2>You can touch with us!</h2>
            <ul class="list-inline list-social">
                <li class="social-twitter">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="social-facebook">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="social-google-plus">
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
            </ul>
        </div>
        <p>Branch Office : G 889 Sangam Vihar<br>New Delhi</p>
        <p>Mob.  +91-8076681140</p>
    </section>
<script src="<?php echo base_url('assets/lib/jquery/jquery.validate.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>