<!DOCTYPE html> 
<html lang="en-US">
<head>
  <title>Micromax KBM System</title>
  <meta charset="utf-8">
  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<link href="<?php echo base_url(); ?>assets/css/admin/global.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
	    <div class="container">
	      <a class="brand">Micromax KBM System</a>
       
	      <ul class="nav">
	       
           <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Content<b class="caret"></b></a>
	          <ul class="dropdown-menu">
                <li>
                	<a href="<?php echo base_url(); ?>admin/category">Category</a>
                </li>
                <li>
                	<a href="<?php echo base_url(); ?>admin/products">Products</a>
                </li>
				<li>
                	<a href="<?php echo base_url(); ?>admin/latest-products">Manage Latest Products</a>
                </li>
                <li>
                	<a href="<?php echo base_url(); ?>admin/commontool">Common Tools</a>
                </li>
				<li>
                	<a href="<?php echo base_url(); ?>admin/spl">SPL</a>
                </li>
                <li>
                	<a href="<?php echo base_url(); ?>admin/region">Manage Region</a>
                </li>
                <!--<li>
                	<a href="<?php //echo base_url(); ?>admin/odm">Manage ODM</a>
                </li>-->
	          </ul>
	        </li>
            
            <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Updates<b class="caret"></b></a>
	          <ul class="dropdown-menu">
                <li>
                	<a href="<?php echo base_url(); ?>admin/ticker">Ticker</a>
                </li>
                <li>
                	<a href="<?php echo base_url(); ?>admin/announcement">Announcement</a>
                </li>
				<li>
                	<a href="<?php echo base_url(); ?>admin/dailybrief">Daily briefing</a>
                </li>
				<li>
                	<a href="<?php echo base_url(); ?>admin/tipofday">Tip of the Day</a>
                </li>
				<li>
                	<a href="<?php echo base_url(); ?>admin/starofmonth">Star of the Month</a>
                </li>
               	<li>
                	<a href="<?php echo base_url(); ?>admin/latestupdate">LatestUpdate</a>
                </li>
				<li>
                	<a href="<?php echo base_url(); ?>admin/faq">FAQ</a>
                </li>
	          	<li>
                	<a href="<?php echo base_url(); ?>admin/bulletin">Bulletin</a>
                </li>
           		<!--<li>
                	<a href="<?php //echo base_url(); ?>admin/article">Must Read</a>
                </li>-->
	          </ul>
	        </li>
            
			 <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Forum<b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li>
	              <a href="<?php echo base_url(); ?>admin/forumcategory">Forum Category</a>
	            </li>
	            <li>
	              <a href="<?php echo base_url(); ?>admin/topics">Forum Posts</a>
	            </li>
	          </ul>
	        </li>
			
            <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Quiz <b class="caret"></b></a>
	          <ul class="dropdown-menu">
                <li>
                	<a href="<?php echo base_url(); ?>admin/quiz">Add Questions</a>
                </li>
                <li>
                	<a href="<?php echo base_url(); ?>admin/user-quiz-answer">User Answer</a>
                </li>
                </ul>
	        </li>
            
            <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Survey <b class="caret"></b></a>
	          <ul class="dropdown-menu">
                <li>
                	<a href="<?php echo base_url(); ?>admin/survey">Manage Questions</a>
                </li>
                <li>
                	<a href="<?php echo base_url(); ?>admin/user-survey-answer">User Answer</a>
                </li>
                </ul>
	        </li>
            
			 <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Report <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li>
	              <a href="<?php echo base_url(); ?>admin/report">Time Report</a>
	            </li>
				<li>
	              <a href="<?php echo base_url(); ?>admin/dispatch">Dispatch Report</a>
	            </li>
                <li>
	              <a href="<?php echo base_url(); ?>admin/loaner">Loaner Report</a>
	            </li>
	          </ul>
	        </li>
			
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">System <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li>
	              <a href="<?php echo base_url(); ?>admin/logout">Logout</a>
	            </li>
	          </ul>
	        </li>
             <?php if($this->session->userdata('access')=='Admin')
                   {
             ?>
            <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrative <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li>
	              <a href="<?php echo base_url(); ?>admin/administrator">Manage User</a>
	            </li>
	            <li>
	              <a href="<?php echo base_url(); ?>admin/mail">Send Mail</a>
	            </li>
	          </ul>
	        </li>
            <?php } ?>
            
	      </ul>
		       
	    </div>
	  </div>
	</div>	
	