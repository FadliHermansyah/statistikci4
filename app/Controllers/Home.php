<?php

namespace App\Controllers;

use App\Models\DataTest;

class Home extends BaseController
{
	protected $DataTest;
	public function __construct()
	{
		$this->DataTest = new DataTest();
	}

	public function index()
	{
		$data = [
			'title' => 'Home',
			'isi' => 'v_home',
		];
		echo view('layout/v_wrapper', $data);
	}

	public function menu1()
	{
		$data = [
			'title' => 'Menu1',
			'isi' => 'v_menu1',
		];
		echo view('layout/v_wrapper', $data);
	}

	public function test()
	{
		$data = [
			'title' => 'Test Data',
			'product' => $this->DataTest->get_data(),
			'isi' => 'v_test',
		];
		echo view('layout/v_wrapper', $data);
	}

	public function luasdaratan()
	{
		$data = [
			'title' => 'Luas Daratan Kabupaten Aceh Tengah',
			'product' => $this->DataTest->get_luasdaratan(),
			'databar' => $this->DataTest->get_databar(),
			'isi' => 'kabupaten/v_luasdaratan',
		];
		echo view('layout/v_wrapper', $data);
	}

	//--------------------------------------------------------------------

}
