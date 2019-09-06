<?php

class Author {
    private $name;
    private $email;

    public function __construct($name,$email){
        $this->name = $name;
        $this->email = $email;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }
}

class Book {
    //using array to allow multiple authors
    private $authors = array();
    private $price;
    private $name;

    public function __construct($name,$price){
        $this->name = $name;
        $this->price = $price;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getName(){
        return $this->name;
    }

    public function addAuthor($name,$email){
        $this->authors[] = new Author($name,$email);
    }

    public function getAuthors(){
        return $this->authors;
    }
}

$book = new Book('Book Name',10.0);
$book -> addAuthor('Kelly','kelly@brainbell.com');
$book -> addAuthor('Ken','ken@brainbell.com');

/* print book info */
echo $book -> getName();
echo $book -> getPrice();

/* print book's authors info */
$authors = $book -> getAuthors(); //Array of authors
foreach ($authors as $author) {
    echo "<p>";
    echo $author -> getName() ;
    echo " - ";
    echo $author -> getEmail();
    echo "</p>";
}