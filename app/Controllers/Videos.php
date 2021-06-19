<?php

namespace App\Controllers;

class Videos extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'cs.uph.edu | Videos'
        ];
        echo view('Videos', $data);
    }

    //--------------------------------------------------------------------

}
