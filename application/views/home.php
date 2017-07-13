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