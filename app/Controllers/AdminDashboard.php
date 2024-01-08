<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminDashboard extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('admin/dashboard', $data);
    }
}
