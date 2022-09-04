<?php


namespace App\Controllers;


use CodeIgniter\Controller;

class Welcome extends Controller
{
    public function index()
    {
        echo "This is me kailash";
    }

    public function demo($name)
    {
        echo "Hello ".$name ." this is demo function";
    }

    public function address($city, $country)
    {
        echo "I am from ".$city. ", ".$country.".";
    }


    // public function _remap($method)
    // {
    //     echo $mehtod;
    // }



}



?>