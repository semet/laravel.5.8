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
                'Hasil' => 1000000
            ],
            [
                'collector' => 'Ibnu',
                'Hasil' => 1000000
            ],
            [
                'collector' => 'Soleh',
                'Hasil' => 1000000
            ],
            [
                'collector' => 'Rahmat',
                'Hasil' => 1000000
            ],
            [
                'collector' => 'Budi',
                'Hasil' => 1000000
            ],
            [
                'collector' => 'Fuji',
                'Hasil' => 1000000
            ],
            [
                'collector' => 'Ridwan',
                'Hasil' => 1000000
            ],
            [
                'collector' => 'Naufal',
                'Hasil' => 1000000
            ],
            [
                'collector' => 'Tuti',
                'Hasil' => 1000000
            ],
            [
                'collector' => 'Naufal',
                'Hasil' => 1000000
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

        $tunggakanPerOrang = collect($this->data)
                        ->map(fn($value, $key) => $value['Hasil'])
                        ->tap(fn($collection) => $collection->sum() / $collection->count())
                        ->map(fn($result) => number_format($result));

        return ($tunggakanPerOrang);
    }
}
