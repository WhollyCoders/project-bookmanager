<?php
class Book{
  public $connection;
  public $id;
  public $title; // *** REQUIRED ***
  public $author_id;
  public $description;
  public $keywords;
  public $isbn_10;
  public $isbn_13;
// *** OBJECTS ***
  public $book_author;

  public function __construct($connection){
    $this->connection = $connection;
    $this->create_books_table();
    $this->book_author = new BookAuthor($this->connection);
    $this->welcome_message();
  }

  public function get_book_title($id){
    $this->id = $id;
    $sql = "SELECT book_title FROM `books` WHERE book_ID='$this->id' LIMIT 1;";
    $result = mysqli_query($this->connection, $sql);
    if($result){
      $row = mysqli_fetch_assoc($result);
      return $row['book_title'];
    }else{echo('*** Error Getting Book Title ***<br>');}
  }

  public function get_author_name($author_id){
    return $this->book_author->get_book_author_by_id($author_id);
  }

  public function add_author($data){
    $this->book_author->add_book_author($data);
  }

  public function add_book($data){
    $this->set_book_params($data);
    $this->insert_book();
  }

  public function set_book_params($data){
    $this->author_id    = $data['author_id'];
    $this->image_ID     = $data['image_id'];
    $this->title        = $data['title'];
    $this->description  = $data['description'];
    $this->isbn_10      = $data['isbn_10'];
    $this->isbn_13      = $data['isbn_13'];
  }

  public function insert_book(){
    $sql = "INSERT INTO `books` (
      `book_ID`,
      `book_author_ID`,
      `book_image_ID`,
      `book_title`,
      `book_description`,
      `book_isbn_10`,
      `book_isbn_13`,
      `book_date_entered`
    ) VALUES (
      NULL,
      '$this->author_id',
      '$this->image_id',
      '$this->title',
      '$this->description',
      '$this->isbn_10',
      '$this->isbn_13',
      CURRENT_TIMESTAMP
    );";
    $result = mysqli_query($this->connection, $sql);
    if(!$result){echo('*** Error INSERTING Book ***<br>');}
  }

  public function create_books_table(){
    // *** Include Table Description ***
    require('../books/table.php');
    $result = mysqli_query($this->connection, $sql);
    if(!$result){echo('*** ERROR Creating BOOKS Table ***<br>');}
  }

  public function welcome_message(){
    echo('BOOK Class Instantiated...<br>');
  }
}

 ?>
