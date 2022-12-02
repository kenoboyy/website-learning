<?php

namespace App\Controllers;
use App\Models\Devices;

class DeviceDetailController extends BaseController
{
    protected $devicesModel;

    public function __construct()
    {
        $this->devicesModel = new Devices();
    }

    public function index($slug)
    {
        $data = [
            'title' => 'Daftar Barang',
            'devices' => $this->devicesModel->getDevice($slug)
        ];
        return view('pages/devicedetail', $data);
    }
}