<?php 
	
 /**
  * 
  */
 class Login extends CI_Controller
 {
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Modelku');
 		$this->load->helper('url');
 		$this->load->database();
 	}
 	
 	public function index()
 	{
 		$this->load->view('halaman_login');
 	}

 	public function do_login()
 	{
 		$user = $this->input->post('uname');
 		$pasw = $this->input->post('password');
 		$login = $this->Modelku->Cek_login($user,$pasw);

 		if(count($login) > 0){
 			$this->session->set_userdata(array(
 				'user' => $user
 			));	
 			redirect('Login/admin');
 		}else{
 			$this->session->set_flashdata('login','gagal login');
 			redirect('login/index');
 		}
 	}

 	public function admin()
 	{
 		$data['user'] = $this->session->userdata('user');
 		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('admin/admin',$data);
		$this->load->view('template/footer');
 	}

 	public function motor()
 	{
 		$data['motor'] = $this->Modelku->Ambil_Motor();
 		$this->load->view('template/header');
		$this->load->view('template/menu2');
		$this->load->view('admin/motor',$data);
		$this->load->view('template/footer');
 	}

 	public function pelanggan()
 	{
 		$data['pelanggan'] = $this->Modelku->ambil_pelanggan();
 		$this->load->view('template/header');
		$this->load->view('template/menu3');
		$this->load->view('admin/pelanggan',$data);
		$this->load->view('template/footer');
 	}

 	public function persewaan()
 	{
 		$data['sewa'] = $this->Modelku->get_data();
 		$this->load->view('template/header');
		$this->load->view('template/menu4');
		$this->load->view('admin/persewaan',$data);
		$this->load->view('template/footer');
 	}

 	public function setting()
 	{
 		$data['user'] = $this->session->userdata('user');
 		$this->load->view('template/header');
		$this->load->view('template/menu5');
		$this->load->view('admin/setting',$data);
		$this->load->view('template/footer');
 	}

 	public function do_setting()
 	{
 		$psw = $this->input->post('psw');
 		$psw2 = $this->input->post('psw2');

 		if($psw == $psw2){
 			$this->Modelku->edit_setting();
 			$this->session->set_flashdata('ubah','Berhasil diubah');
 			redirect('login/setting');
 		}else{
 			$this->session->set_flashdata('gagal','Gagal diubah');
 			redirect('login/setting');
 		}
 	}

 	public function tambah_motor()
 	{
 		$this->load->view('template/header');
		$this->load->view('template/menu2');
		$this->load->view('admin/tambah_motor');
		$this->load->view('template/footer');
 	}

 	public function do_tambah()
 	{
 		$gambar = $_FILES['foto']['name'];
 		if ($gambar == "") {
 			echo "tidak ada gambar";
 		}else{
			$config['upload_path']          = './asset/foto/';
			$config['allowed_types']        = 'img|gif|jpg|png';
		 
			$this->load->library('upload', $config);
		 
			if ( ! $this->upload->do_upload('foto')){
				echo "gagal";
			}else{
				$this->Modelku->do_tambah();
				$this->session->set_flashdata('tambah','Data berhasil ditambahkan');
				redirect('login/motor');
			}
		}
 	}

 	public function edit($id)
 	{
 		$data['motor'] = $this->Modelku->show_motor($id); 
 		$this->load->view('template/header');
		$this->load->view('template/menu2');
		$this->load->view('admin/edit_motor',$data);
		$this->load->view('template/footer');
 	}

 	public function do_edit()
 	{
 		$gambar = $_FILES['foto']['name'];
 		if ($gambar == "") {
 			$this->Modelku->do_edit1();
			$this->session->set_flashdata('tambah','Data berhasil ditambahkan');
			redirect('login/motor');
 		}else{
			$config['upload_path']          = './asset/foto/';
			$config['allowed_types']        = 'img|gif|jpg|png';
		 
			$this->load->library('upload', $config);
		 
			if ( ! $this->upload->do_upload('foto')){
				echo "gagal";
			}else{
				$this->Modelku->do_edit2();
				$this->session->set_flashdata('tambah','Data berhasil ditambahkan');
				redirect('login/motor');
			}
		}
 	}

 	public function lihatMotor($id)
 	{
 		$data['motor'] = $this->Modelku->lihat_data($id); 
 		$this->load->view('template/header');
		$this->load->view('template/menu2');
		$this->load->view('admin/lihat_motor',$data);
		$this->load->view('template/footer');
 	}

 	public function hapus_motor($id)
 	{
 		$this->Modelku->delete_motor($id);
 		$this->session->set_flashdata('tambah','Data berhasil dihapus');
 		redirect('login/motor');
 	}

 	public function tambah_pelanggan()
 	{
 		$this->load->view('template/header');
		$this->load->view('template/menu3');
		$this->load->view('admin/tambah_pelanggan');
		$this->load->view('template/footer');
 	}

 	public function do_pelanggan()
 	{
 		$gambar = $_FILES['foto']['name'];
 		if ($gambar == "") {
 			echo "tidak ada gambar";
 		}else{
			$config['upload_path']          = './asset/foto/';
			$config['allowed_types']        = 'img|gif|jpg|png';
		 
			$this->load->library('upload', $config);
		 
			if ( ! $this->upload->do_upload('foto')){
				echo "gagal";
			}else{
				$this->Modelku->tambah_pelanggan();
				$this->session->set_flashdata('tambah','Data berhasil ditambahkan');
				redirect('login/pelanggan');
			}
		}
 	}

 	public function lihat_pelanggan($id)
 	{
 		$data['pelanggan'] = $this->Modelku->lihatpelanggan($id);
 		$this->load->view('template/header');
		$this->load->view('template/menu3');
		$this->load->view('admin/lihatpelanggan',$data);
		$this->load->view('template/footer');
 	}

 	public function edit_pelanggan($id)
 	{
 		$data['pelanggan'] = $this->Modelku->lihatpelanggan($id);
 		$this->load->view('template/header');
		$this->load->view('template/menu3');
		$this->load->view('admin/edit_pelanggan',$data);
		$this->load->view('template/footer');
 	}

 	public function do_edit_pelanggan()
 	{
 		$gambar = $_FILES['foto']['name'];
 		if ($gambar == "") {
 			$this->Modelku->edit_pelanggan();
			$this->session->set_flashdata('tambah','Data berhasil diupdate');
			redirect('login/pelanggan');
 		}else{
			$config['upload_path']          = './asset/foto/';
			$config['allowed_types']        = 'img|gif|jpg|png';
		 
			$this->load->library('upload', $config);
		 
			if ( ! $this->upload->do_upload('foto')){
				echo "gagal";
			}else{
				$this->Modelku->edit_pelanggan2();
				$this->session->set_flashdata('tambah','Data berhasil diupdate');
				redirect('login/pelanggan');
			}
		}
 	}
 	public function hapus_pelanggan($id)
 	{
 		$this->Modelku->delete_pelanggan($id);
 		$this->session->set_flashdata('tambah','Data berhasil dihapus');
 		redirect('login/pelanggan');
 	}

 	public function tambah_persewaan()
 	{
 		$data['user'] = $this->session->userdata('user');
 		$data['admin'] = $this->Modelku->ambil_admin();
 		$data['motor'] = $this->Modelku->Ambil_Motor();
 		$data['pelanggan'] = $this->Modelku->ambil_pelanggan();
 		$this->load->view('template/header');
		$this->load->view('template/menu4');
		$this->load->view('admin/tambah_sewa',$data);
		$this->load->view('template/footer');
 	}

 	public function do_persewaan()
 	{
 		$this->Modelku->tambah_persewaan();
 		$this->session->set_flashdata('tambah','Data berhasil ditambahkan');
 		redirect('login/persewaan');
 	}

 	public function edit_sewa($id)
 	{
 		$data['sewa'] = $this->Modelku->get_sewa($id);
 		$data['admin'] = $this->Modelku->ambil_admin();
 		$data['motor'] = $this->Modelku->Ambil_Motor();
 		$data['pelanggan'] = $this->Modelku->ambil_pelanggan();
 		$this->load->view('template/header');
		$this->load->view('template/menu4');
		$this->load->view('admin/edit_sewa',$data);
		$this->load->view('template/footer');
 	}

 	public function do_editp()
 	{
 		$this->Modelku->do_edit_sewa();
 		$this->session->set_flashdata('tambah','Data berhasil diupdate');
 		redirect('login/persewaan');
 	}

 	public function hapus_sewa($id)
 	{
 		$this->Modelku->hapus_sewa($id);
 		$this->session->set_flashdata('tambah','Motor dikembalikan');
 		redirect('login/persewaan');
 	}

 	public function logout()
 	{
 		$this->session->unset_userdata('user');
 		redirect('login/index');
 	}
 }