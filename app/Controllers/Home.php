<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('frontend/header');
        echo view('frontend/index');
        echo view('frontend/footer');
    }
    public function utama()
    {
        echo view('frontend/header');
        echo view('frontend/project');
        echo view('frontend/footer');
    }
    // public function dasar()
    // {
    //     echo view('frontend/header');
    //     echo view('frontend/about');
    //     echo view('frontend/footer');
    // }
    public function publikasi()
    {
        echo view('frontend/header');
        echo view('frontend/publikasi');
        echo view('frontend/footer');
    }
    public function faq()
    {
        echo view('frontend/header');
        echo view('frontend/faq');
        echo view('frontend/footer');
    }
}
