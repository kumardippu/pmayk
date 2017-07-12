    <div class="container top">      
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(2));
              $user_access = $this->session->userdata('access');
            ?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li class="active">
          <a href="#">Update</a>
        </li>
      </ul>      
      <div class="page-header">
        <h2>
          <?php echo ucfirst($this->uri->segment(2));?> User
        </h2>
      </div>

      <?php
      //flash messages
      if($this->session->flashdata('flash_message')){
        if($this->session->flashdata('flash_message') == 'updated')
        {
          echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo 'User updated!';
          echo '</div>';       
        }else{
          echo '<div class="alert alert-error">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Oh snap!</strong> change a few things up and try submitting again.';
          echo '</div>';          
        }
	}
    ?>
      
      <?php
      //form data
      $attributes = array('class' => 'form-horizontal', 'id' => '');

      //form validation
      echo validation_errors();
      
      echo form_open('user/view/'.$this->uri->segment(3).'', $attributes);
      ?>
        <fieldset>
         <div class="control-group">
             <label for="inputError" class="control-label">First Name</label>
            <div class="controls">
			     <input type="text" required="required" name="fname" value="<?php echo $agent->name; ?>" >
            </div>
		  </div>

	   	<div class="control-group">
             <label for="inputError" class="control-label">Email</label>
            <div class="controls">
			     <input type="email" required="required" name="email" value="<?php echo $agent->email; ?>" >
            </div>
		  </div>

    <div class="control-group">
           <label for="inputError" class="control-label">Mobile</label>
          <div class="controls">
         <input type="text" required="required" name="mobile" value="<?php echo $agent->mobile; ?>" >
          </div>
      </div>
      <div class="control-group">
           <label for="inputError" class="control-label">Agent Code</label>
          <div class="controls">
         <input type="text" required="required" name="agent_code" value="<?php echo $agent->agent_code; ?>" disabled>
          </div>
      </div>
     <!-- <div class="control-group">
             <label for="inputError" class="control-label">Payment</label>
            <div class="controls">
   			<?php       
  					$options = array('0'=> 'Pending','1'=> 'Paid');
            $select = $agent->is_paid;
            $extra  = array('disabled'=>false);
            if($user_access==1)
              $extra   = array();
					echo form_dropdown('paid', $options,$select,$extra);
				?>

            </div>
		</div>-->
        <input type="hidden"  name="user_type" value="2" >
		
		   
          <div class="form-actions">
            <button class="btn btn-primary" type="submit">Update</button>
            <a href="<?php echo site_url('admin'); ?>" /><input type="button" class="btn" value="Cancel"/></a>
          </div>
        </fieldset>

      <?php echo form_close(); ?>

    </div>
