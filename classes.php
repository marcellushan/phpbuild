<?php

class MyAthlete {
    
    public $fname;
    public $lname;
    private $statement;


    function __construct( $fname, $lname)
        {
            $this->fname = $fname;
            $this->lname = $lname;
        }

    
    $statement->execute();


    function getAthlete() {
        return "{$this->lname}" . " {$this->fname}";
    }

}