<?php

namespace App\Controllers;
use Celyes\SimpleMVC\Database\Connection;

class Person
{
  protected $db;

  public function __construct($db)
  {
      $this->db = $db;
  }

  public function index()
  {
    $statement = $this->db->prepare("SELECT * FROM tag_associations");
    $statement->execute();

    $people = $statement->fetchAll();

    echo json_encode($people);
  }
}
