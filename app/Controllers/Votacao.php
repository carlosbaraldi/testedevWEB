<?php

namespace App\Controllers;

use App\Models\UsuariosModel;
use App\Models\EnquetesModel;
use App\Models\RespostasModel;

class Votacao extends BaseController
{

	private $usuariosModel;
	private $enquetesModel;
	private $respostasModel;


	public function __construct()
	{

		$this->usuariosModel = new UsuariosModel();
		$this->enquetesModel = new EnquetesModel();
		$this->respostasModel = new RespostasModel();
	}

	

	public function enquete($idEnquete)
	{

		$enquete = $this->enquetesModel->find($idEnquete);

		$respostas = $this->enquetesModel->enquetesJoinRespostas(intval($enquete['idEnquete']));


		$data = [

			'enquete' => $enquete,
			'respostas' => $respostas

		];

		return view('votacao', $data);
	}


	public function save()
	{
		$idResposta = intval($this->request->getPost('idResposta'));

		$qtdVotos = $this->respostasModel->find($idResposta);

		//dd($qtdVotos);

		$idEnquete = intval($qtdVotos['enquete_id']);

		//dd($idEnquete);

		$qtdVotos = intval($qtdVotos['qtdVotos']);

		$qtdVotos = $qtdVotos + 1;

		//dd($qtdVotos, $idResposta);

		$data = [
			
			'qtdVotos' => $qtdVotos
		];

		$this->respostasModel->update($idResposta, $data);

		return redirect()->to('/votacao/resultado/' . $idEnquete);



	}


	public function resultado($idEnquete)
	{

		$enquete = $this->enquetesModel->find($idEnquete);

		$respostas = $this->enquetesModel->enquetesJoinRespostas(intval($enquete['idEnquete']));

		$respostasBanco = $this->enquetesModel->enquetesJoinRespostas($idEnquete);

		$contRespBanco = count($respostasBanco);

		$qtdVotos = 0;

		for ($i = 0; $i < $contRespBanco; $i++) {

			$qtdVotos = $qtdVotos + intval($respostasBanco[$i]['qtdVotos']);
		}

		$data = [

			'enquete' => $enquete,
			'respostas' => $respostas,
			'qtdVotos' => $qtdVotos

		];

		return view('resultado', $data);
	}
}
