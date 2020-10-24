<?php namespace App\Controllers;

class Helloworld extends BaseController {

    public function index($name, $npm)
    {
       // echo $this->name;
       echo $name . "<br>";
       echo $npm . "<br>";
       // echo "Hello windy";
    }

    public function show()
    {
        echo "windy";
        echo "1817051039";
    }
}