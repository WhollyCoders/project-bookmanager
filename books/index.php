<?php
require('../../dbconnect.php');
require('../functlib.php');
require('../classes/BookImage.php');
require('../classes/BookAuthor.php');
require('../classes/Book.php');

$book = new Book($connection);

$firstname  = 'Camille';
$lastname   = 'McCue';
$author_params = array(
  'firstname'   =>  $firstname,
  'lastname'    =>  $lastname
);
// $book->add_author($author_params);

$title      = 'Getting Started With Coding';
$author_id  = '5';
$isbn_10    = '';
$isbn_13    = '978-1-119-17717-3';
$image_id   = '';
$book_params = array(
  'title'     =>  $title,
  'author_id' =>  $author_id,
  'isbn_10'   =>  $isbn_10,
  'isbn_13'   =>  $isbn_13,
  'image_id'  =>  $image_id
);
// $book->add_book($book_params);
// prewrap($book);
$book_title   = $book->get_book_title(2);
$book_author  = $book->get_author_name(3);
echo('The Author of <em>'.$book_title.'</em> is: <strong>'.$book_author.'</strong>');
 ?>
