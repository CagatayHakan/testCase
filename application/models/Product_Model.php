<?php
Class Product_Model extends CI_Model{
  public function __construct(){
    parent::__construct();
    $this->load->database();
  }

  //--------LIST PRODUCT---------------
  function list(){
    $this->db->select("*");
    $this->db->from('product');
    $this->db->order_by("item_code", "desc");
    $query = $this->db->get(); 
    return $query->result();
  }

  //--------DELETE PRODUCT---------------
  function del($item_code){
  	$this->db->where('item_code', $item_code);
    $this->db->delete('product');
  }

  //--------FETCH PRODUCT---------------
  function fetch_db($item_code){
    $this->db->select("*");
    $this->db->from('product');
    $this->db->where('item_code', $item_code);
    $query = $this->db->get();
    return $query->result();
  }

  //--------UPDATE PRODUCT---------------
  function update($data){
    $this->db->where('item_code', $data['item_code'] );
    $this->db->update('product',$data);
  }

  //--------INSERT PRODUCT---------------
  function insert($data){
   $this->db->insert("product",$data);
  } 
}
?>