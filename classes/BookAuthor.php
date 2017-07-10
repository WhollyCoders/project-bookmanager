<?php
class BookAuthor{
  public $connection;
  public $ID;
  public $firstname; // *** REQUIRED ***
  public $lastname; // *** REQUIRED ***

  public function __construct($connection){
    $this->connection = $connection;
    $this->create_book_authors_table();
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

  public function create_book_authors_table(){
    $sql = "CREATE TABLE IF NOT EXISTS `whollycoders`.`book_authors` (
       `book_author_ID` INT NOT NULL AUTO_INCREMENT ,
       `book_firstname` VARCHAR(50) NOT NULL ,
       `book_lastname` VARCHAR(50) NOT NULL ,
       `book_date_entered` DATETIME NOT NULL ,
       PRIMARY KEY (`book_author_ID`)
     ) ENGINE = InnoDB;";
    $result = mysqli_query($this->connection, $sql);
    if(!$result){echo('*** ERROR Creating BOOKS Table ***<br>');}
  }

  public function welcome_message(){
    echo('Book AUTHOR Class Instantiated...<br>');
  }

}

 ?>
