<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'ini halaman index menggunakan controller';
    }

    public function request(){
        return 'ini halaman request menggunakan controller';
    }

    public function array(){
        $data = ['php', 'java', 'c', 'javascript', 'dart'];
        return $data;
    }
}
