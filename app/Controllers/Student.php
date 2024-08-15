<?php

namespace App\Controllers;

class Student extends BaseController
{
    public function index()
    {
        $this->data['pageName'] = 'Student';
        return view('pages/student', $this->data);
    }
}


