<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Lomba_model', 'lmb');
    }
    public function index_get()
    {
        $data = $this->db->get('lombation')->result();
        $this->response($data, RestController::HTTP_OK);
    }
}
