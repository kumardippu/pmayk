    <div class="container top">      
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(2));?>
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
			     <input type="text" required="required" name="fname" value="<?php echo $users->f_name; ?>" >
            </div>
		  </div>

	     <div class="control-group">
             <label for="inputError" class="control-label">Last Name</label>
            <div class="controls">
			     <input type="text" required="required" name="lname" value="<?php echo $users->l_name; ?>" >
            </div>
		  </div>

    <div class="control-group">
             <label for="inputError" class="control-label">Father Name</label>
            <div class="controls">
           <input type="text"  name="father" value="<?php echo $users->father; ?>" >
            </div>
    </div>

    <div class="control-group">
             <label for="inputError" class="control-label">Mother Name</label>
            <div class="controls">
           <input type="text"  name="mother" value="<?php echo $users->mother; ?>" >
            </div>
    </div>

	   	<div class="control-group">
             <label for="inputError" class="control-label">Email</label>
            <div class="controls">
			     <input type="email" required="required" name="email" value="<?php echo $users->email; ?>" disabled>
            </div>
		  </div>

    <div class="control-group">
           <label for="inputError" class="control-label">Mobile</label>
          <div class="controls">
         <input type="text" required="required" name="mobile" value="<?php echo $users->mobile; ?>" disabled>
          </div>
      </div>
      <div class="control-group">
           <label for="inputError" class="control-label">Aadhar No</label>
          <div class="controls">
         <input type="text" required="required" name="aadhar" value="<?php echo $users->aadhar_no; ?>" disabled>
          </div>
      </div>
      <div class="control-group">
           <label for="inputError" class="control-label">Refrence No</label>
          <div class="controls">
         <input type="text" required="required" name="refrence_no" value="<?php echo $users->refrence_no; ?>" disabled>
          </div>
      </div>
      <div class="control-group">
             <label for="inputError" class="control-label">Payment</label>
            <div class="controls">
   			<?php       
					$options = array('0'=> 'Pending','1'=> 'Paid');
                    $select = $users->is_paid;
					echo form_dropdown('paid', $options,$select);
				?>

            </div>
		</div>
        <input type="hidden"  name="amount" value="500" >
		
		   
          <div class="form-actions">
            <button class="btn btn-primary" type="submit">Update</button>
            <a href="<?php echo site_url('admin'); ?>" /><input type="button" class="btn" value="Cancel"/></a>
          </div>
        </fieldset>

      <?php echo form_close(); ?>

    </div>
