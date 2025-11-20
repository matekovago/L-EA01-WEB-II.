<?php
namespace App\Http\Controllers;
class Controller2 extends Controller
    {
        public function print1()
        {
            echo "Hello2";
        }
        public function print2()
        {
            $data= array('data1'=> "abc", 'data2'=> 5);
            return view('view2p2', $data);
        }
    }