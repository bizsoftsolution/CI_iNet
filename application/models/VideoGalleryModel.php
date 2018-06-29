<?php
class VideoGalleryModel extends CI_Model {
	function __construct()
    {
		parent::__construct();
		$this->load->database();
    }

//*****************************************************************************************************************************//*****************************************************************************************************************************													          ADD POST *****************************************************************************************************************************//*****************************************************************************************************************************//
	function VideoList()
    {
		//$query = $this->db->order_by('id','desc')->get('tbl_english_post');
		//return $query->result();
		return $data_tbl_post = $this->db->order_by('id', 'DESC')->get('tbl_video')->result();
		
    }
	function VideoAdd($data)
	{
      if($this->db->insert('tbl_video',$data))
      {
			return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }

	}
	function videoGet($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_video');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
    }
	function videoEdit($data,$id)
    {

      $this->db->where('id',$id);      //var_dump($id);exit();
	   if($this->db->update('tbl_video',$data))
	   {
			return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
    function videoDelete($id)
    {
       if($this->db->delete('tbl_video', array('id' => $id)))
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
