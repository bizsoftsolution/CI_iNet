<?php
class Front extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('FrontModel');
    $this->load->helper('url');
	 $this->load->helper('form');
	$this->load->library('session');
	$this->load->library('cart');
	$this->load->database();
  }

  function index()
  {
    $this->load->view('template/front_header');
    //$this->load->view('front/template/slider');
    $this->load->view('frontend/index');
	$this->load->view('template/front_footer');
  }
  function aboutus()
  {
    $this->load->view('template/front_header');
    $this->load->view('frontend/aboutus');
    $this->load->view('template/front_footer');
  }
  function news()
  {
    $this->load->view('template/front_header');
    $this->load->view('frontend/news');
    $this->load->view('template/front_footer');
  } 
  function product_v_card()
  {
    $this->load->view('template/front_header');
    $this->load->view('frontend/product_v_card');
    $this->load->view('template/front_footer');
  } 
  function matcha()
  {
    $this->load->view('template/front_header');
    $this->load->view('frontend/matcha');
    $this->load->view('template/front_footer');
  }
  function lingzhi()
  {
    $this->load->view('template/front_header');
    $this->load->view('frontend/lingzhi');
    $this->load->view('template/front_footer');
  } 
  function i_mineral()
  {
    $this->load->view('template/front_header');
    $this->load->view('frontend/i_mineral');
    $this->load->view('template/front_footer');
  }
  function news_description($id)
  {
	$data['id']=$id;
    $this->load->view('template/front_header');
    $this->load->view('frontend/news_description',$data);
    $this->load->view('template/front_footer');
  }
  function product()
  {
    $this->load->view('template/front_header');
    $this->load->view('frontend/product');
    $this->load->view('template/front_footer');
  }
  function product_description($id)
  {
	$data['product_description'] = $this->FrontModel->product_description($id);
    $this->load->view('template/front_header');
    //$this->load->view('front/template/slider');
    $this->load->view('frontend/product_description',$data);
    $this->load->view('template/front_footer');
  }
  function video()
  {
    $this->load->view('template/front_header');
    $this->load->view('frontend/video');
    $this->load->view('template/front_footer');
  }
  function gallery()
  {
    $this->load->view('template/front_header');
    $this->load->view('frontend/gallery');
    $this->load->view('template/front_footer');
  }
  function view($id)
  {
	$data['gallery_view'] = $this->FrontModel->view($id);
    $this->load->view('template/front_header');
    $this->load->view('frontend/gallerylist',$data);
    //$this->load->view('template/front_footer');
  }
  function achivements()
  {
    $this->load->view('template/front_header');
    $this->load->view('frontend/achivements');
    $this->load->view('template/front_footer');
  }
  function achivements_description($id)
  {
	$data['id']=$id;
    $this->load->view('template/front_header');
    $this->load->view('frontend/achivements_description',$data);
    $this->load->view('template/front_footer');
  }
  function contactus()
  {
    $this->load->view('template/front_header');
    $this->load->view('frontend/contactus');
    $this->load->view('template/front_footer');
  }
  function contactemail()
  {
	if($this->input->post('txtname'))
	{
    $this->load->library('email');
		$subject = 'Contact Mail ';
			//$message = '<p>Hi.</p>';

			// Get full html:
				$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
					<meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
					<title>' . html_escape($subject) . '</title>
					<style type="text/css">
						body {
							font-family: Arial, Verdana, Helvetica, sans-serif;
							font-size: 16px;
						}
					</style>
				</head>
				<body>
					
						Hello there,
						<br>
							Thank you for Contact Us.
							<br>
							<table border="10">
								<tr>
									<td>Name : </td>
									<td>'.$this->input->post('txtname').' </td>
								</tr>
								<tr>
									<td>Contact Number: </td>
									<td>'.$this->input->post('txtcontact').' </td>
								</tr>
								<tr>
									<td>Interted Product: </td>
									<td>'.$this->input->post('txtinterest').' </td>
								</tr>
								<tr>
									<td>Email ID: </td>
									<td>'.$this->input->post('txtemail').' </td>
								</tr>
								<tr>
									<td>Queries: </td>
									<td>'.$this->input->post('txtmessage').' </td>
								</tr>
								
							</table>
						<br>
	
				</body>
				</html>';

			
			$result = $this->email
					->from('vasan2214@gmail.com')
					->reply_to('vasan2214@gmail.com')    // Optional, an account where a human being reads.
					//->to('rajkumar.bizsoft@gmail.com')
					->to('vasan2214@gmail.com')
					->subject($subject)
					->message($body)
					->send();
		if($result)
		{
			$messge = array('message' => 'Message successfully sent','class' => 'alert alert-success fade in');
			$this->session->set_flashdata('item', $messge);
			$base_url=base_url();
			redirect("$base_url"."Front/contactus");
		}
		else
		{
			echo $this->email->print_debugger();
		}
	}
  }
  function downloads()
  {
    $this->load->view('template/front_header');
    $this->load->view('frontend/downloadsfolder');
    $this->load->view('template/front_footer');
  }
  function downloadsfolder($id)
  {
	$data['cat_id'] = $id;
    $this->load->view('template/front_header');
    $this->load->view('frontend/downloads', $data);
    $this->load->view('template/front_footer');
  }
  function downloads_description($id)
  {
	$data['downloads_description'] = $this->FrontModel->downloads_description($id);
    $this->load->view('template/front_header');
    $this->load->view('frontend/downloads_description',$data);
    $this->load->view('template/front_footer');
  }
  
}
?>
