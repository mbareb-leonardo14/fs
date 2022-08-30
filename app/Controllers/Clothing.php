<?php 

namespace App\Controllers;

class Clothing extends BaseController {
    public function index() 
    {
        $data = [
            'title' => 'Clothes'
        ];
        return view('clothing/index', $data);
    }
}

?>