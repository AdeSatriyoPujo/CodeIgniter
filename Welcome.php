<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index(){
		$data = $this->mymodel->GetBarang();
		$this->load->view('daftar-barang',array('data' => $data));
	}

	public function insert(){
		echo "tes";
	}

	public function update(){
	}

	public function delete(){
	}

	public function panggil(){
		$data = $this->db->query("SELECT * FROM barang");
		/*echo "<pre>";
		print_r($data);
		echo "</pre>";*/
		echo "Jumlah data = ".$data->num_rows()."<hr />";
		foreach ($data->result() as $row){
			echo "ID Barang : ".$row->ID_Barang."<br />";
			echo "Nama Barang: ".$row->Nmbarangr."<br />";
			echo "Jenis Barang: ".$row->Jnbarang."<br />";
			echo "Harga Barang : ".$row->Hgbarang."<br />";
			echo "Stok Barang : ".$row->Stbarang."<br />";
			echo "<hr />";
		}
	}
}
