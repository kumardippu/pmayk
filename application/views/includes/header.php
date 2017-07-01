<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>pmayk.org</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/lib/font-awesome/css/font-awesome.min.css'); ?>" >
    <link rel="stylesheet" href="<?php echo base_url('assets/lib/simple-line-icons/css/simple-line-icons.css')?>" >
    <link rel="stylesheet" href="<?php echo base_url('assets/lib/device-mockups/device-mockups.min.css')?>" >

    <!-- Theme CSS -->
    <link href="<?php echo base_url('assets/css/new-age.min.css')?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">pmayk.org</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#register">Register</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>

                    <li> <?php $attributes = array('class' => 'navbar-form', 'id' => 'search_form', 'name' => 'search_form');
                                echo validation_errors();             
                                echo form_open('home/search', $attributes);
                            ?>
                        <div class="input-group add-on">  
                            <input type="text" class="form-control" name="search" placeholder="Search here" />
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                             </div>
                        </div>
                        <?php echo form_close(); ?>
                    </li>                    

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/lib/jquery/jquery.min.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.min.js') ?>"></script>


    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url('assets/js/new-age.min.js'); ?>"></script>