<?php 

class Movie{
    
    public $title;
    public $director;
    public $year;

    public function __construct( $title, $director, $year) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

    public function getTitle(){
        return $this->title; 
    }
    


}

$movie1 = new Movie("American History X","Tony Kaye","1998");
$movie2 = new Movie("La Haine","Mathieu Kassovitz","1996");

var_dump($movie1);
var_dump($movie2);

?>