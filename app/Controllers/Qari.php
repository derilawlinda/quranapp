<?php

namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\QariModel;
 
class Qari extends ResourceController
{
    use ResponseTrait;
    public function index()
    {
        try {
            // Something throws error here
            $model = new QariModel();
            $list = $model->findAll();
            return $this->response->setJSON($list);
        } catch (\Exception $e) {
            log_message('error', '[ERROR] {exception}', ['exception' => $e]);
        }
        
    }
}
