<?php

class Model {

  private $user = 'root';
  private $password = 'simplonco';
  private $dbname = 'todolist';
  private $host = 'localhost';
  private $port = 3306;

  public function connect () {
    try {
      $db = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->user, $this->password);
      $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      return $db;
    }
    catch (PDOException $e) {
      $error = $e->getCode().' '.$e->getMessage();
      include $appRoot.'/views/404.php';
      die();
    }
  }

}

?>
