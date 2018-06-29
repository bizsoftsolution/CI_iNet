<!-- Main sidebar -->
<div class="sidebar sidebar-main">
   <div class="sidebar-content">
      <!-- User menu -->
      <div class="sidebar-user-material">
         <div class="category-content">
            <div class="sidebar-user-material-content">
               <?php if($this->session->userdata('photo')!=null)
                  {?>
               <a href="#"><img src="<?php echo base_url('upload/'.$this->session->userdata('photo'));?>" class="img-circle img-responsive" alt=""></a>
               <?php    }
                  else {?>
               <a href="#"><img src="<?php echo base_url('assets/images/female_user.png');?>" class="img-circle img-responsive" alt=""></a>
               <?php        }
                  ?>
               <h6><?php echo $this->session->userdata('first_name');?></h6>
            </div>
            <div class="sidebar-user-material-menu">
               <a href="#user-nav" data-toggle="collapse"><span>My account</span> <i class="caret"></i></a>
            </div>
         </div>
         <div class="navigation-wrapper collapse" id="user-nav">
            <ul class="navigation">
               <!--li><a href="<?php echo base_url('Profile');?>"><i class="icon-user-plus"></i> <span>My profile</span></a></li>
               <li><a href="<?php echo base_url('changePassword');?>"><i class="icon-lock"></i> <span>Change Password</span></a></li>
               <li><a href="#"><i class="icon-comment-discussion"></i> <span><span class="badge bg-teal-400 pull-right">58</span> Messages</span></a></li>
               <li class="divider"></li>
               <li><a href="#"><i class="icon-cog5"></i> <span>Account settings</span></a></li-->
               <li><a href="<?php echo base_url(); ?>/User/logout"><i class="icon-switch2"></i> <span>Logout</span></a></li>
            </ul>
         </div>
      </div>
      <!-- /user menu -->
      <!-- Main navigation -->
      <div class="sidebar-category sidebar-category-visible">
         <div class="category-content no-padding">
            <ul class="navigation navigation-main navigation-accordion">
               <!-- Main -->
               <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
               <li class="active"><a href="<?php echo base_url('Dashboard');?>"><i class="icon-home7"></i> <span>Dashboard</span></a></li>
               <!-- /page kits -->
               <?php //if($this->session->userdata('user_type')=='SUPERADMIN')
                  //  {
                  ?>
               <li ><a href="<?php echo base_url('Product');?>"><i class="icon-stack3"></i> <span>Product Details</span></a></li>
               <li ><a href="<?php echo base_url('News');?>"><i class="icon-qrcode"></i> <span>News</span></a></li>
               <li ><a href="<?php echo base_url('VideoGallery');?>"><i class="icon-stack2"></i> <span>Video</span></a></li>
               <li ><a href="<?php echo base_url('ImageGallery');?>"><i class="icon-notebook"></i> <span>Gallery</span></a></li>
               <li ><a href="<?php echo base_url('Achivement');?>"><i class="icon-user-check"></i> <span>Achivements</span></a></li>
			   <li ><a href="<?php echo base_url('Downloads');?>"><i class="icon-stack"></i> <span>Downloads</span></a></li>
               <!--li>
                  <a href="#" class="has-ul legitRipple"><i class="icon-stack2"></i> <span>Master </span></a>
                  <ul class="hidden-ul">
                     <li><a href="<?php echo base_url('country/countryList');?>" class="legitRipple">Country Details</a></li>
                     <li><a href="<?php echo base_url('island/islandList');?>" class="legitRipple">Island Details</a></li>
                  </ul>
               </li-->
               <?php
                  //  }
                  ?>
            </ul>
         </div>
      </div>
      <!-- /main navigation -->
   </div>
</div>
<!-- /main sidebar -->