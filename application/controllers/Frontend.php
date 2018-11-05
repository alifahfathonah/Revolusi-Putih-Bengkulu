<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('mDatabase');
	}
	public function index()
	{
		header("Access-Control-Allow-Origin: *");
        $data['slider'] = $this->mDatabase->get('slider');
        $data['config'] = $this->mDatabase->get('config')->row();
        $data['proker'] = $this->mDatabase->get('proker');
        $data['produk'] = $this->mDatabase->get_where('media',array('tag'=>1));
        $data['gambar'] = $this->mDatabase->get_where('media',array('type'=>'image'));
        $data['video'] = $this->mDatabase->get_where('media',array('type'=>'video'));
        $data['artikel'] = $this->mDatabase->get('artikel');
        $data['team'] = $this->mDatabase->get_where('team',array('desa'=>""));
        $data['desa'] = $this->mDatabase->get('desa');
        $this->load->view('frontend/home',$data);
	}
	public function artikel($id=null)
	{
		header("Access-Control-Allow-Origin: *");
		if($id==null){
			$data['artikel'] = $this->db->query('SELECT artikel.*, tags.judul as judul_tag, users.fullname FROM artikel JOIN tags ON artikel.tag= tags.id JOIN users ON users.username=artikel.penulis WHERE artikel.status="publish"');
		}else{
			$data['artikel'] = $this->db->query('SELECT artikel.*, tags.judul as judul_tag, users.fullname FROM artikel JOIN tags ON artikel.tag= tags.id AND artikel.tag="'.$id.'" JOIN users ON users.username=artikel.penulis WHERE artikel.status="publish"');
		}
        $data['populer'] = $this->db->query('SELECT * FROM artikel ORDER BY likes DESC LIMIT 5');
        $data['tags'] = $this->mDatabase->get('tags');
        $this->load->view('frontend/artikel',$data);
	}
	public function baca($id)
	{
		header("Access-Control-Allow-Origin: *");
        $data['artikel'] = $this->db->query('SELECT artikel.*, tags.judul as judul_tag, users.fullname FROM artikel JOIN tags ON artikel.tag= tags.id JOIN users ON users.username=artikel.penulis')->row();
        $data['populer'] = $this->db->query('SELECT * FROM artikel ORDER BY likes DESC LIMIT 5');
        $data['tags'] = $this->mDatabase->get('tags');
        $this->load->view('frontend/baca',$data);
	}
	public function galeri()
	{
		header("Access-Control-Allow-Origin: *");
        $data['gambar'] = $this->mDatabase->get_where('media',array('type'=>'image'));
        $data['video'] = $this->mDatabase->get_where('media',array('type'=>'video'));
        $this->load->view('frontend/galeri',$data);
	}
        public function desa($id)
        {
                header("Access-Control-Allow-Origin: *");
        $data['desa'] = $this->mDatabase->get_where('desa',array('id'=>$id))->row();
        $data['team'] = $this->mDatabase->get_where('team',array('desa'=>$id));
        $this->load->view('frontend/desa',$data);
        }
	public function kontak()
	{
		header("Access-Control-Allow-Origin: *");
        $config = $this->mDatabase->get('config')->row();
        $data['icon'] = $config->web_icon;
        $data['alamat'] = $config->kontak_alamat;
        $data['telp'] = $config->kontak_telp;
        $data['email'] = $config->kontak_email;
        $data['map_lat'] = $config->kontak_map_latitude;
        $data['map_lang'] = $config->kontak_map_langitude;
        $this->load->view('frontend/kontak',$data);
	}

}
