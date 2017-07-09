<?php
class BookAuthor{
  public $connection;
  public $ID;
  public $firstname; // *** REQUIRED ***
  public $lastname; // *** REQUIRED ***

  public function __construct($connection){
    $this->connection = $connection;
    $this->welcome_message();
  }

  public function get_book_author_by_id($id){
    $this->ID = $id;
    $sql = "SELECT * FROM `book_authors`
    WHERE book_author_ID='$this->ID';";
    $result = mysqli_query($this->connection, $sql);
    if($result){
      $row = mysqli_fetch_array($result);
      return $row['book_author_firstname'].' '.$row['book_author_lastname'];
    }
  }

  public function welcome_message(){
    echo('Book AUTHOR Class Instantiated...<br>');
  }

}

 ?>
