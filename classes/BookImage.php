<?php
class BookImage{
  public $connection;
  public $ID;

  public function __construct($connection){
    $this->connection = $connection;
    $this->welcome_message();
  }

  public function welcome_message(){
    echo('Book IMAGE Class Instantiated...<br>');
  }
}

 ?>
