<script type="application/javascript">
/** After windod Load */
$(window).bind("load", function() {
  window.setTimeout(function() {
    $(".alert").fadeTo(300, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 4000);
});
</script>
<div class="content-wrapper">
<!-- Content area -->
<div class="content">
<div class="breadcrumb-line breadcrumb-line-component">
   <a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
   <ul class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li class="active">Downloads</li>
   </ul>
</div>
<br>
<!-- Main charts -->
<div class="row">
   <div class="col-lg-12">
      <!-- Traffic sources -->
	<div class="panel panel-flat">
        <div class="panel-heading">
			<div class="col-md-3">
				<h3 class="panel-title">Downloads List</h3>
			</div>
			<div class="col-md-6">
				<?php
				if($this->session->flashdata('notification')) 
				{
				$message = $this->session->flashdata('notification');
				?>
				<div class="<?php echo $message['class'] ?>"><?php echo $message['message']; ?>

				</div>
				<?php
				}
				?>
			</div>
			<div class="col-md-3">
				<div style="text-align:right;">
					<a class="btn bg-purple" href="<?php echo  base_url();?>Downloads/Add"><i class="glyphicon glyphicon-plus"></i> Add </a>
			   </div>
			</div>
           <hr/>
        </div>
		<div class="panel-body">
			<div class="tabbable">
				<ul class="nav nav-tabs nav-tabs-highlight">
					<li ><a href="<?php echo base_url(); ?>Downloads/categoryList" >Folder List</a></li>
					<li class="active"><a href="<?php echo base_url(); ?>Downloads/categoryList" >Downloads</a></li>
				</ul>

				<div class="tab-content">
					<div class="active">
					  <!-- Traffic sources -->
						<table class="table datatable-button-print-columns">
							<thead>
							   <tr>

								 <th>Sno</th>
								 <th>Title</th>
								 <!--th>Featured Image</th-->
								 <th style="width:180px;">Action </th>
							   </tr>
							</thead>
							<tbody>
							<?php
							$i=1;
							  foreach($List as $row) {
							?>
							  <tr>
							  <td><?php echo $i; ?></td>
							  <td><?php echo $row->title;?></td>

							  <!--td>
							  <img src="<?php echo base_url(); ?>upload/downloads/<?php echo $row->featured_image;?>" class="img-responsive" style="width:100px;height:60px;">
							  </td-->
							  <td style="text-align:right">
							  <a href="<?php echo base_url(); ?>Downloads/Edit/<?php echo $row->id;?>" title="Edit" class="btn bg-success"><i class="glyphicon glyphicon-pencil "></i>
							  </a>&nbsp;<a href="<?php echo base_url(); ?>Downloads/Delete/<?php echo $row->id;?>"  title="Delete" class="btn bg-danger remove" onclick="return confirm('Are You Sure want to Delete');"><i class="glyphicon glyphicon-remove "></i></a>
							  </td>
							  </tr>
							  <?php $i++;}?>


							</tbody>
						 </table>
					  <!-- /traffic sources -->
					</div>
				</div>
			</div>
		</div>
         
    </div>
      <!-- /traffic sources -->
   </div>
</div>
<!-- /dashboard content -->
