<?php 

class Home extends CI_Controller 
{


	function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->database();
        $this->load->helper('form');
        $this->load->helper('url');
    } 

	public function v_index()
	{	

		$data['judul'] = 'E-Perpus';
		$this->load->view('v_index', $data);
	}

    public function v_admin()
    {
        $data['judul'] = 'Admin Dashboard';
        $this->load->view('v_admin', $data);
    }


	public function v_login()
	{
		$data['judul'] = 'Login';
        $this->load->view('v_login', $data);

	}

    public function v_register()
    {

        $data = array(

            'nama_depan'    => $this->input->post("nama_depan"),
            'nama_belakang' => $this->input->post("nama_belakang"),
            'email'         => $this->input->post("email"),
            'phone'         => $this->input->post("phone")
        );

        $this->M_admin->v_register($data);

        redirect('home/v_index');
    }

    public function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($this->M_admin->login($username, $password) == TRUE)
        {
            redirect('home/v_admin');
        }else{
            redirect('home/v_login');
        }
    }

    public function v_buku()
    {

        $data = array(
            
            'title'  => 'Daftar Buku',
            'v_buku' => $this->M_admin->v_buku(),
        );

        $data['judul'] = 'Daftar Buku';
        $this->load->view('v_buku', $data);
    }

    public function v_anggota()
    {

        $data = array(
            
            'title'  => 'Daftar Anggota',
            'v_anggota' => $this->M_admin->v_anggota(),
        );

        $data['judul'] = 'Daftar Anggota';
        $this->load->view('v_anggota', $data);
    }

    public function v_pinjam()
    {

        $data = array(
            
            'title'  => 'Daftar Pinjam',
            'v_pinjam' => $this->M_admin->v_pinjam(),
        );

        $data['judul'] = 'Daftar Pinjam';
        $this->load->view('v_pinjam', $data);
    }

   
    public function v_tambah()
    {
     $data['judul'] = 'Tambah';
     $this->load->view('v_tambah', $data);
    }

    public function hapus($id)
    {
        $this->M_admin->hapusDataBuku($id);
        redirect('home');
    }
}