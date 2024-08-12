<?php 

namespace App\Controllers;

class Kesiswaan extends BaseController
{
    protected $data = [];

    public function index()
    {
        $this->data['pageName'] = 'Data Siswa';
        return view('pages/data_siswa', $this->data);
    }
}