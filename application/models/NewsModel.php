<?php
class NewsModel extends CI_Model {
	function __construct()
    {
		parent::__construct();
		$this->load->database();
    }

//*****************************************************************************************************************************//*****************************************************************************************************************************													          ADD POST *****************************************************************************************************************************//*****************************************************************************************************************************//
	function NewsList()
    {
		//$query = $this->db->order_by('id','desc')->get('tbl_english_post');
		//return $query->result();
		return $data_tbl_post = $this->db->order_by('id', 'DESC')->get('tbl_news')->result();
		
    }
	function NewsAdd($data)
	{
      if($this->db->insert('tbl_news',$data))
      {
			return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }

	}
	function newsGet($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_news');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
    }
	function newsEdit($data,$id)
    {

      $this->db->where('id',$id);      //var_dump($id);exit();
	   if($this->db->update('tbl_news',$data))
	   {
			return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
    function newsDelete($id)
    {
       if($this->db->delete('tbl_news', array('id' => $id)))
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
