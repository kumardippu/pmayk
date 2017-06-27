	<div id="footer">
		<hr>
		<div class="inner">
			<div class="container">
				<p class="right"><a href="#">Back to top</a></p>
				<p>
				</p>
			</div>
		</div>
	</div>
    <?php 
		$rout = $this->uri->segment(2);
		$arr = array('dispatch','report','order','loaner','rmb','sparedemand','administrator','scanner'); 
		
		if ( !(in_array($rout, $arr)) ) { ?>    
		<script src="<?php echo base_url(); ?>assets/js/jquery-1.7.1.min.js"></script>
    <?php } ?>	
    
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/admin.min.js"></script>
</body>
</html>