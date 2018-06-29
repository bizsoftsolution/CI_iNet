<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li class="active">Video</li>
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
				<h3 class="panel-title">Video Edit
			</h3>
			</div>
			<div class="col-md-6">
				<div style="text-align:right;">
               <a href="<?php echo  base_url();?>VideoGallery" class="btn bg-pink"><i class="glyphicon glyphicon-refresh"></i> List</a>
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
                  <strong>Success !!! </strong> Video Updated successfully
               </div>
               <?php } ?>
               <?php foreach($videogallery as $row){?>
				<div class="col-md-12">
		<form class="form-horizontal form-validate-jquery" action="<?php echo  base_url();?>VideoGallery/videoEdit/<?php echo $row->id;?>" method="POST" enctype="multipart/form-data">
			<!--div class="col-md-12">
				<div class="panel panel-flat">
					<div class="panel-heading">Video Details</div>
					<div class="panel-body">
						
					</div>
				</div>
			</div-->


			<div class="col-md-12">
				<div class="panel panel-flat">
					 
					<div class="panel-body">
						<fieldset class="content-group">
							<legend class="text-bold"></legend>

						</fieldset>
						<div class="form-group">
							<label class="control-label col-md-3"><b>Youtube URL</b></label>
							<div class="col-md-9">
								<div class="form-group">
						<div class="field_wrapper">
									
								<div>
								<div class="col-md-12" style="background:whitesmoke;">
								
									<div class="row">
										<div class="col-md-12">
											<input type="text" name="youtubeurl" class="form-control" data-popup="tooltip"  value="<?php echo $row->youtube_url; ?>" required>
										</div>
										
									</div>
									<div class="row">&nbsp;</div>

								</div>
								</div>
						</div>						
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
   