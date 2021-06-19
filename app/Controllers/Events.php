<?php

namespace App\Controllers;

class Events extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'cs.uph.edu | Events'
        ];
        echo view('Events', $data);
    }

    //--------------------------------------------------------------------

}
