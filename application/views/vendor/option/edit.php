
<div class="col-lg-12">
	<h1 class="page-header">Options</h1>

	<ol class="breadcrumb">
		<li><a href="<?php echo base_url() ?>vendor/dashboard/index"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		<li><a href="<?php echo base_url() ?>vendor/option/index"><i class="fa fa-table"></i> Options</a></li>
		<li class="active"><i class="fa fa-plus-square"></i> Edit Option</li>
	</ol>
	<?php 
		$option_array = array();
		foreach($options as $option){
			$option_array[] = array(
				'option_name' => $option->optionTypeName,
				'option_id' => $option->optionTypeID
			); 

		}
	 ?>

	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">Edit Option</h3>
		</div>
		<div class="panel-body bg">
		<div class="block">
			<form  method="post" action="<?php echo base_url()?>vendor/option/edit/<?php echo $option_array[0]['option_id']; ?>" id="general-form" enctype="multipart/form-data">
				<div class="form-group">
					<label> Option title <i class="asterisk">*</i></label>
					<input type="text" name="option_name" class="form-control validate[required]" value="<?php echo $option_array[0]['option_name'] ?>">
				</div>

				<div class="input_fields_wrap">
				    <a href="#" class="add_field_button">Add More Fields</a>
				    
				    <?php foreach($options as $option): ?>
				    	<div>
				    		<input type="hidden" name='value_id[]' value="<?php echo $option->optionValueID; ?>">
							<input class="option_field" type="text" name="option_value_old[]"​ value="<?php echo $option->optionValueName ?>"><a href="#" id="<?php echo $option->optionValueID;?>" class="remove_old_field del_ov"><i class="fa fa-minus-circle" style="color:red;"></i></a>
						</div>
					<?php endforeach; ?>
				</div>

				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary">Save Changes</button> 
				</div>
			</form>
		</div><!-- end block -->	
		</div> <!-- end panel body -->
	</div> <!-- end panel -->

</div>

