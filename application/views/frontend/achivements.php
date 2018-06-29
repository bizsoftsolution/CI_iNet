<!--main starts-->
        <div id="main">
          <!--section class="fullwidth_banner">
            	<div class="container">
	            	<h1>Our Achievements</h1>
                </div>
            </section-->
			<div class="breadcrumb-section">
            	<div class="container">
                	<h1>Achievers Club</h1>
                    <div class="breadcrumb">
                        <a href="<?php echo base_url(); ?>Front">Home</a>
                        <span class="fa fa-angle-double-right"></span>
                        <span class="current">Our Achievements</span>
                    </div>
                </div>
            </div>
                <!--container starts-->
                <div class="container">
                	<!--dt-sc-one-half starts-->
					<!--primary starts-->
            	<section id="primary" class="content-full-width">
                 
					<?php 
					$newsDet = $this->db->order_by('id', 'DESC')->get('tbl_achivement')->result();
					foreach($newsDet as $row)
					{
					
					?>			
				 
				 
                	<div class="column dt-sc-one-half first" >
                    	<article class="blog-entry">
                            <div class="blog-entry-inner" style="padding: 0px 0px 0px 0px;">
                                <div class="entry-meta">
                                    <!--a href="<?php echo base_url(); ?>Front/news_description/<?php echo $row->id;?>" class="blog-author"><img src="<?php echo base_url('assets/frontend/images/inetlogo.png');?>" alt="" title=""></a-->
                                    <!--div class="date">
                                        <span> <?php echo date('d' ,strtotime($row->datetime));?> </span> 
                                        <p> <?php echo date('M' ,strtotime($row->datetime));?> <br> <?php echo date('Y' ,strtotime($row->datetime));?> </p> 
                                    </div-->
                                    <!--<a href="#" class="comments">
                                        12 <span class="fa fa-comment"> </span>
                                    </a>-->
                                    <!--a href="#" class="entry_format"><span class="fa fa-picture-o"></span></a-->	
                                </div>		
                                <div class="entry-thumb">
                                    <a href="<?php echo base_url(); ?>Front/achivements_description/<?php echo $row->id;?>"><img src="<?php echo base_url();?>/upload/achivements/<?php echo $row->images; ?>" alt="" title="" class="sli_image"></a>
                                </div>		
                                <div class="entry-details">	
                                    <div class="entry-title">
                                        <h3><a href="<?php echo base_url(); ?>Front/achivements_description/<?php echo $row->id;?>"> <?php echo substr($row->title,0,40).'.'; ?> </a></h3>
                                    </div>			
                                    <!--entry-metadata ends-->	
                                    <!--div class="entry-body">
                                        <p style="text-align:justify;"><?php echo substr($row->description,0,200); ?></p>
                                    </div-->	 		
                                    <a href="<?php echo base_url(); ?>Front/achivements_description/<?php echo $row->id;?>" class="dt-sc-button small"> Read More <span class="fa fa-chevron-circle-right"> </span></a>		
                                </div>	
                            </div>
                        </article>
                	</div>
					<?php
					
					}
					
					?>
					 
                </section>
                <!--primary ends-->
				
					<div class="dt-sc-hr"></div>
					
                    <!--h2 class="dt-sc-hr-green-title"> Our Achievements </h2-->     
				   <!--
				   <?php 
					$data7 = $this->db->get("tbl_achivement")->result();
					$i=1;
					foreach($data7 as $row)
					{
						
					?>
                    <div class="column dt-sc-one-fourth first" style="margin-left:15px;">
                    	<div class="activity <?php if($i<=4){?>box<?php echo $i; }?>" style="margin: 15px 0;">
                        	<h4> <?php echo $row->title; ?></h4>
                            <img src="<?php echo base_url(); ?>upload/achivements/<?php echo $row->images; ?>" alt="" title="">
                            <p><?php echo $row->description; ?></p>
                        </div>
                    </div>
					
                    <?php
					if($i==4)
					{
						$i=0;
					}						
					$i++;
					//continue;
					}
					?>
                    -->
                     <!--dt-sc-one-half ends--> 
                    <div class="dt-sc-hr-very-small"></div>  
       
                    <!--dt-sc-one-half ends--> 
                </div>
                <!--container ends-->
             
               <!--primary ends-->
        </div>
        <!--main ends-->