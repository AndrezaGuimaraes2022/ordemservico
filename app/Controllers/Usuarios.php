<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Usuarios extends BaseController
{

    private $usuarioModel;

public function _construct()
  {      
       $this->usuarioModel = new \App\Models\UsuarioModel();
}
    public function index()
    {
        $data = [
            'titulo' => 'Lista os usuários do sistema',
        ];

        return view('Usuarios/index', $data);
        }
        public function recuperaUsuarios()
        {

            // if(!$this->request->isAJAX()){
            // return redirect()->back();
           //   }

            $atributos = [
                'id',
                'nome',
                'email',
                'ativo',
                'imagem',
            ];
             
            $usuarios = $this->usuarioModel->select($atributos)
                                                 ->findAll();

        echo '<pre>';
        print_r($usuarios);
        exit;
                                        
                                        }
                                    
}