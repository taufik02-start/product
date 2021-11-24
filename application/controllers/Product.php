<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model', 'product');
		$this->load->helper('text');
	}

	public function index()
	{
		$title = "Produk";
		$search = htmlspecialchars($this->input->get('q', true));
		$products = $this->product->getProducts($search);
		$data = [
			'title' => $title,
			'products' => $products
		];
		$this->load->view('header', $data);
		$this->load->view('home');
	}
	public function insert()
	{
		$this->form_validation->set_rules(
			'nama',
			'Nama Produk',
			'required',
			[
				'required' => "%s harus diisi"
			]
		);
		
		$this->form_validation->set_rules(
			'harga',
			'Harga',
			'required|numeric',
			[
				'required' => "%s harus diisi",
				'numeric' => "%s isi dengan angka"
			]
		);
		
		$this->form_validation->set_rules(
			'stok',
			'Stok',
			'required|numeric',
			[
				'required' => "%s harus diisi",
				'numeric' => "%s isi dengan angka"
			]
		);

		$this->form_validation->set_rules(
			'keterangan',
			'Keterngan',
			'required',
			[
				'required' => "%s harus diisi"
			]
		);


		if ($this->form_validation->run() == false) {
			$data = [
				'title' => 'Tambah Produk',
			];
			$this->load->view('header',$data);
			$this->load->view('insert');
		}else{
			$data = [
				'nama_produk'=>htmlspecialchars($this->input->post('nama',true)),
				'harga'=>htmlspecialchars($this->input->post('harga',true)),
				'jumlah'=>htmlspecialchars($this->input->post('stok',true)),
				'keterangan'=>htmlspecialchars($this->input->post('keterangan',true)),
			];
			$this->product->insert($data);
			redirect('');
		}
	}
	public function delete($id)
	{
		$this->product->delete(['id'=>$id]);
		redirect('');
	}
	public function edit($id)
	{
		$this->form_validation->set_rules(
			'nama',
			'Nama Produk',
			'required',
			[
				'required' => "%s harus diisi"
			]
		);
		
		$this->form_validation->set_rules(
			'harga',
			'Harga',
			'required|numeric',
			[
				'required' => "%s harus diisi",
				'numeric' => "%s isi dengan angka"
			]
		);
		
		$this->form_validation->set_rules(
			'stok',
			'Stok',
			'required|numeric',
			[
				'required' => "%s harus diisi",
				'numeric' => "%s isi dengan angka"
			]
		);

		$this->form_validation->set_rules(
			'keterangan',
			'Keterngan',
			'required',
			[
				'required' => "%s harus diisi"
			]
		);


		if ($this->form_validation->run() == false) {
			$product = $this->product->getWhere('*',['id'=>$id]);
			$data = [
				'title' => 'Tambah Produk',
				'product'=>$product
			];
			$this->load->view('header',$data);
			$this->load->view('edit');
		}else{
			$data = [
				'nama_produk'=>htmlspecialchars($this->input->post('nama',true)),
				'harga'=>htmlspecialchars($this->input->post('harga',true)),
				'jumlah'=>htmlspecialchars($this->input->post('stok',true)),
				'keterangan'=>htmlspecialchars($this->input->post('keterangan',true)),
			];
			$this->product->update($data,['id'=>$id ]);
			redirect('');
		}
	}
}
