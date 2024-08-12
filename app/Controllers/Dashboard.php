<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    protected $data = [];

    public function index()
    {
        $this->data['pageName'] = 'Dashboard';
        return view('pages/dashboard', $this->data);
    }
}