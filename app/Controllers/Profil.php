<?php

namespace App\Controllers;

class Profil extends BaseController
{
    private function getApi($url)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);

        $result = json_decode($result, true);
        return $result;
    }
    public function index()
    {
        echo view('frontend/profil/index/header');
        // echo view('frontend/profil/index/menu');
        return view('frontend/profil/index/1/1');
        // echo view('frontend/footer');
    }
    public function profil1()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/1/1');
    }
    public function profil2()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/1/2');
    }
    public function profil3()
    {
        // $data = [
        //     'totalPertahun' => $this->getApi('http://192.168.100.16/etika/public/api')['total'],
        //     'pinogaluman'   => $this->getApi('http://192.168.100.16/etika/public/api')['pinogaluman'],
        //     'kaidipang'   => $this->getApi('http://192.168.100.16/etika/public/api')['kaidipang'],
        //     'bolbar'   => $this->getApi('http://192.168.100.16/etika/public/api')['bolbar'],
        //     'boltim'   => $this->getApi('http://192.168.100.16/etika/public/api')['boltim'],
        //     'bintauna'   => $this->getApi('http://192.168.100.16/etika/public/api')['bintauna'],
        //     'sangkub'   => $this->getApi('http://192.168.100.16/etika/public/api')['sangkub'],
        // ];
        // $data = [
        //     'totalPertahun' => $this->getApi('http://etika.diskominfo.bolmutkab.go.id/api')['total'],
        //     'pinogaluman'   => $this->getApi('http://etika.diskominfo.bolmutkab.go.id/api')['pinogaluman'],
        //     'kaidipang'   => $this->getApi('http://etika.diskominfo.bolmutkab.go.id/api')['kaidipang'],
        //     'bolbar'   => $this->getApi('http://etika.diskominfo.bolmutkab.go.id/api')['bolbar'],
        //     'boltim'   => $this->getApi('http://etika.diskominfo.bolmutkab.go.id/api')['boltim'],
        //     'bintauna'   => $this->getApi('http://etika.diskominfo.bolmutkab.go.id/api')['bintauna'],
        //     'sangkub'   => $this->getApi('http://etika.diskominfo.bolmutkab.go.id/api')['sangkub'],
        // ];
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/2/1');
    }
    public function profil4()
    {
        // $data = [
        //     'totalPertahun' => $this->getApi('http://etika.diskominfo.bolmutkab.go.id/api')['total'],
        //     'pinogaluman'   => $this->getApi('http://etika.diskominfo.bolmutkab.go.id/api')['pinogaluman'],
        //     'kaidipang'   => $this->getApi('http://etika.diskominfo.bolmutkab.go.id/api')['kaidipang'],
        //     'bolbar'   => $this->getApi('http://etika.diskominfo.bolmutkab.go.id/api')['bolbar'],
        //     'boltim'   => $this->getApi('http://etika.diskominfo.bolmutkab.go.id/api')['boltim'],
        //     'bintauna'   => $this->getApi('http://etika.diskominfo.bolmutkab.go.id/api')['bintauna'],
        //     'sangkub'   => $this->getApi('http://etika.diskominfo.bolmutkab.go.id/api')['sangkub'],
        // ];
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/2/2');
    }
    public function profil5()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/2/3');
    }
    public function profil6()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/2/4');
    }
    public function profil7()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/2/5');
    }
    public function profil8()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/2/6');
    }
    public function profil9()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/2/7');
    }
    public function profil10()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/3/1');
    }
    public function profil11()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/3/2');
    }
    public function profil12()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/3/3');
    }
    public function profil13()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/3/4');
    }
    public function profil14()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/3/5');
    }
    public function profil15()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/3/6');
    }
    public function profil16()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/4/1');
    }
    public function profil17()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/4/2');
    }
    public function profil18()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/4/3');
    }
    public function profil19()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/4/4');
    }
    public function profil20()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/4/5');
    }
    public function profil21()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/4/6');
    }
    public function profil22()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/4/7');
    }
    public function profil23()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/5/1');
    }
    public function profil24()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/5/2');
    }
    public function profil25()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/5/3');
    }
    public function profil26()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/5/4');
    }
    public function profil27()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/5/5');
    }
    public function profil28()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/5/6');
    }
    // public function profil29()
    // {
    //     echo view('frontend/profil/index/header');
    //     echo view('frontend/profil/index/5/7');
    // }
    public function profil30()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/6/1');
    }
    public function profil31()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/6/2');
    }
    public function profil32()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/6/3');
    }
    public function profil33()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/6/5');
    }
    public function profil34()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/6/6');
    }
    public function profil35()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/7/1');
    }
    public function profil36()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/7/2');
    }
    public function profil37()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/7/3');
    }
    public function profil38()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/7/4');
    }
    public function profil39()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/7/5');
    }
    public function profil40()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/7/6');
    }
    public function profil41()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/8/1');
    }
    public function profil42()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/8/2');
    }
    public function profil43()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/9/1');
    }
    public function profil44()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/9/2');
    }
    public function profil45()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/9/3');
    }
    public function profil46()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/10/1');
    }
    public function profil47()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/10/2');
    }
    public function profil48()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/11/1');
    }
    public function profil49()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/11/2');
    }
    public function profil50()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/11/3');
    }
    public function profil51()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/11/4');
    }
    public function profil52()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/11/5');
    }
    public function profil53()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/11/6');
    }
    public function profil54()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/11/7');
    }
    public function profil55()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/12/1');
    }
    public function profil56()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/10/3');
    }
    public function profil57()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/10/4');
    }
    public function profil58()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/11/1');
    }
    public function profil59()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/11/2');
    }
    public function profil60()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/11/3');
    }
    public function profi61()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/11/4');
    }
    public function profil62()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/11/5');
    }
    public function profil63()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/12/1');
    }
    public function profil64()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/12/2');
    }

    public function profil65()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/12/3');
    }
    public function profil66()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/12/4');
    }
    public function profil67()
    {
        echo view('frontend/profil/index/header');
        echo view('frontend/profil/index/12/5');
    }
}
