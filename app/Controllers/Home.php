<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'CIPUPI',
			'loged_in' => $this->session->loged_in
		];
		return view('home/home', $data);
	}

	//--------------------------------------------------------------------

}
