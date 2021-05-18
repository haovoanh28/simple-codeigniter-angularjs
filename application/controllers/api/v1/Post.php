<?php

require APPPATH.'libraries/REST_Controller.php';

class Post extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
   
    public function index_get()
    {
        $this->load->model('Post_model');
        $data = $this->Post_model->get_all_posts();

        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function index_post() {
        $data = 'POST request';
        $this->response(['POST REQUEST'], REST_Controller::HTTP_OK);

    }
}
