<?php

namespace App\Models;

use CodeIgniter\Model;

class Device extends Model
{
    private static $sample = [
        [
            "Id" => 1,
            "device_name" => "RX 6700",
            "device_brand" => "RADEON",
            "device_quantity" => 20,
            "device_status" => 1
        ],
        [
            "Id" => 2,
            "device_name" => "RTX 3080",
            "device_brand" => "NVIDIA",
            "device_quantity" => 29,
            "device_status" => 0
        ],
        [
            "Id" => 3,
            "device_name" => "RTX 3090",
            "device_brand" => "NVIDIA",
            "device_quantity" => 37,
            "device_status" => 1
        ]
    ];
    public function data()
    {
        return self::$sample;
    }
}
