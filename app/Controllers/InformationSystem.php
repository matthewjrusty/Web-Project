<?php

namespace App\Controllers;

class InformationSystem extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'cs.uph.edu | Information System'
        ];
        echo view('InformationSystem', $data);
    }

    //--------------------------------------------------------------------

}
