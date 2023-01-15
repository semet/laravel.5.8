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

        $jumlahTunggakan = collect($collection)
                    ->map(fn($value, $key) => $value['Hasil'])
                    ->reduce(fn($carry, $item) => $carry + $item);

        return number_format($jumlahTunggakan, 2);
    }
}
