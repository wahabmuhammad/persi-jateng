<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class rsanggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Baca data dari file JSON
        $jsonPath = storage_path('/data/rumah_sakit.json');

        if (!File::exists($jsonPath)) {
            // Jika file tidak ditemukan, gunakan data default
            $rumahSakit = $this->getDefaultData();
        } else {
            $jsonContent = File::get($jsonPath);
            $rumahSakit = json_decode($jsonContent, true);

            if (json_last_error() !== JSON_ERROR_NONE || !is_array($rumahSakit)) {
                $rumahSakit = $this->getDefaultData();
            }
        }

        // Filter berdasarkan parameter
        $kota = $request->input('kota');
        $kelas = $request->input('kelas');
        $karesidenan = $request->input('karesidenan');
        $search = $request->input('search');

        if ($kota) {
            $rumahSakit = array_filter($rumahSakit, function ($item) use ($kota) {
                return strtolower($item['kota']) === strtolower($kota);
            });
        }

        if ($kelas) {
            $rumahSakit = array_filter($rumahSakit, function ($item) use ($kelas) {
                return $item['kelas'] === $kelas;
            });
        }

        if ($karesidenan) {
            $rumahSakit = array_filter($rumahSakit, function ($item) use ($karesidenan) {
                return strtolower($item['karesidenan']) === strtolower($karesidenan);
            });
        }

        if ($search) {
            $rumahSakit = array_filter($rumahSakit, function ($item) use ($search) {
                return stripos($item['nama'], $search) !== false ||
                    stripos($item['kota'], $search) !== false ||
                    stripos($item['alamat'], $search) !== false;
            });
        }

        // Reset index array
        $rumahSakit = array_values($rumahSakit);

        // Data untuk filter
        $kotaList = $this->getUniqueValues($rumahSakit, 'kota');
        $kelasList = ['A', 'B', 'C', 'D'];
        $karesidenanList = $this->getUniqueValues($rumahSakit, 'karesidenan');

        // Pagination manual
        $perPage = 20;
        $currentPage = $request->input('page', 1);
        $total = count($rumahSakit);
        $totalPages = ceil($total / $perPage);
        $offset = ($currentPage - 1) * $perPage;
        $paginatedData = array_slice($rumahSakit, $offset, $perPage);

        return view('anggota.index', compact(
            'paginatedData',
            'rumahSakit',
            'kotaList',
            'kelasList',
            'karesidenanList',
            'currentPage',
            'totalPages',
            'total',
            'perPage'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jsonPath = storage_path('/data/rumah_sakit.json');
        // dd($jsonPath);

        if (!File::exists($jsonPath)) {
            abort(404, 'Data rumah sakit tidak ditemukan');
        }

        $jsonContent = File::get($jsonPath);
        $rumahSakit = json_decode($jsonContent, true);

        $hospital = null;
        foreach ($rumahSakit as $item) {
            if ($item['no'] == $id) {
                $hospital = $item;
                break;
            }
        }

        if (!$hospital) {
            abort(404, 'Rumah sakit tidak ditemukan');
        }

        return view('anggota.show', compact('hospital'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Get unique values from array
     */
    private function getUniqueValues($data, $key)
    {
        $values = array_column($data, $key);
        $values = array_filter($values, function ($v) {
            return !empty($v);
        });
        $values = array_unique($values);
        sort($values);
        return $values;
    }

    /**
     * Get default data if JSON file not found
     */
    private function getDefaultData()
    {
        return [
            [
                'no' => 1,
                'nama' => 'RSUP Dr.Kariadi',
                'no_anggota' => 'KSM.001',
                'alamat' => 'Jl.Dr.Sutomo No.16',
                'kota' => 'SEMARANG',
                'no_telepon' => '8413476',
                'no_fax' => '8318617',
                'email' => 'info@rskariadi.co.id',
                'website' => '',
                'direktur_utama' => 'Dr. Agus Suryanto, Sp.PD-KP, MARS, MH',
                'kelas' => 'A',
                'karesidenan' => 'Karesidenan Semarang'
            ],
            // ... tambahkan data default lainnya jika diperlukan
        ];
    }
}
