<?php
require('../dbconnect.php');
require('./classes/BookImage.php');
require('./classes/BookAuthor.php');
require('./classes/Book.php');

$book = new Book($connection);
 ?>
