<?php 

class Book
{
    public $id;
    public $title;
    public $isbn;
    public $pageCount;
    public $thumbnailUrl;
    public $shortDescription;
    public $longDescription;
    public $status;
    public $authors;
    public $categories;

    public function __construct($title, $isbn, $pageCount, $thumbnailUrl, $shortDescription, $authors){
        $this->title = $title;
        $this->isbn = $isbn;
        $this->pageCount = $pageCount;
        $this->thumbnailUrl = $thumbnailUrl;
        $this->shortDescription = $shortDescription;
        $this->authors = $authors;
    }

}