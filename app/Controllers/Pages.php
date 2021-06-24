<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function about()
    {
        $data = [
            'title' => 'About Us'
        ];
        return view('pages/about', $data);
    }
}
