<?php
class ImageGallery extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('ImageGalleryModel');
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
	  $data['galleryList']=$this->ImageGalleryModel->galleryList();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('backend/gallery/galleryList', $data);
      $this->load->view('template/footer'); 
  }
  public function galleryAdd()
  {
    $result = array('message'=>'');
    if($this->input->post('Submit_data'))
	{
		//Check whether user upload picture
			$files = $_FILES;
			$images = array();
			$cpt = count($_FILES['file']['name']);
			for($i=0; $i<$cpt; $i++){
			$_FILES['file']['name']= $files['file']['name'][$i];
			$_FILES['file']['type']= $files['file']['type'][$i];
			$_FILES['file']['tmp_name']= $files['file']['tmp_name'][$i];
			$_FILES['file']['error']= $files['file']['error'][$i];
			$_FILES['file']['size']= $files['file']['size'][$i];
				$config['encrypt_name']=TRUE;
				$config['upload_path'] = './upload/gallery/';
				$config['allowed_types'] = '*';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				
				if ($this->upload->do_upload('file'))
				{
					$upload_file = $this->upload->data();
					$images[] = $upload_file['file_name'];
					
				}
			}
			$fileName = implode(',',$images);
		$data = array(
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'images' => $fileName,
			'date' => date("Y-m-d h:i:s")
		);
		$result['message'] = $this->ImageGalleryModel->galleryAdd($data);
	}
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('backend/gallery/galleryAdd',$result);
    $this->load->view('template/footer');
  }
  public function galleryEdit($id)
  {
    $result = array('message'=>'');
    if($this->input->post('Update_data'))
    {
		//Check whether user upload picture
			$files = $_FILES;
			$images = array();
			$cpt = count($_FILES['file']['name']);
			for($i=0; $i<$cpt; $i++){
			$_FILES['file']['name']= $files['file']['name'][$i];
			$_FILES['file']['type']= $files['file']['type'][$i];
			$_FILES['file']['tmp_name']= $files['file']['tmp_name'][$i];
			$_FILES['file']['error']= $files['file']['error'][$i];
			$_FILES['file']['size']= $files['file']['size'][$i];
			$config['upload_path'] = './upload/gallery/';
			$config['allowed_types'] = '*';
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
  		$data = array(
			'title' => $this->input->post('title'),	
			'description' => $this->input->post('description'),	
			'images' => $fileName2,
			'date' => date("Y-m-d h:i:s")
  		);
  		$result['message'] = $this->ImageGalleryModel->galleryEdit($data,$id);
      if($result['message'] == 'SUCCESS')
      {
		$messge = array('message' => 'Data updated successfully','class' => 'alert alert-success fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."ImageGallery");
      }
    }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['gallery']=$this->ImageGalleryModel->galleryGet($id);
    $this->load->view('backend/gallery/galleryEdit',$result);
    $this->load->view('template/footer');
  }
	public function galleryDelete($id)
  {
    $result = $this->ImageGalleryModel->galleryDelete($id);
	if($result == 'SUCCESS')
      {
		$messge = array('message' => 'Data deleted successfully','class' => 'alert alert-danger fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."ImageGallery");
      }
  }
  
}
?>
