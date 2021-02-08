<!DOCTYPE html>
<html>
<head>
	<title>Class and object</title>
</head>
<body>
<?php
class Book{
	var $title;
	var $author;
	var $pages;

	function __Construct($aTitle, $aAuthor, $aPages){
	$this->title = $aTitle;
	$this->author = $aAuthor;
	$this->pages = $aPages;
		}
	
	}
	$book1 = new Book("Harry Potter", "JK Rowling", 400);

	$book2 = new Book("Lord of the Rings","Alex",700);
	
    echo $book2->author;
?>
</body>
</html>