<?php

namespace App\Controllers;

use \App\Models\DosenModel;

class OurPeople extends BaseController
{
    protected $dosenModel;
    public function __construct()
    {
        $this->dosenModel = new DosenModel();
    }

    public function index()
    {

        $data = [
            'title' => 'cs.uph.edu | Our People',
            'dosen' => $this->dosenModel->getProfile()
        ];

        echo view('OurPeople', $data);
    }

    public function profile($slug)
    {
        $data = [
            'title' => 'Lecturer Profile',
            'dosen' => $this->dosenModel->getProfile($slug)
        ];

        return view('Profile', $data);
    }

    //--------------------------------------------------------------------

}
