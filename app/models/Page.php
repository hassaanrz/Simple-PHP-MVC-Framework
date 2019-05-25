<?php 
  class Page {
    private $db;

    public function __construct() {
      $this->db = new Database();
    }

    public function getPages() {
      $this->db->query("SELECT * from users");
      return $this->db->resultSet();
    }
  }
?>