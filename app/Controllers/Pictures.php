<?php

namespace App\Controllers;

class Pictures extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'cs.uph.edu | Pictures'
        ];
        echo view('Pictures', $data);
    }

    //--------------------------------------------------------------------

}
