<?php

namespace App\Controllers;

use App\Models\UsuariosModel;

class Entrar extends BaseController
{

	public function index()
	{
	
		return view('entrar');

	}


	public function signIn()
	{
	
		$userName = $this->request->getPost('inputUserName');
		$password = $this->request->getPost('inputPassword');

		$usuarioModel = new UsuariosModel();

		$dadosUsuario = $usuarioModel->getByEmail($userName);

		if (count($dadosUsuario) > 0) {
			$hashUsuario = $dadosUsuario['senha'];
			if (password_verify($password, $hashUsuario)) {
				session()->set('isLoggedIn', true);
				session()->set('nome', $dadosUsuario['nome']);
				session()->set('idUsuario', $dadosUsuario['idUsuario']);
				return redirect()->to(base_url());
			} else {
				session()->setFlashData('msg', 'Usuário ou Senha incorretos');
				return redirect()->to('/entrar');
			}
		} else {
			session()->setFlashData('msg', 'Usuário ou Senha incorretos');
			return redirect()->to('/entrar');
		}
	}

	
	public function signOut()
	{
		session()->destroy();
		
		return redirect()->to(base_url());
	}

	

	//--------------------------------------------------------------------

}
