<?php


namespace App\Controllers;
use \CodeIgniter\View\Table;


class Data extends \CodeIgniter\Controller{

    public function index(){

        $table = new Table();


        $data = [
            ['Name', 'City', 'State'],
            ['Kailash kumar', 'Bhaktpur', 'Baagmati'],
            ['Anubhav', 'Kathmandu', 'Sudurpachim'],
            ['Anurag sharma', 'laalpur', 'Sitapri'], 
        ];


        echo $table->generate($data);


    }


}



?>