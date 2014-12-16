<? php if (!defined('BASEPATH')) exit ('No direct script access allowed');

class akun extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function tambah_akun ($nama, $alamat){
		$data = array{
			'nama' => $nama,
			'alamat' => $alamat
		};
		$this->db->insert ('akun', $data);
		$lastid = $this->db->insert_id();
		return $lastid;
	}

	public function read_akun(){
		$result = $this->db->get('akun');
		return $result->result();
	}

	public function update_akun ($id, $nama, $alamat){
		$data = array{
			'nama' => $nama,
			'alamat' => $alamat
		};
		$this->db->where('id_akun', $id);
		$this->db->update('akun', $data);
	}

	public function delete_akun ($id){
		$this->db->where ('id_akun', $id);
		$this->db->delete('akun');
	}
}