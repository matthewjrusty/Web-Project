<?php

namespace App\Controllers;

class History extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'cs.uph.edu | History'
        ];
        echo view('History', $data);
    }

    //--------------------------------------------------------------------

}
