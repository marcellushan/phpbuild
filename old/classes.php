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

    $statement = $pdo->prepare("insert into athlete (fname, lname) values ('jack', 'holmes')");
    $statement->execute();


    function getAthlete() {
        return "{$this->lname}" . " {$this->fname}";
    }

}