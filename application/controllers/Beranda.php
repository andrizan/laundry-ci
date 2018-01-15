<?php 
	class Beranda extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('modelberanda');
		}
		public function p()
		{
			$p = $this->uri->segment(3);
			$data['title'] = "Aplikasi Manajemen Laundry";
			$data['folder'] = "beranda";
			if (empty($p)) {
				$p = "beranda";
			}
			$data['p'] = $p;
			$data['kasir'] = $this->modelberanda->kasir()->num_rows();
			$data['konsumen'] = $this->modelberanda->konsumen()->num_rows();
			$data['paket'] = $this->modelberanda->paket()->num_rows();
			$data['transaksi'] = $this->modelberanda->transaksi()->num_rows();
			$this->load->view('index',$data);
		}
	}
 ?>