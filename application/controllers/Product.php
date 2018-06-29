<?php
class Product extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('ProductModel');
    $this->load->helper('url');
	$this->load->library('session');
	/* if ($this->session->userdata('user_type') != 'ADMIN')
	{
        redirect('login');
	} */
  }
  
  //*****************************************************************************************************************************//*****************************************************************************************************************************													           ADD POST *****************************************************************************************************************************//*****************************************************************************************************************************//
	
  function index()
  {
	  $data = array('message'=>'');
	  $data['productList']=$this->ProductModel->ProductList();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('backend/product/productList', $data);
      $this->load->view('template/footer'); 
  }
  public function productAdd()
  {
    $result = array('message'=>'');
    if($this->input->post('Submit_data'))
	{
		
		$featured_image="";
		if (!empty($_FILES['gallery']['name'])) {
                $config['upload_path']   = './upload/products/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name']     = $_FILES['gallery']['name'];
                $config['encrypt_name']=TRUE;
                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload('gallery')) {
                    $uploadData          = $this->upload->data();
                    $featured_image = $uploadData['file_name'];
                } else {
                    $featured_image = '';
                }
            } else {
                $featured_image = '';
            }

		//Check whether user upload picture
			/* $files = $_FILES;
			$images = array();
			$cpt = count($_FILES['file']['name']);
			for($i=0; $i<$cpt; $i++){
			$_FILES['file']['name']= $files['file']['name'][$i];
			$_FILES['file']['type']= $files['file']['type'][$i];
			$_FILES['file']['tmp_name']= $files['file']['tmp_name'][$i];
			$_FILES['file']['error']= $files['file']['error'][$i];
			$_FILES['file']['size']= $files['file']['size'][$i];
				$config['encrypt_name']=TRUE;
				$config['upload_path'] = './upload/products/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				
				if ($this->upload->do_upload('file'))
				{
					$upload_file = $this->upload->data();
					$images[] = $upload_file['file_name'];
					
				}
			}
			$fileName = implode(',',$images); */
			$youtubeurl = $this->input->post('youtubeurl');
			$youtubeurl1 ="";
			if(isset($youtubeurl) && is_array($youtubeurl)){
				$youtubeurl1 = implode(",", $youtubeurl); 
			}
		$data = array(
			'title' => $this->input->post('title'),						
			'description' => $this->input->post('description'),						
			'featured_image' => $featured_image,
			//'thumbnail_image' => $fileName,
			'youtube_url' => $youtubeurl1,
			'datetime' => date("Y-m-d h:i:s")
		);
		$result['message'] = $this->ProductModel->productAdd($data);
	}
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('backend/product/productAdd',$result);
    $this->load->view('template/footer');
  }
  public function productEdit($id)
  {
    $result = array('message'=>'');
    if($this->input->post('Update_data'))
    {
		$youtubeurl = $this->input->post('youtubeurl');
		$youtubeurl1 ="";
		if(isset($youtubeurl) && is_array($youtubeurl)){
			$youtubeurl1 = implode(",", $youtubeurl); 
		}
		
		
		$featured_image="";
		if (!empty($_FILES['gallery']['name'])) {
                $config['upload_path']   = './upload/products/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name']     = $_FILES['gallery']['name'];
                $config['encrypt_name']=TRUE;
                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload('gallery')) {
                    $uploadData          = $this->upload->data();
                    $featured_image = $uploadData['file_name'];
                } 
            } else {
                $featured_image = $this->input->post('old_featured_image');
            }
			
			
		//Check whether user upload picture
			/* $files = $_FILES;
			$images = array();
			$cpt = count($_FILES['file']['name']);
			for($i=0; $i<$cpt; $i++){
			$_FILES['file']['name']= $files['file']['name'][$i];
			$_FILES['file']['type']= $files['file']['type'][$i];
			$_FILES['file']['tmp_name']= $files['file']['tmp_name'][$i];
			$_FILES['file']['error']= $files['file']['error'][$i];
			$_FILES['file']['size']= $files['file']['size'][$i];
			$config['upload_path'] = './upload/products/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
			$config['encrypt_name']=TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			if ($this->upload->do_upload('file'))
			{
				$upload_file = $this->upload->data();
				$images[] = $upload_file['file_name'];
			}
			}
			$fileName = implode(',',$images);
			$already_get_img = $this->input->post('already_img');
			$fileName1 = implode(',',$already_get_img);
			$fileName2 = $fileName.','.$fileName1;
			
		$malay_link = $this->input->post('malay_link');
		//$malay_link1 ="";
		if(empty($malay_link)){
			$malay_link1 = 0;
		}
		else
		{
			$malay_link1 = $this->input->post('malay_link'); 
			
		} */
		/* $pDate = $this->input->post('post_date'); */
  		$data = array(
			'title' => $this->input->post('title'),						
			'description' => $this->input->post('description'),						
			'featured_image' => $featured_image,
			//'thumbnail_image' => $fileName2,
			'youtube_url' => $youtubeurl1,
			'datetime' => date("Y-m-d h:i:s")
  		);
  		$result['message'] = $this->ProductModel->productEdit($data,$id);
      if($result['message'] == 'SUCCESS')
      {
		$messge = array('message' => 'Data updated successfully','class' => 'alert alert-success fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."Product");
      }
    }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['post']=$this->ProductModel->productGet($id);
    $this->load->view('backend/product/productEdit',$result);
    $this->load->view('template/footer');
  }
	public function productDelete($id)
  {
    $result = $this->ProductModel->productDelete($id);
	if($result == 'SUCCESS')
      {
		$messge = array('message' => 'Data deleted successfully','class' => 'alert alert-danger fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."Product");
      }
  }
  
}
?>
