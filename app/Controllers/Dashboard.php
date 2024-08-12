<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    protected $data = [];

    public function index()
    {
        $this->data['pageName'] = 'Dashboard';
        return view('admin/master', $this->data);
    }
}