<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Page</title>
<style>
*{	margin:0 auto;	padding:0;}
img{ border:none;}
body{ background:#000;font-family:Verdana, Geneva, sans-serif;margin:0px;padding:0px;font-size:12px;color:#333;}
.Lgnmain{width:50%; min-height:500px; position:absolute; left:50%; top:60%; margin-left:-25%; margin-top:-15%;}
.Lgnlogo { text-align:center;}
.register_here {font-family:Verdana, Geneva, sans-serif; color:#FFF; font-size:18px; margin:30px 0; text-align:center;}
.login_box { position:relative; }
.login_box .lgninr{width:84%; background:#dddedf; border:1px solid #999; border:1px solid #afb0b4; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; padding:10px 0;}
.login_box input[type="text"], .login_box input[type="password"] { margin:0 10px; padding:10px 10px; line-height:40px; width:44%; background:#f5f6f8; color:#757a80; border:1px solid #afb0b4; border-radius:3px; -moz-border-radius:3px; -webkit-border-radius:3px; font-size:18px;}
.login_button{ width:8%; padding:1.0em 1.0em; border:none; line-height:1em; color:#fff; text-align:center; cursor:pointer; background:#f06d27; position:absolute; right:0; top:20px; border-radius:0px 5px 5px 0px; /*z-index:-9;*/}

.alert {
  padding: 8px 35px 8px 14px;
  margin-bottom: 18px;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  background-color: #fcf8e3;
  border: 1px solid #fbeed5;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
.alert-danger, .alert-error {
  background-color: #f2dede;
  border-color: #eed3d7;
}
</style>

</head>

<body>
<div class="Lgnmain">
  <p class="register_here">pmayk.org Admin Login</p>
  <div class="login_box">
    <div class="lgninr">
    <?php
	if(isset($message_error) && $message_error){
          echo '<div class="alert alert-error">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo 'Invalid Username or Password!!.';
          echo '</div>';             
      }
	  ?>
    <?php echo form_open('admin/login/validate_credentials');?>
<?php echo form_input('user_name', '', 'placeholder="Username"');
      echo form_password('password', '', 'placeholder="Password"');?>
     
    </div> 
   <?php echo form_submit('submit', 'Login', 'class="login_button"');?>
  </div>
<?php echo form_close();?>
</div>

<script src="<?php echo base_url(); ?>assets/lib/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>