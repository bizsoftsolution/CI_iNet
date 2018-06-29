        <!--main starts-->
        <div id="main">
			<div class="breadcrumb-section">
            	<div class="container">
                	<h1>Our Downloads</h1>
                    <div class="breadcrumb">
                        <a href="<?php echo base_url(); ?>Front">Home</a>
                        <span class="fa fa-angle-double-right"></span>
                        <span class="current">Our Downloads</span>
                    </div>
                </div>
            </div>
          <!--section class="fullwidth_banner">
            	<div class="container">
	            	<h1>Our Downloads</h1>
                </div>
            </section-->
                <!--container starts-->
                <div class="container">
                	<!--dt-sc-one-half starts-->
					<div class="dt-sc-hr"></div>
					<h2 class="dt-sc-hr-green-title">Downloads</h2>
					
					<div class="dt-sc-hr" style="margin: 10px 0px;"></div>
                    <div class="" style="margin:0 5%;">
						<?php 
							$data7 = $this->db->get("tbl_category")->result();
							foreach($data7 as $data7row)
							{
						?>
						<div class="column dt-sc-one-fourth" style="margin: 0px">
							<a href="<?php echo base_url(); ?>Front/downloadsfolder/<?php echo $data7row->id; ?>">
							<img src="<?php echo base_url(); ?>assets/frontend/downfolder.png" style="padding: 0px 20px;margin:0 auto; display:block;" class="img_folder" ></a>
							<p align="center" style="font-size: 20px;margin: 10px 0;"><?php echo $data7row->title; ?></p>
						</div>
						<?php 
							}
						?>
                    </div> 
					<div class="dt-sc-hr"></div><div class="dt-sc-hr"></div>					
                    <!--dt-sc-one-half ends-->
                    <!--dt-sc-one-half starts-->
                    
                    <!--dt-sc-one-half ends--> 
                    <div class="dt-sc-hr-very-small"></div>  
       
                    <!--dt-sc-one-half ends--> 
                </div>
				<div class="container">&nbsp;</div>
				<div class="container">&nbsp;</div>
				<div class="container">&nbsp;</div>
				<div class="container">&nbsp;</div>
				<div class="container">&nbsp;</div>
                <!--container ends-->
             
               <!--primary ends-->
        </div>
        <!--main ends-->