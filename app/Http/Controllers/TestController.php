<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class TestController extends Controller
{
    public array $data;

    public function __construct()
    {
        $this->data = [
            [
                'collector' => 'Rudi',
                // 'Hasil' => 1000000
            ],
            [
                'collector' => 'Ibnu',
                // 'Hasil' => 1000000
            ],
            [
                'collector' => 'Soleh',
                // 'Hasil' => 1000000
            ],
            [
                'collector' => 'Rahmat',
                // 'Hasil' => 1000000
            ],
            [
                'collector' => 'Budi',
                // 'Hasil' => 1000000
            ],
            [
                'collector' => 'Fuji',
                // 'Hasil' => 1000000
            ],
            [
                'collector' => 'Ridwan',
                // 'Hasil' => 1000000
            ],
            [
                'collector' => 'Naufal',
                // 'Hasil' => 1000000
            ],
            [
                'collector' => 'Tuti',
                // 'Hasil' => 1000000
            ],
            [
                'collector' => 'Naufal',
                // 'Hasil' => 1000000
            ],
        ];
    }

    public function getJumlahTunggakan()
    {
        $jumlahTunggakan = collect($this->data)
                    ->map(fn($value, $key) => $value['Hasil'])
                    // ->reduce(fn($carry, $item) => $carry + $item);
                    ->sum();

        return number_format($jumlahTunggakan);
    }

    public function bagiTunggakanBerdasarkanJumlahPeminjam()
    {
        $jumlahTunggakan = 10000000;
        $jumlahOrang = collect($this->data)
            ->map(fn($value, $key) => $value['collector'])
            ->count();
        $perOrang = $jumlahTunggakan / $jumlahOrang;

        $tiapOrang  = collect($this->data)
            ->map(function($val, $key) use($perOrang) {
                return [
                    'Nama' => $val['collector'],
                    'Tunggakan' => $perOrang
                ];
            });


        return $tiapOrang;
    }
}
