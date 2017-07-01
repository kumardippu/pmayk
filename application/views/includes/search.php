<div class="container">
  <h2>Search Result</h2>
  <table class="table table-striped table-bordered table-condensed">
      <thead>
        <tr>
      
         <th class="red header">Name</th>
          <th class="yellow header headerSortDown">Email</th>
          <th class="red header">Mobile</th>
          <th class="green header">Aadhar No</th>
          <th class="green header">Refrence No</th>
          <th class="green header">Payment</th>
        </tr>
      </thead>
      <tbody>
        <?php
       if(!empty($user)){
        foreach($user as $row){
              echo '<tr>';
              echo '<td>'.$row->f_name.' '.$row->l_name.'</td>';
              echo '<td>'.$row->email.'</td>';
              echo '<td>'.$row->mobile.'</td>';
              echo '<td>'.$row->aadhar_no.'</td>';
              echo '<td>'.$row->refrence_no.'</td>';
              echo '<td>'.($row->is_paid==0?'Pending':'Paid').'</td>';
              echo '</tr>';
          }
        }else{
          echo "<td><strong>No Record Found!</strong></td>";
          }
        ?>      
      </tbody>
  </table>
</div>