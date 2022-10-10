<?php

namespace App\Controllers;

class Bidang extends BaseController
{
    public function index()
    {
        return view('front_end/index');
    }
    public function bidang1()
    {
        echo view('frontend/bidang/header');
        echo view('frontend/bidang/1/pendidikan');
    }
    public function bidang2()
    {
        echo view('frontend/bidang/header');
        echo view('frontend/bidang/2/kesehatan');
    }
    public function bidang4()
    {
        echo view('frontend/bidang/header');
        echo view('frontend/bidang/4/perumahan-dan-kawasan-permukiman');
    }
    public function bidang6()
    {
        echo view('frontend/bidang/header');
        echo view('frontend/bidang/6/sosial');
    }
    public function bidang7()
    {
        echo view('frontend/bidang/header');
        echo view('frontend/bidang/7/tenaga-kerja');
    }
    public function bidang12()
    {
        echo view('frontend/bidang/header');
        echo view('frontend/bidang/12/administrasi-kependudukan-dan-pencatatan-sipil');
    }
    public function bidang16()
    {
        echo view('frontend/bidang/header');
        echo view('frontend/bidang/16/komunikasi-dan-informatika');
    }
    public function bidang17()
    {
        echo view('frontend/bidang/header');
        echo view('frontend/bidang/17/koperasi-usaha-kecil-dan-menengah');
    }
    public function bidang22()
    {
        echo view('frontend/bidang/header');
        echo view('frontend/bidang/22/kebudayaan');
    }
    public function bidang27()
    {
        echo view('frontend/bidang/header');
        echo view('frontend/bidang/27/pertanian');
    }
    public function bidang31()
    {
        echo view('front_end/bidang/header');
        echo view('front_end/bidang/31/perindustrian');
    }
    public function bidang33()
    {
        echo view('frontend/bidang/header');
        return view('frontend/bidang/33/sekretariat-daerah');
    }
    public function bidang36()
    {
        echo view('frontend/bidang/header');
        return view('frontend/bidang/36/keuangan');
    }
}
