<?php

namespace App\Controllers;

use App\Models\EnquetesModel;
use App\Models\RespostasModel;
use App\Models\UsuariosModel;

class Enquete extends BaseController
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



	public function create()
	{

		return view('admin/enquetes/criar-enquete');
	}


	public function saveRespostaEnquete()
	{

		$respostas = $this->request->getPost('resposta');


		$cont = count($this->request->getPost('resposta'));


		for ($i = 0; $i < $cont; $i++) {

			$resposta = $respostas[$i];



			if ($this->respostasModel->save([

				'enquete_id' => intval($this->enquetesModel->ultimoID()),
				'resposta' => $resposta,
				'qtdVotos' => 0

			]));
		}
	}


	public function save()
	{

		if ($this->enquetesModel->save([

			'idUsuario' => intval(session()->idUsuario),
			'tituloEnquete' => $this->request->getPost('tituloEnquete'),
			'perguntaEnquete' => $this->request->getPost('perguntaEnquete')

		])) {

			$this->saveRespostaEnquete();

			return redirect()->to('/home/index');
		};
	}



	public function edit($id)
	{

		$enquete = $this->enquetesModel->find($id);

		$respostas = $this->enquetesModel->enquetesJoinRespostas(intval($enquete['idEnquete']));


		$data = [

			'enquete' => $enquete,
			'respostas' => $respostas

		];

		return view('admin/enquetes/editar-enquete', $data);
	}



	public function updateRespostaEnquete()
	{

		$respostasBanco = $this->enquetesModel->enquetesJoinRespostas(intval($this->request->getPost('idEnquete')));

		$idResposta = $respostasBanco[0]['idResposta'];

		$respostas = $this->request->getPost('resposta');

		$cont = count($respostas);

		$cont2 = 0;

		$contRespBanco = count($respostasBanco);

		$idEnquete = intval($this->request->getPost('idEnquete'));


		for ($i = 0; $i < $cont; $i++) {

			$resposta = $respostas[$i];

			$cont2 = $cont2 + 1;

			if ($cont2 <= $contRespBanco) {

				$idResposta = intval($respostasBanco[$i]['idResposta']);

				$data = [
					'enquete_id' => $idEnquete,
					'resposta' => $resposta
				];

				$this->respostasModel->update($idResposta, $data);
			} else {

				$this->respostasModel->save([

					'enquete_id' => $idEnquete,
					'resposta' => $resposta
				]);
			}
		}
	}


	public function update()
	{

		$data = [
			'idUsuario' => intval(session()->idUsuario),
			'tituloEnquete' => $this->request->getPost('tituloEnquete'),
			'perguntaEnquete' => $this->request->getPost('perguntaEnquete')
		];

		$this->enquetesModel->update($this->request->getPost('idEnquete'), $data);

		$this->updateRespostaEnquete();


		return redirect()->to('/home/index');
	}



	public function delete($idEnquete)
	{
		$respostasBanco = $this->enquetesModel->enquetesJoinRespostas($idEnquete);

		//$idResposta = $respostasBanco[0]['idResposta'];

		$contRespBanco = count($respostasBanco);


		for ($i = 0; $i < $contRespBanco; $i++) {

			$idResposta = intval($respostasBanco[$i]['idResposta']);

			//dd($respostasBanco);

			$this->respostasModel->where('idResposta', $idResposta)->delete($idResposta);
			
		}


		$this->enquetesModel->where('idEnquete', $idEnquete)->delete($idEnquete);

		return redirect()->to('/home/index');
	}


	public function deleteResposta($idResposta, $idEnquete)
	{

		$this->respostasModel->where('idResposta', $idResposta)->delete($idResposta);

		return redirect()->to('/enquete/edit/' . $idEnquete);
	}



	public function visualizar($idEnquete)
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

		return view('admin/enquetes/visualizar-enquete', $data);
	}


}
