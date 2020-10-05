<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'CIPUPI',
			'loged_in' => $this->session->loged_in,
			'user_info' => $this->session->user_info,
		];

		return view('home/home', $data);
	}

	public function sedangDibuat()
	{
		return view('errors/html/being_builded.php');
	}

	//--------------------------------------------------------------------

}
