<?php
class Achivement extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('AchivementModel');
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
	  $data['achivementList']=$this->AchivementModel->achivementList();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('backend/achivements/achivementList', $data);
      $this->load->view('template/footer'); 
  }
  public function achivementAdd()
  {
    $result = array('message'=>'');
    if($this->input->post('Submit_data'))
	{
		
		$featured_image="";
		if (!empty($_FILES['gallery']['name'])) {
                $config['upload_path']   = './upload/achivements/';
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
            }
			
		$data = array(
			'title' => $this->input->post('title'),						
			'description' => $this->input->post('description'),						
			'images' => $featured_image,
			
			'datetime' => date("Y-m-d h:i:s")
		);
		$result['message'] = $this->AchivementModel->achivementAdd($data);
	}
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('backend/achivements/achivementAdd',$result);
    $this->load->view('template/footer');
  }
  public function achivementEdit($id)
  {
    $result = array('message'=>'');
    if($this->input->post('Update_data'))
    {
		
		$featured_image="";
		if (!empty($_FILES['gallery']['name'])) {
                $config['upload_path']   = './upload/achivements/';
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
            }
			

  		$data = array(
			'title' => $this->input->post('title'),						
			'description' => $this->input->post('description'),						
			'images' => $featured_image,
			
			'datetime' => date("Y-m-d h:i:s")
  		);
  		$result['message'] = $this->AchivementModel->achivementEdit($data,$id);
      if($result['message'] == 'SUCCESS')
      {
		$messge = array('message' => 'Data updated successfully','class' => 'alert alert-success fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."Achivement");
      }
    }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['achivements']=$this->AchivementModel->achivementGet($id);
    $this->load->view('backend/achivements/achivementEdit',$result);
    $this->load->view('template/footer');
  }
	public function achivementDelete($id)
  {
    $result = $this->AchivementModel->achivementDelete($id);
	if($result == 'SUCCESS')
      {
		$messge = array('message' => 'Data deleted successfully','class' => 'alert alert-danger fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."Achivement");
      }
  }
  
}
?>
