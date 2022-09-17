<?php



// namespace App\Controllers;


///

// if want to use name space we use this
// use CodeIgniter\Controller;


// //other wise simplay add CodeIgniter here
// class Blog extends \CodeIgniter\Controller
// {
//     public function index(){
//         echo view('header');
//         echo view('myview');
//         echo view('footer');
//     }
// }





namespace App\Controllers;

class Blog extends \CodeIgniter\Controller{

    public function index()
    {
        $data = [
            "page_title"=>"CodeIgniter 4",
            "page_heading"=>"CodeIgniter 4 views",
            "subjects"=>["HTML","CSS","Bootstrap","Javascript","AJAX","JSON","JQuery","PHP","MYSQL","CodeIgniter","Laravel"],
        ];
        echo view("myview",$data);
    }
}






?>