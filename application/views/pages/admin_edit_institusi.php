<?php
$id_pt = "";
$no_telp_pj = "";
$no_telp_pt = "";
if ($op=="edit") {
		$id_pt = $sql['id_pt'];
		$no_telp_pj = $sql['no_telp_pj'];
		$no_telp_pt = $sql['no_telp_pt'];
}
?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chosen.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker3.min.css" />
<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
<div class="page-content">
	<!-- Siswa -->
	<div class="page-header">
		<h1>
			<?php echo $title;?>
		</h1>
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<form class="form-horizontal" action="<?php echo base_url(); ?>index.php/admin/pt_simpan" method="POST">
		<div class="form-horizontal" >  
			<input type="hidden" name="op" value="<?php echo $op;?>" class="form-control">
			<input type="hidden" name="id_pt" value="<?php echo $id_pt;?>" class="form-control">
			
			<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> No. Telp Poltek </label>
			<div class="col-sm-3">
				<input type="number" id="form-field-1" placeholder="No. Telp Poltek" name="no_telp_pt" value="<?php echo $no_telp_pt;?>" class="col-xs-12"/>
			</div>
			</div>

			<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> No. Telp Kontigen </label>
			<div class="col-sm-3">
				<input type="number" id="form-field-1" placeholder="No. Telp Kontigen" name="no_telp_kon" value="<?php echo $no_telp_pj;?>" class="col-xs-12"/>
			</div>
			</div>

			<!-- Submit -->
			<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right"></label>
			<div class="col-sm-3">
				<button type="submit" class="btn btn-primary btn-sm">Submit</button>
			</div>
			</div>
		
		
		
		</div>
		</form>
		<!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</div>
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->
<script type="text/javascript">
//datepicker plugin
//link
$('.date-picker').datepicker({
	autoclose: true,
	todayHighlight: true
})
//show datepicker when clicking on the icon
.next().on(ace.click_event, function(){
	$(this).prev().focus();
});
</script>
