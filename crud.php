<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}



	public function index(){
		$data['barang'] = $this->db->get('barang');
		$this->load->view('crud/index', $data);
	}

	public function tambaharang(){
		$this->load->view('crud/tambahbarang');
	}

	public function protambaharang(){

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
			redirect('crud','refresh');
		}else{
			echo '<center><strong>Mohon maaf, data yang anda masukkan telah digunakan</strong></center><br>';
		}
	}

	public function editbarang($ID_Barang)
	{
		$where = array('ID_Barang' => $ID_Barang);
		$data['barang'] = $this->mymodel->UpdateData($where,'barang')->result();
		$this->load->view('crud/editbarang',$data);
	}

	public function proeditbarang(){
		$ID_Barang = $this->input->post('$ID_Barang');
		$Nmbarang = $this->input->post('$Nmbarang');
		$Jnbarang = $this->input->post('$Jnbarang');
		$Hgbarang = $this->input->post('$Hgbarang');
		$Stbarang= $this->input->post('$Stbarang');


		$data = array(
			`ID_Barang` => $ID_Barang
			`Nmbarang` => $Nmbarang
		  `Jnbarang` => $Jnbarang
		  `Hgbarang` => $Hgbarang
		  `Stbarang` => $Stbarang
		);
		$where = array(
			'ID_Barang' => $ID_Barang
		);

		$this->mymodel->update_data($where,$data,'barang');
		redirect('crud');
	}

	public function hapusbarang( $ID_Barang = NULL)
	{
		$this->db->where('ID_Barang', $ID_Barang);
		$this->db->delete('barang');
		redirect('crud');
	}
}
