<?php

namespace App\Controllers;
use App\Models\Devices;

class DevicesController extends BaseController
{
    protected $devicesModel;

    public function __construct()
    {
        $this->devicesModel = new Devices();
    }

    public function index()
    {
        $devices = $this->devicesModel->findAll();

        $data = [
            'title' => 'Devices',
            'devices' => $devices,
        ];

        return view('pages/devices', $data);
    }
}
