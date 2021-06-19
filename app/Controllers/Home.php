<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'cs.uph.edu | Home'
		];
		echo view('Home', $data);
	}

	//--------------------------------------------------------------------

}
