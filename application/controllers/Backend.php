<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('mDatabase');
		if ($this->session->userdata('logged_in') == TRUE) {
			$username = $this->session->userdata('username');
		} else {
			redirect("login");
		}
	}
	public function index()
	{
		header("Access-Control-Allow-Origin: *");
        $data = array();
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vBeranda', $data);
	}
	public function Umum()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Informasi Umum Website";
		$config = $this->mDatabase->get('config')->row();
		$data['web_name'] = $config->web_name;
		$data['web_desc'] = $config->web_desc;
		$data['web_icon'] = $config->web_icon;
		$data['kontak_alamat'] = $config->kontak_alamat;
		$data['kontak_telp'] = $config->kontak_telp;
		$data['kontak_email'] = $config->kontak_email;
		$data['kontak_map_latitude'] = $config->kontak_map_latitude;
		$data['kontak_map_langitude'] = $config->kontak_map_langitude;
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vUmum', $data);
	}
	public function Proker()
	{
		header("Access-Control-Allow-Origin: *");
        $data['proker'] = $this->mDatabase->get('proker');
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vData_Proker', $data);
	}
	public function Tambah_Proker()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Tambah Program Kerja";
		$data['id'] = "";
		$data['icon'] = "";
		$data['judul'] = "";
		$data['deskripsi'] = "";
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vForm_Proker', $data);
	}
	public function Edit_Proker($id)
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Edit Program Kerja";
		$proker = $this->mDatabase->get_where('proker',array('id'=>$id))->row();
		$data['id'] = $proker->id;
		$data['icon'] = $proker->icon;
		$data['judul'] = $proker->judul;
		$data['deskripsi'] = $proker->deskripsi;
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vForm_Proker', $data);
	}
	public function Produk()
	{
		header("Access-Control-Allow-Origin: *");
        $data['produk'] = $this->mDatabase->get_where('media',array('tag'=>1));
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vData_Produk', $data);
	}
	public function Tambah_Produk()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Tambah Produk";
		$data['id'] = "";
		$data['src'] = "";
		$data['judul'] = "";
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vForm_Produk', $data);
	}
	public function Edit_Produk($id)
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Edit Produk";
		$produk = $this->mDatabase->get_where('media',array('id'=>$id))->row();
		$data['id'] = $produk->id;
		$data['src'] = $produk->src;
		$data['judul'] = $produk->judul;
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vForm_Produk', $data);
	}
	public function Pelaksana()
	{
		header("Access-Control-Allow-Origin: *");
        $data['team'] = $this->mDatabase->get('team');
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vData_Pelaksana', $data);
	}
	public function Tambah_Pelaksana()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Tambah Pelaksana";
		$data['id'] = "";
		$data['name'] = "";
		$data['nipm'] = "";
		$data['position'] = "";
		$data['profile'] = "";
		$data['image'] = "";
		$data['desa'] = "";
		$data['desas'] = $this->mDatabase->get('desa');
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vForm_Pelaksana', $data);
	}
	public function Edit_Pelaksana($id)
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Edit Pelaksana";
		$team = $this->mDatabase->get_where('team',array('id'=>$id))->row();
		$data['id'] = $team->id;
		$data['name'] = $team->name;
		$data['nipm'] = $team->nipm;
		$data['position'] = $team->position;
		$data['profile'] = $team->profile;
		$data['image'] = $team->image;
		$data['desa'] = $team->desa;
		$data['desas'] = $this->mDatabase->get('desa');
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vForm_Pelaksana', $data);
	}
	public function Desa()
	{
		header("Access-Control-Allow-Origin: *");
        $data['desa'] = $this->mDatabase->get('desa');
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vData_Desa', $data);
	}
	public function Tambah_Desa()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Tambah Desa";
		$data['id'] = "";
		$data['nama'] = "";
		$data['gambar'] = "";
		$data['deskripsi'] = "";
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vForm_Desa', $data);
	}
	public function Edit_Desa($id)
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Edit Desa";
		$desa = $this->mDatabase->get_where('desa',array('id'=>$id))->row();
		$data['id'] = $desa->id;
		$data['nama'] = $desa->nama;
		$data['gambar'] = $desa->gambar;
		$data['deskripsi'] = $desa->deskripsi;
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vForm_Desa', $data);
	}
	public function Gambar()
	{
		header("Access-Control-Allow-Origin: *");
        $data['gambar'] = $this->db->query('SELECT media.*, tags.judul as judul_tag FROM media JOIN tags ON media.tag=tags.id WHERE media.type="image"');
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vData_Gambar', $data);
	}
	public function Tambah_Gambar()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Tambah Foto";
		$data['id'] = "";
		$data['judul'] = "";
		$data['id_tag'] = "";
		$data['tag'] = "";
		$data['src'] = "";
		$data['tags'] = $this->mDatabase->get('tags');
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vForm_Gambar', $data);
	}
	public function Edit_Gambar($id)
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Edit Foto";
		$gambar = $this->db->query('SELECT media.*, tags.id as id_tag, tags.judul as judul_tag FROM media JOIN tags ON media.tag= tags.id WHERE media.id='.$id)->row();
		$data['id'] = $gambar->id;
		$data['judul'] = $gambar->judul;
		$data['id_tag'] = $gambar->id_tag;
		$data['tag'] = $gambar->judul_tag;
		$data['src'] = $gambar->src;
		$data['tags'] = $this->mDatabase->get('tags');
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vForm_Gambar', $data);
	}
	public function Video()
	{
		header("Access-Control-Allow-Origin: *");
        $data['video'] = $this->db->query('SELECT media.*, tags.judul as judul_tag FROM media JOIN tags ON media.tag= tags.id WHERE media.type="video"');
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vData_Video', $data);
	}
	public function Tambah_Video()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Tambah Video";
		$data['id'] = "";
		$data['judul'] = "";
		$data['id_tag'] = "";
		$data['tag'] = "";
		$data['src'] = "";
		$data['tags'] = $this->mDatabase->get('tags');
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vForm_Video', $data);
	}
	public function Edit_Video($id)
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Edit Video";
		$video = $this->db->query('SELECT media.*, tags.id as id_tag, tags.judul as judul_tag FROM media JOIN tags ON media.tag= tags.id WHERE media.id='.$id);
		$data['id'] = $video->id;
		$data['judul'] = $video->judul;
		$data['id_tag'] = $video->id_tag;
		$data['tag'] = $video->judul_tag;
		$data['src'] = $video->src;
		$data['tags'] = $this->mDatabase->get('tags');
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vForm_Video', $data);
	}
	public function Artikel()
	{
		header("Access-Control-Allow-Origin: *");
        $data['artikel'] = $this->db->query('SELECT artikel.*, tags.judul as judul_tag, users.fullname FROM artikel JOIN tags ON artikel.tag= tags.id JOIN users ON users.username=artikel.penulis');
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vData_Artikel', $data);
	}
	public function Tambah_Artikel()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Tambah Artikel";
		$data['id'] = "";
		$data['judul'] = "";
		$data['id_tag'] = "";
		$data['tag'] = "";
		$data['gambar'] = "";
		$data['isi'] = "";
		$data['tags'] = $this->mDatabase->get('tags');
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vForm_Artikel', $data);
	}
	public function Edit_Artikel($id)
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Edit Artikel";
		$artikel = $this->db->query('SELECT artikel.*, tags.id as id_tag, tags.judul as judul_tag FROM artikel JOIN tags ON artikel.tag=tags.id')->row();
		$data['id'] = $artikel->id;
		$data['judul'] = $artikel->judul;
		$data['id_tag'] = $artikel->id_tag;
		$data['tag'] = $artikel->judul_tag;
		$data['gambar'] = $artikel->gambar;
		$data['isi'] = $artikel->isi;
		$data['tags'] = $this->mDatabase->get('tags');
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vForm_Artikel', $data);
	}
	public function Pesan()
	{
		header("Access-Control-Allow-Origin: *");
		$data['pesan'] = $this->mDatabase->get('pesan');
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vData_Pesan', $data);

	}
	public function Manajemen_User()
	{
		header("Access-Control-Allow-Origin: *");
        $data['user'] = $this->mDatabase->get('users');
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vData_User', $data);
	}
	public function Tambah_User()
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Tambah User";
		$data['username'] = "";
		$data['fullname'] = "";
		$data['password'] = "";
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vForm_User', $data);
	}
	public function Edit_User($username)
	{
		header("Access-Control-Allow-Origin: *");
		$data['title'] = "Edit User";
		$user = $this->mDatabase->get_where('users',array('username'=>$username))->row();
		$data['username'] = $user->username;
		$data['fullname'] = $user->fullname;
		$data['password'] = $user->password;
        $this->template->load('backend/vTemplate', 'contents' , 'backend/vForm_User', $data);
	}

}
