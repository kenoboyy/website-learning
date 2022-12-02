<?php

namespace App\Models;

use CodeIgniter\Model;

class Devices extends Model
{
    protected $table = 'devices';

    public function getDevice($slug = false)
    {
        if($slug == false)
        {
            return $this->findAll();
        }

        return $this->where(['device_slug' => $slug])->first();
    }
}