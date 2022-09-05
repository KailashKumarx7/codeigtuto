<?php
namespace App\Controllers;


// if want to use name space we use this
// use CodeIgniter\Controller;


//other wise simplay add CodeIgniter here
class Blog extends \CodeIgniter\Controller
{
    public function index(){
        echo view('header');
        echo view('myview');
        echo view('footer');
    }
}







?>