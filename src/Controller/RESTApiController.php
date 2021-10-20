<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

use App\Model\Table\MarcasTable;
use App\Model\Table\VeiculosTable;

/**
 * Static content controller
 *
 * This controller will render views from templates/Pages/
 *
 * @link https://book.cakephp.org/4/en/controllers/pages-controller.html
 */
class RESTApiController extends AppController
{
   
    public function listarMarcas(string ...$path): ?Response
    {
        try {
            $Marcas = new MarcasTable();
            
            return $this->response->withType("application/json")->withStringBody(json_encode($Marcas->find('all')->all()->toArray()));
            
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

    public function buscarVeiculos(string ...$path): ?Response
    {
        try {
            
            $articles = TableRegistry::getTableLocator()->get('Veiculos');

            $conditions = [
                'Veiculos.nome LIKE' => '%'.$this->request->getQuery('inputNome').'%'
            ];

            if($this->request->getQuery('inputMarca')>0){
                array_push($conditions, ['Veiculos.marca_id'=>$this->request->getQuery('inputMarca')]);
            }

            $query = $articles->find('all', ['conditions' =>$conditions])->toArray();

            return $this->response->withType("application/json")->withStringBody(json_encode([$query]));
            
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

    public function criarVeiculo(string ...$path): ?Response
    {
        try{

            $response = ["sucesso"=>0, "mensagem"=>"", "dados"=>[]];

            $validator = new Validator();
            $validator
            ->requirePresence(['inputMarca', 'inputNome', 'inputAno']);

            $errors = $validator->validate($this->request->getData());

            if (empty($errors)) {
                $response['dados'] = $errors;
            }

            $veiculosTable = TableRegistry::getTableLocator()->get('Veiculos');
            $veiculo = $veiculosTable->newEmptyEntity();

            $veiculo->nome = $this->request->getData('inputNome');
            $veiculo->marca_id = $this->request->getData('inputMarca');
            $veiculo->ano = $this->request->getData('inputAno');
            
            $veiculosTable->save($veiculo);

            if($veiculo->id){
                $response['sucesso'] = 1;
                $response['dados']['veiculo_id'] = $veiculo->id;
            }
            

            return $this->response->withType("application/json")->withStringBody(json_encode($response));
            

        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

}
