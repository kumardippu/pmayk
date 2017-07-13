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