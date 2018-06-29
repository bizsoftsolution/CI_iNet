<?php
class DownloadsModel extends CI_Model {
	function __construct()
    {
		parent::__construct();
		$this->load->database();
    }

//*****************************************************************************************************************************//*****************************************************************************************************************************													          ADD POST *****************************************************************************************************************************//*****************************************************************************************************************************//
	function categoryList()
    {
		return $data_tbl_post = $this->db->order_by('id', 'DESC')->get('tbl_category')->result();
		
    }
	function downloadList()
    {
		return $data_tbl_post = $this->db->order_by('id', 'DESC')->get('tbl_downloads')->result();
		
    }
	function addCategory($data)
	{
      if($this->db->insert('tbl_category',$data))
      {
			return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }

	}
	function Add($data)
	{
      if($this->db->insert('tbl_downloads',$data))
      {
			return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }

	}
	function getCategory($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
    }
	function Get($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_downloads');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
    }
	function editCategory($data,$id)
    {

      $this->db->where('id',$id);      //var_dump($id);exit();
	   if($this->db->update('tbl_category',$data))
	   {
			return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
	function Edit($data,$id)
    {

      $this->db->where('id',$id);      //var_dump($id);exit();
	   if($this->db->update('tbl_downloads',$data))
	   {
			return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
    function deleteCategory($id)
    {
       if($this->db->delete('tbl_category', array('id' => $id)))
	   {
		   return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
	function Delete($id)
    {
       if($this->db->delete('tbl_downloads', array('id' => $id)))
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
