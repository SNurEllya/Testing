<?php

class Ahad extends CI_Controller
{
	function index()
	{
		$data = array('judul' => 'Welcome' );
		$this->load->view('tabel_v', $data);
	}
}