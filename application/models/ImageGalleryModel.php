<?php
class ImageGalleryModel extends CI_Model {
	function __construct()
    {
		parent::__construct();
		$this->load->database();
    }

//*****************************************************************************************************************************//*****************************************************************************************************************************													          ADD POST *****************************************************************************************************************************//*****************************************************************************************************************************//
	function galleryList()
    {
		//$query = $this->db->order_by('id','desc')->get('tbl_english_post');
		//return $query->result();
		return $data_tbl_post = $this->db->order_by('id', 'DESC')->get('tbl_gallery')->result();
		
    }
	function galleryAdd($data)
	{
      if($this->db->insert('tbl_gallery',$data))
      {
			return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }

	}
	function galleryGet($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_gallery');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
    }
	function galleryEdit($data,$id)
    {

      $this->db->where('id',$id);      //var_dump($id);exit();
	   if($this->db->update('tbl_gallery',$data))
	   {
			return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
    function galleryDelete($id)
    {
       if($this->db->delete('tbl_gallery', array('id' => $id)))
	   {
		   return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
		

	
}
?>
