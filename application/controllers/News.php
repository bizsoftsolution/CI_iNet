<?php
class News extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('NewsModel');
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
	  $data['newsList']=$this->NewsModel->NewsList();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('backend/news/newsList', $data);
      $this->load->view('template/footer'); 
  }
  public function newsAdd()
  {
    $result = array('message'=>'');
    if($this->input->post('Submit_data'))
	{
		
		$featured_image="";
		if (!empty($_FILES['gallery']['name'])) {
                $config['upload_path']   = './upload/news/';
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
				$config['upload_path'] = './upload/news/';
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
		$udate = date("Y-m-d", strtotime($this->input->post('newsdate')));
		$data = array(
			'title' => $this->input->post('title'),						
			'description' => $this->input->post('description'),						
			'featured_image' => $featured_image,
			'udate' =>$udate,
			'datetime' => date("Y-m-d h:i:s")
		);
		$result['message'] = $this->NewsModel->newsAdd($data);
	}
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('backend/news/newsAdd',$result);
    $this->load->view('template/footer');
  }
  public function newsEdit($id)
  {
    $result = array('message'=>'');
    if($this->input->post('Update_data'))
    {
		
		$featured_image="";
		if (!empty($_FILES['gallery']['name'])) {
                $config['upload_path']   = './upload/news/';
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
 */
		//$pDate = $this->input->post('post_date');
		$udate = date("Y-m-d", strtotime($this->input->post('newsdate')));
  		$data = array(
			'title' => $this->input->post('title'),						
			'description' => $this->input->post('description'),						
			'featured_image' => $featured_image,
			'udate' =>$udate,
			'datetime' => date("Y-m-d h:i:s")
  		);
  		$result['message'] = $this->NewsModel->newsEdit($data,$id);
      if($result['message'] == 'SUCCESS')
      {
		$messge = array('message' => 'Data updated successfully','class' => 'alert alert-success fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."News");
      }
    }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['post']=$this->NewsModel->newsGet($id);
    $this->load->view('backend/news/newsEdit',$result);
    $this->load->view('template/footer');
  }
	public function newsDelete($id)
  {
    $result = $this->NewsModel->newsDelete($id);
	if($result == 'SUCCESS')
      {
		$messge = array('message' => 'Data deleted successfully','class' => 'alert alert-danger fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."News");
      }
  }
  
}
?>
