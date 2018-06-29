<!--main starts-->
        <div id="main">
        	<!--breadcrumb-section starts-->
            <div class="breadcrumb-section">
            	<div class="container">
                	<h1>Contact Us</h1>
                    <div class="breadcrumb">
                        <a href="<?php echo base_url(); ?>Front">Home</a>
                        <span class="fa fa-angle-double-right"></span>
                        <span class="current">Contact Us</span>
                    </div>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--container starts-->
            <div class="container">
            	<!--primary starts-->
            	<section id="primary" class="content-full-width" style="margin-bottom: 80px;">
				
					<div class="column dt-sc-one-third first cont_resp" >
	<div class="dt-sc-titled-box">
                            <h4 class="dt-sc-titled-box-title" style="    background-color: #4d6a79;"> iNET GLOBAL SDN BHD</h4>
                            <div class="dt-sc-titled-box-content" style=" padding: 27px 15px 109px 15px;
">
													<br>
                        <p>NO 28-1, JALAN KLANG SENTRAL 3/KU5, KLANG SENTRAL, 41050 KLANG,</p>
						<p>SELANGOR, MALAYSIA</p>
						<p><b>Contact</b> : 03 3362 3953 </p>
						<p><b>Email</b> : inetglobalmanagement@gmail.com </p>
						

                            </div>
                        </div>
						
					</div>
					<div class="column dt-sc-two-third cont_resp">
						<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.co.in/maps/ms?t=m&amp;msa=0&amp;msid=210081560837393183978.0004fecf4679182a0e1f0&amp;ie=UTF8&amp;ll=3.116391,101.438484&amp;spn=0.014998,0.018282&amp;z=15&amp;iwloc=0004fecf4bf9aa338dd29&amp;output=embed">
                        </iframe>
						<!--iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16300692.271646222!2d100.56258372126722!3d4.089202003504038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3034d3975f6730af%3A0x745969328211cd8!2sMalaysia!5e0!3m2!1sen!2sin!4v1522059050688" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe-->
					</div>
					<!--div id="map"> </div-->
                    
                    <div class="dt-sc-hr"> </div>
                    
					
                    <!--dt-sc-two-third starts-->
					
                    <div class="column dt-sc-three-fourth first contact_form_outer" style="width:100%;">
						
					
                        <form name="frcontact1" class="contact-form" method="POST" action="<?php echo base_url(); ?>Front/contactemail">
							<?php
							if($this->session->flashdata('item')) {
							$message = $this->session->flashdata('item');
							?>
							<div class="<?php echo $message['class'] ?>" style="color:white; border:1px solid green;background-color:green;margin-bottom:15px;"><?php echo $message['message']; ?>

							</div>
							<?php
							}
							?>
							
                        	<h2>We'd Like to Hear From You!</h2>
                            <p>
                                <input id="name" name="txtname" type="text" placeholder="Name" required="">
                            </p>
							<p>
                                <input id="contactnumber" name="txtcontact" type="text" placeholder="Contact Number" required="">
                            </p>
							 <p>
                                <input id="interest" name="txtinterest" type="text" placeholder="Intrested Product	" required="">
                            </p>
                            <p>
                                <input id="email" name="txtemail" type="email" placeholder="Email ID" required="">
                            </p>
                            <p>
                            	<textarea id="comment" name="txtmessage" placeholder="Queries"></textarea>
                            </p>
                            <!--div id="ajax_contact_msg"> </div-->
                            <p>
                                <input name="submitform" type="submit" id="submit" class="dt-sc-button medium" value="Send Email">
                            </p>
                        </form>
                    </div>
					
					<div>&nbsp;</div>
                    <!--dt-sc-two-third ends-->
                    
                    <!--dt-sc-one-third starts-->
                   
                    <!--dt-sc-one-third ends-->
                    
                </section>
                <!--primary ends-->
            </div>
            <!--container ends-->
        </div>
        <!--main ends-->