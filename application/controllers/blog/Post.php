<?php

class Post extends \CI_Controller {
   public function index() {
      $this->load->view('partials/header');
      $this->load->view('blog/post');
      $this->load->view('partials/footer');
   }
}