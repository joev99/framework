<?php
require_once("model/Book.php");

class Model {
    public function getBookList() {
        //here goes some hardcoded values to simulate the database
        return array(
            "Jungle Book" => new Book("Jungle Book", "R.Kipling", "A classic book."),
            "MoonWalker" => new Book("MoonWalker", "J.Walker", "Simple Java for students"),
            "PHP for Dummies" => new Book("PHP for Dummies","Smart Guy","My favorite book")
        );
    }

    public function getBook($title) {
        // we use the previous function to get all the books and then
        // we return the requested one.
        // in a real life scenario this willbe done through a db select command
        $allBooks = $this->getBookList();
        return $allBooks[$title];
    }
}
?>