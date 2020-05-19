<?php  
/**
 * 
 */
class Modelku extends CI_Model
{
	public function Cek_login($user,$pasw)
	{
		return $this->db->get_where('admin',array(
			'username' => $user,
			'password' => $pasw
		))->result_array();
	}

	public function Ambil_Motor()
	{
		return $this->db->get('motor')->result_array();
	}

	public function ambil_admin()
	{
		return $this->db->get('admin')->result_array();
	}

	public function do_tambah()
	{
		$data = [
			"merk" => $this->input->post("merk"),
			"tipe" => $this->input->post("tipe"),
			"bbm" => $this->input->post("bbm"),
			"harga" => $this->input->post("harga"),
			"foto" => $this->upload->data("file_name")
		];
		$this->db->insert("motor",$data);
	}

	public function show_motor($id)
	{
		return $this->db->get_where('motor',array(
			'id_motor' => $id
		))->row_array();
	}

	public function do_edit1()
	{
		$data = [
			"merk" => $this->input->post("merk"),
			"tipe" => $this->input->post("tipe"),
			"bbm" => $this->input->post("bbm"),
			"harga" => $this->input->post("harga")
		];
		$this->db->where('id_motor',$this->input->post('id'));
		$this->db->update('motor',$data);
	}
	public function do_edit2()
	{
		$data = [
			"merk" => $this->input->post("merk"),
			"tipe" => $this->input->post("tipe"),
			"bbm" => $this->input->post("bbm"),
			"harga" => $this->input->post("harga"),
			"foto" => $this->upload->data("file_name")
		];
		$this->db->where('id_motor',$this->input->post('id'));
		$this->db->update('motor',$data);
	}

	public function lihat_data($id)
	{
		return $this->db->get_where('motor',array(
			'id_motor' => $id
		))->row_array();
	}

	public function delete_motor($id)
	{
		$this->db->where('id_motor',$id);
		return $this->db->delete('motor');
	}

	public function ambil_pelanggan()
	{
		return $this->db->get('pelanggan')->result_array();
	}

	public function tambah_pelanggan()
	{
		$data = [
			"nama" => $this->input->post("nama"),
			"no_hp" => $this->input->post("no_hp"),
			"alamat" => $this->input->post("alamat"),
			"email" => $this->input->post("email"),
			"foto" => $this->upload->data("file_name")
		];
		$this->db->insert("pelanggan",$data);
	}

	public function lihatpelanggan($id)
	{
		$this->db->where('id_pelanggan',$id);
		return $this->db->get('pelanggan')->row_array();
	}

	public function edit_pelanggan()
	{
		$data = [
			"nama" => $this->input->post("nama"),
			"no_hp" => $this->input->post("no_hp"),
			"alamat" => $this->input->post("alamat"),
			"email" => $this->input->post("email")
		];
		$this->db->where('id_pelanggan',$this->input->post('id'));
		$this->db->update('pelanggan',$data);
	}
	public function edit_pelanggan2()
	{
		$data = [
			"nama" => $this->input->post("nama"),
			"no_hp" => $this->input->post("no_hp"),
			"alamat" => $this->input->post("alamat"),
			"email" => $this->input->post("email"),
			"foto" => $this->upload->data("file_name")
		];
		$this->db->where('id_pelanggan',$this->input->post('id'));
		$this->db->update('pelanggan',$data);
	}

	public function delete_pelanggan($id)
	{
		$this->db->where('id_pelanggan',$id);
		return $this->db->delete('pelanggan');
	}

	public function tambah_persewaan()
	{
		$date1 = date_create(date('Y-m-d'));
        $date2 = date_create($_POST['tanggal']);
       
        $interval = date_diff($date1,$date2);
        $lama_sewa = $interval->days;

        if ($lama_sewa==0) {
        	$lama_sewa=1;
        }

        $total_bayar = $lama_sewa;

		$data = [
			"id_admin" => $this->input->post("admin"),
			"id_pelanggan" => $this->input->post("pelanggan"),
			"id_motor" => $this->input->post("motor"),
			"tanggal_sewa" => date('Y-m-d'),
			"tanggal_kembali" => $this->input->post("tanggal"),
			"lama_sewa" => $lama_sewa,
			"total_bayar" => $total_bayar
		];
		$this->db->insert('persewaan',$data);
	}

	public function get_data()
	{
		$this->db->select("*");
		$this->db->from("persewaan");
		$this->db->join('admin','admin.id_admin=persewaan.id_admin');
		$this->db->join('pelanggan','pelanggan.id_pelanggan=persewaan.id_pelanggan');
		$this->db->join('motor','motor.id_motor=persewaan.id_motor');
		return $this->db->get()->result_array();
	}

	public function get_sewa($id)
	{
		$this->db->select("*");
		$this->db->from("persewaan");
		$this->db->join('admin','admin.id_admin=persewaan.id_admin');
		$this->db->join('pelanggan','pelanggan.id_pelanggan=persewaan.id_pelanggan');
		$this->db->join('motor','motor.id_motor=persewaan.id_motor');
		$this->db->where('id_persewaan',$id);
		return $this->db->get()->row_array();
	}

	public function do_edit_sewa()
	{
		$date1 = date_create(date('Y-m-d'));
        $date2 = date_create($_POST['tanggal']);
       
        $interval = date_diff($date1,$date2);
        $lama_sewa = $interval->days;

        if ($lama_sewa==0) {
        	$lama_sewa=1;
        }

        $total_bayar = $lama_sewa;

		$data = [
			"id_admin" => $this->input->post("admin"),
			"id_pelanggan" => $this->input->post("pelanggan"),
			"id_motor" => $this->input->post("motor"),
			"tanggal_sewa" => date('Y-m-d'),
			"tanggal_kembali" => $this->input->post("tanggal"),
			"lama_sewa" => $lama_sewa,
			"total_bayar" => $lama_sewa
		];

		$this->db->where('id_persewaan',$this->input->post('id'));
		$this->db->update('persewaan',$data);

	}

	public function hapus_sewa($id)
	{
		$this->db->where('id_persewaan',$id);
		$this->db->delete('persewaan');
	}

	public function edit_setting()
	{
		$data = [
			'password' => $this->input->post('psw') 
		];

		$this->db->where('username',$this->session->userdata('user'));
		$this->db->update('admin',$data);
	}
}