
	
<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href="<?php echo base_url();?>Dashboard">Dashboard</a></li>
      <li class="active">Product</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
      <div class="panel panel-flat">
         <div class="panel-heading">
			<div class="col-md-6">
				<h3 class="panel-title">Add New Product
			</h3>
			</div>
			<div class="col-md-6">
				<div style="text-align:right;">
               <a href="<?php echo  base_url();?>Product" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
            </div>
			</div>
         </div>
		 <br>
		 <hr/>
         <div class="container-fluid">
            <!-- content Starts Here-->
            <div class="col-md-12">
               
               <?php if($message == "FAILED") { ?>
               <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Action Failed !!! </strong>
               </div>
               <?php } else if($message == "SUCCESS") {  ?>
               <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Success !!! </strong> New Product Created successfully
               </div>
               <?php } ?>
			</div>   
	<div class="col-md-12">
		<form class="form-horizontal form-validate-jquery" action="<?php echo  base_url();?>Product/productAdd" method="POST" enctype="multipart/form-data">
			<div class="col-md-12">
				<div class="panel panel-flat">
					<div class="panel-heading"><h2 style="margin-left: 0px;">Product Details</h2></div>
					<div class="panel-body">
						<fieldset class="content-group">
							<legend class="text-bold"></legend>
							<div class="form-group">
								<label class="control-label col-md-3"><b>Title</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="title" placeholder="Title" class="form-control required" type="text" required="required">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group">
								<label class="control-label col-md-3"><b>Description</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								  <!--textarea name="description" id="editor-full" rows="2" cols="2" required="required"></textarea>
								   <span class="help-block"></span-->
								   <textarea class="summernote" name="description" required="required">
									
								   </textarea>
								   <!--div class="summernote">
								
									</div-->
								</div>
							 </div>
							 <div class="form-group">
								<label class="control-label col-md-3">
								
								<b>Featured Image</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								
								  <input type="file" name="gallery" class="form-control file-styled" data-popup="tooltip" title="Select File(It is required field)" data-placement="bottom">
							   <span class="help-block" style="color: red;font-weight: bold;text-shadow: 1px 2px 9px red;">Upload Resolution : 275 * 250 only.</span>
								</div>
							 </div>
							 
							 <!--div class="form-group">
								<label class="control-label col-md-3">
								
								<b>Upload Thumbnail Images</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								
								  <div id="filediv"><input name="file[]" type="file" id="file" /></div>
							<input type="button" id="add_more" class="upload" value="Add More Files" />
						   <!--input name="file" class="form-control file-styled" type="file" required=""->
						   <span class="help-block" style="color: red;font-weight: bold;text-shadow: 1px 2px 9px red;"> Add more Max file size 2MB</span>
								</div>
							 </div-->
							 
							 <style>
								.form-horizontal .radio, .form-horizontal .checkbox, .form-horizontal .radio-inline, .form-horizontal .checkbox-inline
								{
									padding-top: 0px;
								}
								#cke_1_contents
								{
									    height: 100%!important;
								}
							 </style>
							
							
						</fieldset>
					</div>
				</div>
			</div>
					
			<div class="col-md-12">
				<div class="panel panel-flat">
					<div class="panel-heading"><h2 style="margin-left: 0px;">Add Testimonials Youtube URL</h2></div>  
					<div class="panel-body">
						<fieldset class="content-group">
							<legend class="text-bold"></legend>
							<div class="row">
						<label class="control-label col-md-3"><b>URL 1</b> <strong style="color:red;">*</strong></label>
						<div class="col-md-9">
							<div class="field_wrapper">
								<div class="col-sm-12">
									  <input name="youtubeurl[]" type="text" class="form-control">
								</div>
								<!--div class="col-sm-2">
									 <a href="javascript:void(0);" class="add_button" title="Add field" style="float:right;    margin: 9px 30px;
    border: 1px solid #c5c5c5;
    padding: 5px;
    background: #f1f1f1;
    border-radius: 4px;
    box-shadow: 1px 1px 3px;">
									Addmore <i class="fa fa-plus" style="color:green;font-size:20px;"></i>
								</a>
								</div-->
								<div class="col-md-12">&nbsp;</div>
								
							</div>
					
						
						</div>
					</div>
					<div class="row">
						<label class="control-label col-md-3"><b>URL 2</b> <strong style="color:red;">*</strong></label>
						<div class="col-md-9">
							<div class="field_wrapper">
								<div class="col-sm-12">
									  <input name="youtubeurl[]" type="text" class="form-control">
								</div>
								<!--div class="col-sm-2">
									 <a href="javascript:void(0);" class="add_button" title="Add field" style="float:right;    margin: 9px 30px;
    border: 1px solid #c5c5c5;
    padding: 5px;
    background: #f1f1f1;
    border-radius: 4px;
    box-shadow: 1px 1px 3px;">
									Addmore <i class="fa fa-plus" style="color:green;font-size:20px;"></i>
								</a>
								</div-->
								<div class="col-md-12">&nbsp;</div>
								
							</div>
					
						
						</div>
					</div>
						</fieldset>
						
						<div class="text-right">
							<button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
							<input type="submit" class="btn btn-primary icon-arrow-right14 position-right" value="Submit" name="Submit_data"> 
						</div>
					</div>
				</div>
			</div>
		</form>		
	</div>		

         </div>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<script>
		$(document).ready(function() {
		var maxField = 2; //Input fields increment limitation
		var addButton = $('.add_button'); //Add button selector
		var wrapper = $('.field_wrapper'); //Input field wrapper
		var fieldHTML = '<div><div class="col-sm-10"><input name="youtubeurl[]" type="text" class="form-control"></div><a href="javascript:void(0);" class="remove_button" title="Remove field" style="float:right;    margin: 6px 29px;border: 1px solid #c5c5c5;padding: 0px 5px;background: #f1f1f1;border-radius: 4px;box-shadow: 1px 1px 3px;">Remove<i class="fa fa-remove" style="color:red;font-size:20px;"></i></a></div>'; //New input field html 
		var x = 1; //Initial field counter is 1
		$(addButton).click(function() { //Once add button is clicked
			if (x < maxField) { //Check maximum number of input fields
				x++; //Increment field counter
				$(wrapper).append(fieldHTML); // Add field html
			}
		});
		$(wrapper).on('click', '.remove_button', function(e) { //Once remove button is clicked
			e.preventDefault();
			$(this).parent('div').remove(); //Remove field html
			x--; //Decrement field counter
		});
	});
	</script>