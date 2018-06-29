<?php
class Downloads extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('DownloadsModel');
    $this->load->helper('url');
	$this->load->library('session');
	/* if ($this->session->userdata('user_type') != 'ADMIN')
	{
        redirect('login');
	} */
  }
  
  //*****************************************************************************************************************************//*****************************************************************************************************************************													           ADD *****************************************************************************************************************************//*****************************************************************************************************************************//
	
  function index()
  {
	$data = array('message'=>'');
	$data['List']=$this->DownloadsModel->downloadList();
	$this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('backend/downloads/List', $data);
    $this->load->view('template/footer'); 
  }
  function categoryList()
  {
	  $data = array('message'=>'');
	  $data['Category']=$this->DownloadsModel->categoryList();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('backend/downloads/category', $data);
      $this->load->view('template/footer'); 
  }
  public function addCategory()
  {
	$result = array('message'=>'');
    if($this->input->post('Submit_data'))
	{
		//$udate = date("Y-m-d", strtotime($this->input->post('newsdate')));	
		$data = array(
			'title' => $this->input->post('title'),						
			'datetime' => date("Y-m-d h:i:s")
		);
		$result['message'] = $this->DownloadsModel->addCategory($data);
	}
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('backend/downloads/addCategory',$result);
    $this->load->view('template/footer'); 
  }
  public function Add()
  {
    $result = array('message'=>'');
    if($this->input->post('Submit_data'))
	{
		
		/* $featured_image="";
		if (!empty($_FILES['gallery']['name'])) {
                $config['upload_path']   = './upload/downloads/';
                $config['allowed_types'] = '*';
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
            } */
			
			
			$document_files="";
			if (!empty($_FILES['docment_files']['name'])) {
                $config['upload_path']   = './upload/downloads/';
                $config['allowed_types'] = '*';
                $config['file_name']     = $_FILES['docment_files']['name'];
                $config['encrypt_name']=TRUE;
                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload('docment_files')) {
                    $uploadData          = $this->upload->data();
                    $document_files = $uploadData['file_name'];
                } else {
                    $document_files = '';
                }
            } else {
                $document_files = '';
            }
		$udate = date("Y-m-d", strtotime($this->input->post('newsdate')));	
		$data = array(
			'cat_id'=>$this->input->post('category'),
			'title' => $this->input->post('title'),						
			'description' => $this->input->post('description'),						
			//'featured_image' => $featured_image,	
			'files' => $document_files,	
			'udate' => $udate,	
			'datetime' => date("Y-m-d h:i:s")
		);
		$result['message'] = $this->DownloadsModel->Add($data);
	}
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('backend/downloads/Add',$result);
    $this->load->view('template/footer');
  }
  public function editCategory($id)
  {
    $result = array('message'=>'');
    if($this->input->post('Update_data'))
    {
  		$data = array(
			'title' => $this->input->post('title'),
			'datetime' => date("Y-m-d h:i:s")
  		);
  		$result['message'] = $this->DownloadsModel->editCategory($data,$id);
		if($result['message'] == 'SUCCESS')
		{
			$messge = array('message' => 'Data updated successfully','class' => 'alert alert-success fade in');
			$this->session->set_flashdata('notification', $messge);
			$base_url=base_url();
			redirect("$base_url"."Downloads/categoryList");
		}
    }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['get']=$this->DownloadsModel->getCategory($id);
    $this->load->view('backend/downloads/editCategory',$result);
    $this->load->view('template/footer');
  }
  public function Edit($id)
  {
    $result = array('message'=>'');
    if($this->input->post('Update_data'))
    {
		
		/* $featured_image="";
		if (!empty($_FILES['gallery']['name'])) {
                $config['upload_path']   = './upload/downloads/';
                $config['allowed_types'] = '*';
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
            } */
			$document_files="";
			if (!empty($_FILES['docment_files']['name'])) {
                $config['upload_path']   = './upload/downloads/';
                $config['allowed_types'] = '*';
                $config['file_name']     = $_FILES['docment_files']['name'];
                $config['encrypt_name']=TRUE;
                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload('docment_files')) {
                    $uploadData          = $this->upload->data();
                    $document_files = $uploadData['file_name'];
                } 
            } else {
                $document_files = $this->input->post('old_file_image');
            }
		$udate = date("Y-m-d", strtotime($this->input->post('newsdate')));
  		$data = array(
			'cat_id'=>$this->input->post('edit_category'),
			'title' => $this->input->post('title'),						
			'description' => $this->input->post('description'),						
			//'featured_image' => $featured_image,
			'files' => $document_files,
			'udate' =>$udate,
			'datetime' => date("Y-m-d h:i:s")
  		);
  		$result['message'] = $this->DownloadsModel->Edit($data,$id);
      if($result['message'] == 'SUCCESS')
      {
		$messge = array('message' => 'Data updated successfully','class' => 'alert alert-success fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."Downloads");
      }
    }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['get']=$this->DownloadsModel->Get($id);
    $this->load->view('backend/downloads/Edit',$result);
    $this->load->view('template/footer');
  }
	public function deleteCategory($id)
	{
		$result = $this->DownloadsModel->deleteCategory($id);
		if($result == 'SUCCESS')
		{
			$messge = array('message' => 'Data deleted successfully','class' => 'alert alert-danger fade in');
			$this->session->set_flashdata('notification', $messge);
			$base_url=base_url();
			redirect("$base_url"."Downloads/categoryList");
		}
	}
  public function Delete($id)
  {
    $result = $this->DownloadsModel->Delete($id);
	if($result == 'SUCCESS')
      {
		$messge = array('message' => 'Data deleted successfully','class' => 'alert alert-danger fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."Downloads");
      }
  }
  
}
?>
