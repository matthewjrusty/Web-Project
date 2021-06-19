<?php

namespace App\Controllers;

class AboutTheFaculty extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'cs.uph.edu | About The Faculty'
        ];
        echo view('AboutTheFaculty', $data);
    }

    //--------------------------------------------------------------------

}
