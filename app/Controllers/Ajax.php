<?php

namespace App\Controllers;

use App\Models\ApiModel;

class Ajax extends BaseController
{
    protected $apiModel;
    function __construct()
    {
        $this->apiModel = new ApiModel();
    }
    public function getDataSet()
    {
        $pinogaluman = $this->request->getGet('pinogaluman');
        $kaidipang = $this->request->getGet('Kaidipang');
        $bolbar = $this->request->getGet('bolbar');
        $boltim = $this->request->getGet('boltim');
        $bintauna = $this->request->getGet('bintauna');
        $sangkub = $this->request->getGet('sangkub');
        $tahun = $this->request->getGet('tahun');
        $dinas = $this->request->getGet('dinas');
        $kategori = $this->request->getGet('kategori');
        if ($tahun != 0 && $dinas != 0 && $kategori != 0 && $pinogaluman != 0 && $kaidipang != 0 && $bolbar != 0 && $boltim != 0 && $bintauna != 0 && $sangkub != 0) {
            $url = "etika.diskominfo.bolmutkab.go.id/api?filter[tahundata]=$tahun&filter[iddinas]=$dinas&filter[subjek]=$kategori";
        } else if ($tahun != 0 && $dinas != 0 && $kategori == 0) {
            $url = "etika.diskominfo.bolmutkab.go.id/api?filter[tahundata]=$tahun&filter[iddinas]=$dinas";
        } else if ($tahun != 0 && $kategori != 0 && $dinas == 0) {
            $url = "etika.diskominfo.bolmutkab.go.id/api?filter[tahundata]=$tahun&filter[subjek]=$kategori";
        } else if ($dinas != 0 && $kategori != 0 && $tahun == 0) {
            $url = "etika.diskominfo.bolmutkab.go.id/api?filter[iddinas]=$dinas&filter[subjek]=$kategori";
        } else if ($tahun != 0 && $dinas == 0 && $kategori == 0) {
            $url = "etika.diskominfo.bolmutkab.go.id/api?filter[tahundata]=$tahun";
        } else if ($kategori != 0 && $tahun == 0 && $dinas == 0) {
            $url = "etika.diskominfo.bolmutkab.go.id/api?filter[subjek]=$kategori";
        } else if ($dinas != 0 && $kategori == 0 && $tahun == 0) {
            $url = "etika.diskominfo.bolmutkab.go.id/api?filter[iddinas]=$dinas";
        } else {
            $url = "etika.diskominfo.bolmutkab.go.id/api";
        }
        $api = $this->apiModel->getApi($url);
        if ($api) {
            $this->data['all'] = $api;
            $response = [
                'message'   => $this->session->getFlashdata('success'),
                'status'    => true,
                'data'      => view('App\Views\front_end\show-data-set', $this->data)
            ];
        } else {
            $response = [
                'message'   => $this->session->getFlashdata('error'),
                'status'    => false,
                'data'      => ''
            ];
        }

        echo json_encode($response);
    }
}
