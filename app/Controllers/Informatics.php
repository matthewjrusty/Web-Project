<?php

namespace App\Controllers;

class Informatics extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'cs.uph.edu | Informatics'
        ];
        echo view('Informatics', $data);
    }

    //--------------------------------------------------------------------

}
