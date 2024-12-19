<?php

class Book {
    // Attributes
    public $title;
    public $author;
    public $price;
    public $availableCopies;


    // constructor
    public function __construct($title, $author, $price, $availableCopies)
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->availableCopies = $availableCopies;

    }

   //Method to get book deatils
   public function getDetails(){
     return "Title: {$this->title}\n" .
           "Author: {$this->author}\n" .
            "Price: $ {$this->price}\n" .
            "Available Copies: {$this->availableCopies}\n";
   }

   // Method to check if the book is in stock
   public function isAvailable() {
    return $this->availableCopies > 0 ? "In Stock" : "Out of Stock";
}

}

// Creating instances of the Book class
$book1 = new Book("To Kill a Mockingbird", "Harper Lee", 15.99, 5);
$book2 = new Book("1984", "George Orwell", 12.99, 0);

// Interacting with the objects
echo $book1->getDetails();
echo "Availability: " . $book1->isAvailable() . "\n";

echo $book2->getDetails();
echo "Availability: " . $book2->isAvailable() . "\n";
?>