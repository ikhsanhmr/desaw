<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
	public $data = array();

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation', 'session', 'enkripsi'));
		$this->load->model(array('admin_model'));
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('admin/information_view');
		$this->load->view('footer');
	}

	// Logout
	public function login()
	{
		$this->load->view('admin/login');
	}


	public function do_login()
	{
		//print_r($_POST); exit;
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->admin_model->search_users($username);
		$role = $cek['id_role'];
		$passwordnya = $cek['password'];
		//$passwordnya ='admin123';
		$decrypted_txt = $this->enkripsi->encrypt_decrypt('decrypt', $passwordnya);

		//echo $decrypted_txt; exit;
		if ($decrypted_txt == $password) {
			if (($role == 1)) {
				//echo "<script>alert('Anda Berhasil Login dengan Hak Akses Admin')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/index>";
			} else {
				echo "<script>alert('Gagal Login, Periksa Username dan Password Anda')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
			}
		} else {
			echo "<script>alert('Wrong Password!')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		}
	}

	// Logout
	function logout()
	{
		$data = array(
			'username' => NULL,
			'password' => NULL,
			'role' => NULL
		);
		$this->session->unset_userdata($data);
		echo "<script>alert('Anda Berhasil Keluar dari Aplikasi')</script>";
		echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
	}

	//information_view
	public function information_view()
	{
			
		$data['gallery_view'] = $this->admin_model->tampil_gallery();
		$this->data['title'] = 'Beranda :: ';
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/information_view', $data);
		$this->load->view('footer');
	}


	//Daily Activity
	public function daily_activity_view()
	{
		
		$data['daily_view'] = $this->admin_model->tampil_daily();
		$this->data['title'] = 'Beranda :: ';
		$this->load->view('header', $this->data);
		$this->load->view('sidebar');
		$this->load->view('admin/daily_activity_view',$data);
		$this->load->view('footer');
	}
	
	public function daily_activity_add()
	{
		
		$this->data['title'] = 'Beranda :: ';
		$this->load->view('header', $this->data);
		$this->load->view('sidebar');
		$this->load->view('admin/daily_activity_add');
		$this->load->view('footer');
	}
	
	public function aksi_daily_activity_add()
	{
		
		   $tgl= date('d-m-Y');
		   $name_of_activity = $this->input->post('name_of_activity');
		   $detail_of_activity = $this->input->post('detail_of_activity');
		   $date_activity = date('Y-m-d' , strtotime($tgl));
		   
		    $data = array('date_activity' => $date_activity,'name_of_activity' => $name_of_activity,
		   'detail_of_activity' => $detail_of_activity
			);
                    $insert = $this->admin_model->add_daily_activity_data($data);
                    if ($insert) {
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/daily_activity_view />";
                    }
	
		}
		
		public function daily_activity_delete() {
			
			$id_daily_activity = $this->input->get('id_daily_activity');
			
			  $delete = $this->admin_model->daily_activity_delete($id_daily_activity);
		
            if ($delete) {
            echo "<script>alert('Berhasil Menghapus Data')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/daily_activity_view />";
				
            }
		}
		
		
	public function daily_activity_edit()
	{
			$id_daily_activity = $this->input->get('id_daily_activity');
            $data['daily_activity'] = $this->admin_model->dapat_daily_activity($id_daily_activity);
            
		$this->data['title'] = 'Beranda :: ';
		$this->load->view('header', $this->data);
		$this->load->view('sidebar');
		$this->load->view('admin/daily_activity_edit',$data);
		$this->load->view('footer');
	}
	
	    public function aksi_daily_activity_edit() {
		   $id_daily_activity = $this->input->post('id_daily_activity');
		   $name_of_activity = $this->input->post('name_of_activity');
		   $detail_of_activity = $this->input->post('detail_of_activity');
		   
		    $data = array('name_of_activity' => $name_of_activity,
		   'detail_of_activity' => $detail_of_activity);
			$update = $this->admin_model->update_daily_activity($data, $id_daily_activity);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/daily_activity_view/>";
						 
					}
		}
		
//Warranty Notice
public function warranty_notice_view()
{
	
	$data['warranty_notice'] = $this->admin_model->tampil_warranty_notice();
	$this->data['title'] = 'Beranda :: ';
	$this->load->view('header', $this->data);
	$this->load->view('sidebar');
	$this->load->view('admin/warranty_notice_view',$data);
	$this->load->view('footer');
}

public function warranty_notice_add()
{
	
	$this->data['title'] = 'Beranda :: ';
	$this->load->view('header', $this->data);
	$this->load->view('sidebar');
	$this->load->view('admin/warranty_notice_add');
	$this->load->view('footer');
}

public function aksi_warranty_notice_add()
{
	//print_r ($_POST); exit;
	   $tgl= date('d-m-Y');
	   $name_of_warranty_issue = $this->input->post('name_of_warranty_issue');
	   $follow_up = $this->input->post('follow_up');
	   $status = $this->input->post('status');
	   $date_warranty_notice = date('Y-m-d' , strtotime($tgl));
	   
			// setting konfigurasi upload pdf
		$config['upload_path'] = './assets/document/';
		$config['allowed_types'] = 'pdf';
		$config['overwrite']			= true;
		$config['max_size']             = 10024; // 10MB
		
		// load library upload
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('document')) {
			$error = $this->upload->display_errors();
			// menampilkan pesan error
			print_r($error);
		} else {
			$result = $this->upload->data();
			echo "<pre>";
			//print_r($result); exit;
			echo "</pre>";
		}
		$document = $result['file_name'];
		//print_r ($document); exit;
	   
		$data = array('date_warranty_notice' => $date_warranty_notice,'name_of_warranty_issue' => $name_of_warranty_issue,
	   'follow_up' => $follow_up,'status' => $status,'document' => $document);
				$insert = $this->admin_model->add_warranty_notice_data($data);
				if ($insert) {
					echo "<script>alert('Berhasil Menambah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/warranty_notice_view />";
				}

	}
	
	public function warranty_notice_delete() {
		
		$id_warranty_notice = $this->input->get('id_warranty_notice');
		
		  $delete = $this->admin_model->warranty_notice_delete($id_warranty_notice);
	
		if ($delete) {
		echo "<script>alert('Berhasil Menghapus Data')</script>";
		echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/warranty_notice_view />";
			
		}
	}
	
	
public function warranty_notice_edit()
{
		$id_warranty_notice = $this->input->get('id_warranty_notice');
		$data['warranty_notice'] = $this->admin_model->dapat_warranty_notice($id_warranty_notice);
		
	$this->data['title'] = 'Beranda :: ';
	$this->load->view('header', $this->data);
	$this->load->view('sidebar');
	$this->load->view('admin/warranty_notice_edit',$data);
	$this->load->view('footer');
}

	public function aksi_warranty_notice_edit() {
		//print_r ($_POST); exit;
	   $id_warranty_notice = $this->input->post('id_warranty_notice');
	   $tgl= date('d-m-Y');
	   $name_of_warranty_issue = $this->input->post('name_of_warranty_issue');
	   $follow_up = $this->input->post('follow_up');
	   $document = $this->input->post('document');
	   $status = $this->input->post('status');
	   $date_warranty_notice = date('Y-m-d' , strtotime($tgl));
	   
	   
		$data = array('date_warranty_notice' => $date_warranty_notice,'name_of_warranty_issue' => $name_of_warranty_issue,
	   'follow_up' => $follow_up,'status' => $status,'document' => $document);
	   
		$update = $this->admin_model->update_warranty_notice($data, $id_warranty_notice);
				if ($update) {
				echo "<script>alert('Berhasil Mengubah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/warranty_notice_view/>";
					 
				}
	}



	//Gallery
	function gallery_view()
	{
		
		$data['gallery'] = $this->admin_model->tampil_gallery();
		$this->data['title'] = 'Beranda :: ';
		$this->load->view('header', $this->data);
		$this->load->view('sidebar');
		$this->load->view('admin/gallery_view',$data);
		$this->load->view('footer');
	}

	
	public function gallery_add()
	{
		$this->data['title'] = 'Beranda :: ';
		$this->load->view('header', $this->data);
		$this->load->view('sidebar');
		$this->load->view('admin/gallery_add');
		$this->load->view('footer');
	}
	
	
	public function aksi_gallery_add()
	{
		//print_r($_GET);  
		//print_r($_POST);  
		//exit;
		   $judul_foto = $this->input->post('judul_foto');
		   $tanggal_foto = date('Y-m-d' , strtotime($this->input->post('tanggal_foto')));
		   
		   
				// setting konfigurasi upload pdf
			$config['upload_path'] = './assets/images/gallery';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['overwrite']			= true;
			//$config['max_size']             = 10024; // 10MB
			
			// load library upload
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('file_foto')) {
				$error = $this->upload->display_errors();
				// menampilkan pesan error
				print_r($error);
			} else {
				$result = $this->upload->data();
				echo "<pre>";
				//print_r($result); exit;
				echo "</pre>";
			}
			$file_foto = $result['file_name'];
			
		   
		    $data = array('tanggal_foto' => $tanggal_foto,'judul_foto' => $judul_foto,'file_foto' => $file_foto,
			);
                    $insert = $this->admin_model->add_gallery_data($data);
                    if ($insert) {
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/gallery_view />";
                    }
	
		}

		public function gallery_delete() {
            $id_gallery = $this->input->get('id_gallery');
			
            $delete = $this->admin_model->gallery_delete($id_gallery);
            if ($delete) {
            echo "<script>alert('Berhasil Menghapus Gambar')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/gallery_view>";
				
           	 }
			}
			
			
	public function gallery_edit() {
 
   $id_gallery = $this->input->get('id_gallery');
		
			$data['gallery'] = $this->admin_model->dapat_gallery($id_gallery);
			$this->data['title'] = 'Ubah data gallery :: ';
			$this->load->view('header', $this->data);
			$this->load->view('sidebar',$data);
			$this->load->view('admin/gallery_edit',$data);
			$this->load->view('footer');
		 
	}

	
	public function aksi_gallery_edit() {
 
		//print_r($_GET);  
		//print_r($_POST);  
		//exit;
			$id_gallery = $this->input->post('id_gallery');
			$tanggal_foto = date('Y-m-d' , strtotime($_POST['tanggal_foto']));
		   
		   $data = array('id_gallery' => $id_gallery,'tanggal_foto' => $tanggal_foto,);
			$update = $this->admin_model->update_gallery($data, $id_gallery);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/gallery_view>";
						 
					} 
        
			  
		 }
	
}
