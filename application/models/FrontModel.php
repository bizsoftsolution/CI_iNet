<?php
class FrontModel extends CI_Model {
 function __construct()
    {
	  parent::__construct();
	  $this->load->database();
    }
	
	
	function product_description($id)
	{
	$this->db->where("id", $id);
	$query = $this->db->get('tbl_product');
	return $query->result();
    }
	function view($id)
	{
	$this->db->where("id", $id);
	$query = $this->db->get('tbl_gallery');
	return $query->result();
    }
	function downloads_description($id)
	{
	$this->db->where("id", $id);
	$query = $this->db->get('tbl_downloads');
	return $query->result();
    }
}
?>
