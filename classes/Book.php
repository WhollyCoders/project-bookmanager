<?php
class Book{
  public $connection;
  public $ID;
  public $title; // *** REQUIRED ***
  public $author_ID;
  public $author;
  public $isbn_10;
  public $isbn_13;
  public $image_ID;
  public $book_author;
  public $book_image;

  public function __construct($connection){
    $this->connection = $connection;
    $this->create_books_table();
    $this->book_author = new BookAuthor($this->connection);
    $this->book_image = new BookImage($this->connection);
    $this->welcome_message();
  }

  public function get_book_author_name($author_ID){
    return $this->book_author->get_book_author_by_id($author_ID);
  }

  public function create_books_table(){
    $sql = "CREATE TABLE IF NOT EXISTS `whollycoders`.`books` (
       `book_ID` INT NOT NULL AUTO_INCREMENT ,
       `book_author_ID` INT NOT NULL ,
       `book_image_ID` INT NULL ,
       `book_title` VARCHAR(255) NOT NULL ,
       `book_description` TEXT NULL ,
       `book_isbn_10` VARCHAR(20) NULL ,
       `book_isbn_13` VARCHAR(20) NULL ,
       `book_date_entered` DATETIME NOT NULL ,
       PRIMARY KEY (`book_ID`)
     ) ENGINE = InnoDB;";
    $result = mysqli_query($this->connection, $sql);
    if(!$result){echo('*** ERROR Creating BOOKS Table ***<br>');}
  }

  public function welcome_message(){
    echo('BOOK Class Instantiated...<br>');
  }
}

 ?>
