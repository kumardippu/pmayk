 <div class="container top">
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(1));
                $user_access = $this->session->userdata('access');
            ?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li class="active">
          <?php echo ucfirst($this->uri->segment(2));   ?>
        </li>
      </ul>

      <div class="page-header agents-header">
        <h2>
         <?php echo ucfirst($this->uri->segment(2));?> 		  
			<!--<a  href="<?php echo site_url("admin").'/'.$this->uri->segment(2); ?>/add" class="btn btn-success">Add a new</a>
		<?php  $attributes = array('class' => 'form-horizontal', 'id' => ''); ?>
		<div style = "margin-left:68%" >
			<?php echo  form_open_multipart('administrator/bulk_user', $attributes); ?>	
				<input type="file" name="excel_data" required>
				<input type = "submit" name="bulk" value="Bulk Upload" />
		   <?php echo form_close(); ?> 
		 </div> --> 
        </h2>
      </div>
      
      <div class="row">
        <div class="span12 columns">
          
          <div class="well">


         <a href="<?php echo base_url('admin/add_agent'); ?>" style="float:right;"><input type="button" class="btn btn-success" name="search" value="Add Agent"/></a>
			    <!--<form method="post" action="<?php echo base_url('administrator/exportInfraReport');?>">
				From: <input type="text"  class="txtbox startdate" name="from" id="StartDate" value="<?php echo date('Y-m-d');?>" />
                &nbsp;To: <input type="text" name="to" class="txtbox startdate" id="EndDate" value="<?php echo date('Y-m-d');?>" />
                <input type="submit" name="infrareport" value="Export Infra	" class="btn btn-success" />
           </form>-->
			<form action="<?php echo site_url('admin/agent');?>" method="post">			
			<table class="table table-striped table-bordered table-condensed">
			<tr>
			<!--<td>
			 <?php
					$options = array(	
									''          => '--Select UserType--',
									'L1'		=> 'L1',
									'L2'		=> 'L2',
									'L3'		=> 'L3',
									'ODM'		=> 'ODM',
									'Admin'		=> 'Admin',
									'SubAdmin'	=> 'SubAdmin'
		               				);
					echo form_dropdown('access', $options);
				?>-->	
								
				</td>
				<td><input type="text" name="term" placeholder="Search Term" /></td>
				<td><input type="submit" class="btn btn-info" name="search" value="Search"/></td>
			</tr>
				
			</table>
		</form>	

          </div>

          <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
            
               <th class="red header">Name</th>
                <th class="yellow header headerSortDown">Email</th>
                <th class="red header">Mobile</th>
                <th class="green header">Agent Code</th>
                <th class="red header">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
			 if(!empty($agents)){
              foreach($agents as $row){
				echo '<tr>';
                echo '<td>'.$row->name.'</td>';
                echo '<td>'.$row->email.'</td>';
                echo '<td>'.$row->mobile.'</td>';
                echo '<td>'.$row->agent_code.'</td>';
    
			      echo '<td class="crud-actions">
                  <a href="'.site_url("agent").'/view/'.$row->id.'" class="btn btn-info">View / Edit</a>';
                  if($user_access==1){  
                    //echo '<a href="'.site_url("agent").'/delete/'.$row->id.'" onclick="return areyousure();" class="btn btn-danger">Delete</a>';
                  }
               echo  '</td>';
                echo '</tr>';
              }
              }else{
                echo "<td><strong>No Record Found!</strong></td>";
                }
              ?>      
            </tbody>
          </table>

          <?php echo '<div class="pagination">'.$this->pagination->create_links().'</div>'; ?>

      </div>
    </div>
   <script type="text/javascript">
		function areyousure(){
			return confirm("Are you sure?");
		}
</script>