<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getJumlahTunggaka()
    {
        $collection = [
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

        $jumlahTunggakan = collect($collection)->map((function($value, $key) {
            return $value['Hasil'];
        }))
        ->reduce((function($carry, $item) {
            return $carry + $item;
        }));

        return $jumlahTunggakan;
    }
}
