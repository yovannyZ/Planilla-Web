<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'/libraries/REST_Controller.php');
 
Class Region extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('region_model');
    }


    public function index_get()
    {
        $data = $this->region_model->getAll();

        if($data)
        {
            $this->response($data, 200);
        }
        else
        {
            $this->response(NULL, 400);
        }   
    }

    public function find_get($id)
    {
        
        $data = $this->region_model->get($id);
        
        if($data)
        {
            $this->response($data, 200);
        }
        else
        {
            $this->response(NULL, 400);
        }   
    }

   
}

?>