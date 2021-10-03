<?php

namespace App\Controllers;

use App\Models\EnquetesModel;
use App\Models\UsuariosModel;

class Home extends BaseController
{

	private $enquetesModel;
	private $usuariosModel;

	public function __construct()
	{

		$this->enquetesModel = new EnquetesModel();
		$this->usuariosModel = new UsuariosModel();
	}


	public function index()
	{

		$idUsuario = intval(session()->idUsuario);

		$enquetes = $this->usuariosModel->usuariosJoinEnquetes($idUsuario);

		$data = [
			'enquetes' => $enquetes
		];

		echo view('admin/index', $data);
	}
}
