<?php
class VideoGallery extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('VideoGalleryModel');
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
	  $data['videoList']=$this->VideoGalleryModel->VideoList();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('backend/video/videoList', $data);
      $this->load->view('template/footer'); 
  }
  public function videoAdd()
  {
    $result = array('message'=>'');
    if($this->input->post('Submit_data'))
	{
		$youtubeurl = $this->input->post('youtubeurl');
		
		$data = array(
			'youtube_url' => $youtubeurl,
			'datetime' => date("Y-m-d h:i:s")
		);
		$result['message'] = $this->VideoGalleryModel->videoAdd($data);
	}
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('backend/video/videoAdd',$result);
    $this->load->view('template/footer');
  }
  public function videoEdit($id)
  {
    $result = array('message'=>'');
    if($this->input->post('Update_data'))
    {
		$youtubeurl = $this->input->post('youtubeurl');
  		$data = array(
			'youtube_url' => $youtubeurl,
			'datetime' => date("Y-m-d h:i:s")
  		);
  		$result['message'] = $this->VideoGalleryModel->videoEdit($data,$id);
      if($result['message'] == 'SUCCESS')
      {
		$messge = array('message' => 'Data updated successfully','class' => 'alert alert-success fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."VideoGallery");
      }
    }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['videogallery']=$this->VideoGalleryModel->videoGet($id);
    $this->load->view('backend/video/videoEdit',$result);
    $this->load->view('template/footer');
  }
	public function videoDelete($id)
  {
    $result = $this->VideoGalleryModel->videoDelete($id);
	if($result == 'SUCCESS')
      {
		$messge = array('message' => 'Data deleted successfully','class' => 'alert alert-danger fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."VideoGallery");
      }
  }
  
}
?>
