<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $comments = [
            [
                'name' => 'Collins Onine',
                'time' => '5 mins ago',
                'content' => 'This is a dummy content'
            ],
            [
                'name' => 'Onyinye Ofili',
                'time' => '10 mins ago',
                'content' => 'Onyinye Posted This'
            ],
            [
                'name' => 'Derrick Aruoture',
                'time' => '15 mins ago',
                'content' => 'Derrick Posted This'
            ],
            [
                'name' => 'Princess Olawale',
                'time' => '30 mins ago',
                'content' => 'Princess Posted This'
            ],
        ];
        // dd($comments);
        return view('welcome', ['comments' => $comments]);
    }
}
