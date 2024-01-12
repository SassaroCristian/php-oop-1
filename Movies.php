<?php 
// nella classe inserisco i metodi, le variabili e il costruttore
class Movies {
    private $movieTitle;
    private $movieReleaseDate;
    private $movieScreenTime;
    private $category;

    public function __construct($movieTitle, $movieReleaseDate, $movieScreenTime, $category) {
        $this->movieTitle = $movieTitle;
        $this->movieReleaseDate = $movieReleaseDate;
        $this->movieScreenTime = $movieScreenTime;
        $this->category = $category;
    }

    public function __toString() {
        return "\nMovie Title: " . $this->movieTitle . "\nMovie release date: " . $this->movieReleaseDate . "\nMovie duration: " . $this->movieScreenTime . "\nMovie category: " . $this->category . "\n";
    }
    
}

