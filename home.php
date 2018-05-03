<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}



	public function index(){
		$data = $this->mymodel->GetBarang();
		$this->load->view('crud/index',array('data' => $data));
	}

	public function tambahbarang(){
		$this->load->view('tambah-barang');
	}

	public function protambahbarang(){
		$ID_Barang = $_POST['ID_Barang'];
		$Nmbarang = $_POST['Nmbarang'];
		$Jnbarang = $_POST['Jnbarang'];
		$Hgbarang = $_POST['Hgbarang'];
		$Stbarang = $_POST['Stbarang'];
		$data_insert = array(
			`ID_Barang` => $ID_Barang
			`Nmbarang` => $Nmbarang
		  `Jnbarang` => $Jnbarang
		  `Hgbarang` => $Hgbarang
		  `Stbarang` => $Stbarang
		);
		$res = $this->db->insert('barang',$data_insert);
		if($res>=1){
			redirect('barang/index');
		}else{
			echo '<center><strong>Mohon maaf, data yang anda masukkan telah digunakan</strong></center><br>';
		}
	}

	public function editbarang($ID_Barang = NULL){
		$this->db->where('ID_Barang', $ID_Barang);
		$data['content'] = $this->db->get('barang');
		$this->load->view('edit-barang' ,$data);
	}

	public function action_update($ID_Barang ='')
	{
		$data = array(
			'ID_Barang' = $this->input->post('$ID_Barang');
			'Nmbarang' = $this->input->post('$Nmbarang');
			'Jnbarang' = $this->input->post('$Jnbarang');
			'Hgbarang' = $this->input->post('$Hgbarang');
			'Stbarang' = $this->input->post('$Stbarang');
		);
		$this->db->where('ID_Barang', $ID_Barang);
		$this->db->update('barang', $data);

		$this->load->helper('url');
		redirect('barang','refresh');
	}

	public function hapusbarang($ID_Barang){
		$where = array('ID_Barang' => $ID_Barang);
		$res = $this->mymodel->DeleteData('barang',$where);
		if($res>=1){
			$this->load->helper('url');
			redirect('barang/index');
		}
	}

	public function panggil(){
		$data = $this->db->query("SELECT * FROM barang");
		/*echo "<pre>";
		print_r($data);
		echo "</pre>";*/
		echo "Jumlah data = ".$data->num_rows()."<hr />";
		foreach ($data->result() as $row){
			echo "ID Barang : ".$row->ID_Barang."<br />";
			echo "Nama Barang : ".$row->Nmbarang."<br />";
			echo "Jenis Barang : ".$row->Jnbarang."<br />";
			echo "Harga Barang : ".$row->Hgbarang."<br />";
			echo "Stok Barang : ".$row->Stbarang."<br />";
			echo "<hr />";
		}
	}
}
