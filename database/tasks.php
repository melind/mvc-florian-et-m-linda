<?php

  require_once $app."/database/model.php";

  class TaskModel extends Model {

    public function getAll () {

      $db = parent::connect();
      $sql = 'select * from tasks';
      $query = $db->prepare($sql);
      $query->execute();
      $tasks = $query->fetchAll();
      return $tasks;

    }
    public function createTask () {
      $name = $_POST['name'];
      $db = parent::connect();
      $addtask = 'insert into task (name) values (?), $name';
      $query = $db->prepare($addtask);
      $query->execute();
      $tasks = $this->getAll();
      return $tasks;
    }
    public function deleteTask () {
      $id = $_POST['button'];
      $db = parent::connect();
      $delTasks = 'delete from task where id = $id';
      $query = $db->prepare($delTasks);
      $query->execute();
      $tasks = $this->getAll();
      return $tasks;
  }
  }


?>
