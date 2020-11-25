<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Product_Model');

		if(!$this->session->userdata("admin_session"))
			redirect(base_url().'login');
	}

	public function index(){
		$data["products"]=$this->Product_Model->list();
		$this->load_view("product",$data);
	}

	public function load_view($view,$data){
		$this->load->view('_head');
		$this->load->view('_sidebar');
		$this->load->view('_header');
		$this->load->view($view,$data);
		$this->load->view('_foot');
	}

	public function update($item_code){
		$data["product"]=$this->Product_Model->fetch_db($item_code);
		$this->load_view("product_update_view",$data);
	}

	public function delete($item_code){
		$this->Product_Model->del($item_code);
		redirect(base_url().'product');
	}

	public function detail($item_code){
		$data["product"]=$this->Product_Model->fetch_db($item_code);
		$this->load_view("product_detail_view",$data);
	}

	public function new(){
		
		$this->load_view("product_new_view",0);
	}

	public function save_update(){
		$data=array(
			'item_code'	=> $this->input->post('item_code'),
			'brand'	   	=> $this->input->post('brand'),
			'name'		=> $this->input->post('name'),
			'category'	=> $this->input->post('category'),
			'status'	=> $this->input->post('status'),
			'create_at' => $this->input->post('create_at'),
			'update_at' => date('Y-m-d H:i:s'),
			'kdv'   	=> $this->input->post('kdv'),
			'stock' 	=> $this->input->post('stock'),
		);
		$this->Product_Model->update($data);
		redirect(base_url().'product');
	}

	public function save_new(){
		$data=array(
			'item_code'	=> $this->input->post('item_code'),
			'brand'	   	=> $this->input->post('brand'),
			'name'		=> $this->input->post('name'),
			'category'	=> $this->input->post('category'),
			'status'	=> $this->input->post('status'),
			'create_at' => date('Y-m-d H:i:s'),
			'update_at' => $this->input->post('update_at'),
			'kdv'   	=> $this->input->post('kdv'),
			'stock' 	=> $this->input->post('stock'),
		);
		$this->Product_Model->insert($data);
		redirect(base_url().'product');
	}
}
