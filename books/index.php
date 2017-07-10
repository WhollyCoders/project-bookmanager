<?php
require('../../_CONNECT/dbconnect.php');
require('../functlib.php');
require('../classes/Book.php');
require('../classes/BookAuthor.php');
require('../classes/BookImage.php');

$book = new Book($connection);
// prewrap($book);

$firstname  = 'Camille';
$lastname   = 'McCue';

$data = array(
  'firstname'   =>  $firstname,
  'lastname'    =>  $lastname
);

$book->add_author($data);
// prewrap($book);

 ?>
