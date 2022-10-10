<?php

namespace App\Models;

class ApiModel
{
    protected $session;
    function __construct()
    {
        $this->session = \Config\Services::session();
    }
    public function getApi($url)
    {
        $options = [
            'baseURI' => 'http://etika.diskominfo.bolmutkab.go.id/api/',
            'timeout' => 30,
        ];
        $client = \Config\Services::curlrequest($options);
        $res = $client->request('GET', $url, [
            'http_errors' => false
        ]);
        $body = $res->getBody();
        switch ($res->getStatusCode()) {
            case '200':
                $this->session->setFlashdata('success', '200-OK');
                // return $body;
                return json_decode($body, true);
                break;

            case '404':
                $this->session->setFlashdata('error', '404 - not found');
                return false;
                break;

            default:
                $this->session->setFlashdata('error', 'undefined error, status : ' . $res->getStatusCode());
                return false;
                break;
        }
    }
}
