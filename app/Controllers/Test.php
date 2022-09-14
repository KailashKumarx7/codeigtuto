<?php


    namespace App\Controllers;
    use \CodeIgniter\Controller;


    class Test extends Controller{
        public function index(){
            $parser = \Config\Services::parser();

            $data = ['page_title' => 'My Blog Title',
                      'page_heading' => 'My Blog Heading',        
        ];

        $parser->setData($data);
        return $parser->render("myview1");
        // echo view("myview1");
        }
    }