<?php
$sql = "CREATE TABLE IF NOT EXISTS `whollycoders`.`books` (
   `book_ID` INT NOT NULL AUTO_INCREMENT ,
   `book_title` VARCHAR(255) NOT NULL ,
   `book_author_ID` INT NULL ,
   `book_description` TEXT NULL ,
   `book_subject` VARCHAR(255) NULL ,
   `book_isbn_10` VARCHAR(15) NULL ,
   `book_isbn_13` VARCHAR(20) NULL ,
   `book_date_entered` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY (`book_ID`)
 ) ENGINE = InnoDB;";
 ?>
