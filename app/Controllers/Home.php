<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home',
        ];
        return view('user/home', $data);
    }

    public function food(): string
    {
        $data = [
            'title' => 'Makanan',
        ];
        return view('user/food', $data);
    }

    public function drink(): string
    {
        $data = [
            'title' => 'Minuman',
        ];
        return view('user/drink', $data);
    }

    public function other(): string
    {
        $data = [
            'title' => 'Lainnya',
        ];
        return view('user/other', $data);
    }
}
