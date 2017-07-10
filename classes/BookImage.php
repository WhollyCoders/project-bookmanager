<?php
class BookImage{
  public $connection;
  public $ID;
  public $image_url;

  public function __construct($connection){
    $this->connection = $connection;
    $this->create_book_images_table();
    $this->welcome_message();
  }

  public function create_book_images_table(){
    $sql = "CREATE TABLE IF NOT EXISTS `whollycoders`.`book_images` (
       `book_image_ID` INT NOT NULL AUTO_INCREMENT ,
       `book_image_url` VARCHAR(255) NOT NULL ,
       `book_date_entered` DATETIME NOT NULL ,
       PRIMARY KEY (`book_image_ID`)
     ) ENGINE = InnoDB;";
    $result = mysqli_query($this->connection, $sql);
    if(!$result){echo('*** ERROR Creating BOOKS Table ***<br>');}
  }

  public function welcome_message(){
    echo('Book IMAGE Class Instantiated...<br>');
  }
}

 ?>
