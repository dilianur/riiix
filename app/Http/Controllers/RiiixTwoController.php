<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiiixTwoController extends Controller
{
    public function index()
    {
        $title = 'Главная страница сайта';
        return view('riiix_one.index')->with('header', $title);
    }

    public function about()
    {
        $data = [
            'title' => 'Дили пили',
            'arrays' => ['one', 'two', 'three']
        ];
        return view('riiix_one.about')->with($data);
    }
}
