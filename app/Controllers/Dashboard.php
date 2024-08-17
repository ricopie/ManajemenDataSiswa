<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $this->data['pageName'] = 'Dashboard';
        return view('pages/dashboard', $this->data);
    }
}
