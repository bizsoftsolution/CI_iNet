<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href="">Dashboard</a></li>
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
				<h3 class="panel-title">Product Edit
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
               <br>
               <?php if($message == "FAILED") { ?>
               <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Action Failed !!! </strong>
               </div>
               <?php } else if($message == "SUCCESS") {  ?>
               <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Success !!! </strong> Product Updated successfully
               </div>
               <?php } ?>
               <?php foreach($post as $row){?>
				<div class="col-md-12">
		<form class="form-horizontal form-validate-jquery" action="<?php echo  base_url();?>Product/productEdit/<?php echo $row->id;?>" method="POST" enctype="multipart/form-data">
			<div class="col-md-12">
				<div class="panel panel-flat">
					<div class="panel-heading">Post Details</div>
					<div class="panel-body">
						<fieldset class="content-group">
							<legend class="text-bold"></legend>
							<div class="form-group">
								<label class="control-label col-md-3"><b>Title</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								   <input name="title" placeholder="Title" class="form-control required" type="text" required="required" value="<?php echo $row->title;?>">
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group">
								<label class="control-label col-md-3"><b>Description</b> <strong style="color:red;">*</strong></label>
								<div class="col-md-9">
								  <textarea name="description" class="summernote" rows="2" cols="2" required="required">
									<?php echo $row->description;?>
								  </textarea>
								   <span class="help-block"></span>
								</div>
							 </div>
							 <div class="form-group">
							<label class="control-label col-md-3"><b>Featured Image</b></label>
							<div class="col-md-9">
								<?php 
								if($row->featured_image != "")
								{
									?>
										<img src="<?php echo base_url().'upload/products/'.$row->featured_image;?>" class="img-responsive" style="width:250px;height:150px;">
										<input type="file" name="gallery" class="form-control file-styled" data-popup="tooltip" title="Select File(It is required field)" data-placement="bottom">
										<input type="hidden" name="old_featured_image" value="<?php echo $row->featured_image; ?>">
							   <span class="help-block" style="color: red;font-weight: bold;text-shadow: 1px 2px 9px red;">Upload Resolution : 275 * 250 only.</span>
									<?php 
								}
								else
								{
									?>
										<input type="file" name="gallery" class="form-control file-styled" data-popup="tooltip" title="Select File(It is required field)" data-placement="bottom">
							   <span class="help-block" style="color: red;font-weight: bold;text-shadow: 1px 2px 9px red;">Upload Resolution : 275 * 250 only.</span>
									<?php
								}
								?>
							</div>
						</div>
						<!--div class="form-group">
                        <label class="control-label col-md-3"><b>Thumbnail Images</b></label>
						<div class="col-md-9">
						<?php if ($row->thumbnail_image) { 
						//echo $row->image;
						$img = explode(',', trim($row->thumbnail_image, ','));
						foreach($img as $rowimg)
						{
							?>
							<div class="field_wrapper99">
							<div class="col-md-3">
							<img src="<?php echo base_url(); ?>upload/products/<?php echo $rowimg; ?>" class="img-responsive" style="width:120px; height:120px;margin:0 0 5px 0;">
							<input type="hidden" name="already_img[]" value="<?php echo $rowimg; ?>">
							<a href="javascript:void(0);" class="remove_button2" title="Remove field"
							style="position: absolute;margin: -30px 4px 0px 0px;background:#f5f5f5;;"
							><img src="<?php echo base_url(); ?>/upload/x.png" style="width:25px; height:25px;"/></a>
							</div>
							</div>
							<script type="text/javascript">
								$(document).ready(function(){
									//var maxField = 4; //Input fields increment limitation
									//var addButton = $('.add_button2'); //Add button selector
									var wrapper = $('.field_wrapper99'); //Input field wrapper	
									var x = 1; //Initial field counter is 1
									
									$(wrapper).on('click', '.remove_button2', function(e){ //Once remove button is clicked
										e.preventDefault();
										$(this).parent('div').remove(); //Remove field html
										x--; //Decrement field counter
									});
								});
							</script>
							<?php
						}
						
						?>
							
						<?php }else{ echo(" <h3>Upload Photo</h3>"); } ?>
						</div>
						<div class="col-lg-12">&nbsp;</div>
						<label class="control-label col-md-3"></label>
						<div class="col-md-9">
						
						<div id="filediv"><input name="file[]" type="file" id="file"/></div>
							<input type="button" id="add_more" class="upload" value="Add More Files" />
						   <!--input name="file" class="form-control file-styled" type="file" required=""->
						  <span class="help-block" style="color: red;font-weight: bold;text-shadow: 1px 2px 9px red;"> Add more Max file size 2MB </span>
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
					<div class="panel-heading"><b>Add Testimonials Youtube URL</b></div>  
					<div class="panel-body">
						<fieldset class="content-group">
							<legend class="text-bold"></legend>

						</fieldset>
						<div class="form-group">
							<label class="control-label col-md-3"><b>Youtube URL</b></label>
							<div class="col-md-9">
								<div class="form-group">
						<div class="field_wrapper">
						<?php 
								 $chk003=$row->youtube_url;
								 $arr003=explode(",",$chk003);
								 //$i=0;
								//foreach($arr003 as $val003)
								//{
									//echo $ii =$arr003[0];
									?>
									
								<div>
								<div class="col-md-12" style="background:whitesmoke;">
								
									<div class="row">
										<div class="col-md-12">
											<input type="text" name="youtubeurl[]" class="form-control" data-popup="tooltip"  value="<?php echo $arr003[0]; ?>">
											<!--a href="javascript:void(0);" class="remove_button btn btn-default" title="Remove field"><i class="fa fa-remove" style="color:red;font-size:25px;"/></i>Click Here Remove</a-->
										</div>
										
									</div>
									<div class="row">
										<div class="col-md-12">
											<input type="text" name="youtubeurl[]" class="form-control" data-popup="tooltip"  value="<?php echo $arr003[1]; ?>">
											<!--a href="javascript:void(0);" class="remove_button btn btn-default" title="Remove field"><i class="fa fa-remove" style="color:red;font-size:25px;"/></i>Click Here Remove</a-->
										</div>
										
									</div>
									<div class="row">&nbsp;</div>

								</div>
								</div>
								
								<?php
									//	}
										?>
						</div>	
						<!--
						<?php 
						foreach($arr003 as $val003)
						{
							$count = count($arr003);
						if($count > 0)
						{
						?>
						<div class="row text-right">
								<a href="javascript:void(0);" class="add_button btn btn-default" title="Add field">
								<i class=" fa fa-plus-square" style="color:green;font-size:25px;margin: 10px 10px;"/></i> Click Here Addmore</a>
							</div>
						<?php 
						}
						elseif($count > 0)
						{
						?>
						<div class="row text-right">
								<a href="javascript:void(0);" class="add_button btn btn-default" title="Add field">
								<i class=" fa fa-plus-square" style="color:green;font-size:25px;margin: 10px 10px;"/></i> Click Here Addmore</a>
							</div>
						<?php 	
						}
						else
						{
							
						}
							
								}
						?>
							-->			
					 </div>
							</div>
						</div>
						<div class="text-right">
							<button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
							<input type="submit" class="btn btn-primary icon-arrow-right14 position-right" value="Update" name="Update_data"> 
						</div>
					</div>
				</div>
			</div>
		</form>		
	</div>

               <?php } ?>
               <br><br>
            </div>
         </div>
      </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
   