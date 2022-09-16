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
            ['Aaman sharma', 'sunsarii', 'Sitapri'], 
            ['Bibek goutam', 'nuwakot', 'luwaghat'],
        ];

        echo "This is table !";

        echo $table->generate($data);


        


    }


}



?>