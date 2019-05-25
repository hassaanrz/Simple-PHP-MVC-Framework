<?php
class Pages extends Controller {
  public function __construct() {
    $this->postModel = $this->model('Page');
  }

  public function index() {
    $pages = $this->postModel->getPages();
    $data = [
      'title' => 'Welcome',
      'pages' => $pages
    ];

    $this->view('pages/index', $data);
  }

  public function about() {
    $data = [
      'title' => 'About Us'
    ];

    $this->view('pages/about', $data);
  }
}
?>