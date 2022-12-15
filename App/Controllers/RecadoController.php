<?php

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use App\Repositories\RecadoRepository;

class RecadoController {

    //adicione a variável de repository nesta linha

    public function __construct()
    {
        //adicione o algoritmo para criar um "objeto da classe RecadoRepository"
    }

    public function getAll(Request $request, Response $response, array $args){
        
        $recados = ?->*();
        return $response->withJson($recados)->withStatus(200);
    }

    public function getById(Request $request, Response $response, array $args){
        
        ???

        $recado = $this->repository->getById($id);
        return $response->withJson($recado)->withStatus(200);
    }

    public function getByDate(Request $request, Response $response, array $args){

        ???
        
        $recados = $this->repository->getByDate($inicio);
        return $response->withJson($recados)->withStatus(200);
    }

    public function create(Request $request, Response $response, array $args){

        //Obter campo por campo
        //$data = $request->getParam('nome_do_campo');

        //Obter todos os campos do formulario
        //$data = $request->getParams();
        
        //obter todos os dados de envio
        $data = $request->getParsedBody();

        $data['id'] = $this->repository->create($data['texto']);

        return $response->withJson(["id" => $data]);

    }

    public function update(Request $request, Response $response, array $args){
        $data = $request->getParsedBody();

        $insertedId = $this->repository->create($data['id'], $data['texto']);

        $response->write($insertedId);
        
        return $response;
    }

    public function delete(Request $request, Response $response, array $args){
        $response->write("chamou o delete");
        return $response;
    }

}