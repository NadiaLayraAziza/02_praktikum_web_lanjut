<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }

    public function about(){
        return "Nama : Nadia Layra Aziza <br>NIM : 1941720061";
    }

    public function articles($id){
        return "Halaman Artikel dengan ID = $id";
    }
}
