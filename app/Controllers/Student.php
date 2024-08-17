<?php

namespace App\Controllers;

class Student extends BaseController
{
    public function index()
    {
        $this->data['pageName'] = 'Student';
        $this->data['faker'] = $this->fake();
        return view('pages/student', $this->data);
    }

    public function fake(): array
    {
        $faker = \Faker\Factory::create('id_ID');
        $data = [];
        for ($i = 0; $i < 5; $i++) {
            $data[] = [
                'number' => $faker->randomNumber(8),
                'image' => base_url('assets') . '/img/' . env('github.user.profile'),
                'name' => $faker->name(),
            ];
        }

        return $data;
    }
}
