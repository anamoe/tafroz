<?php

namespace App\Http\Controllers;

use App\Models\DataDistributor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DistributorController extends Controller
{

    public function landingpage()
    {
        $url = 'https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json';

        // Menggunakan HTTP Client untuk mengambil data dari URL
        $response = Http::get($url);

        // Mendapatkan data JSON dalam bentuk array
        $provinsi = $response->json();
        return view('welcome', compact('provinsi'));
    }
    public function fetchDataProvinsi()
    {
        // URL JSON yang ingin diambil datanya
        $url = 'https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json';

        // Menggunakan HTTP Client untuk mengambil data dari URL
        $response = Http::get($url);

        // Mendapatkan data JSON dalam bentuk array
        $data = $response->json();

        // Mengembalikan data ke view atau melakukan operasi lainnya
        return $data;
    }

    public function getCities(Request $request)
    {
        $province_id = $request->province_id;
        $url = "https://www.emsifa.com/api-wilayah-indonesia/api/regencies/{$province_id}.json";

        $response = Http::get($url);

        if ($response->successful()) {
            $regencies = $response->json();
        } else {
            $regencies = []; // or handle error response
        }



        return response()->json($regencies);
    }


    public function getToko(Request $request)
    {
        $data = DataDistributor::where('kota_id', $request->kota_id)->get();

        return response()->json($data);
    }
    public function index()
    {
        $url = 'https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json';

        // Menggunakan HTTP Client untuk mengambil data dari URL
        $response = Http::get($url);

        // Mendapatkan data JSON dalam bentuk array
        $provinsi = $response->json();
        $data = DataDistributor::orderby('id', 'desc')->get();

        return view('admin.data-distributor', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // $url = 'https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json';

        // // Menggunakan HTTP Client untuk mengambil data dari URL
        // $response = Http::get($url);

        // // Mendapatkan data JSON dalam bentuk array
        // $provinsi = $response->json();
        // $provinsis = [];
        // foreach ($provinsi as $province) {
        //     $provinsis[] = [
        //         'id' => $province['id'],
        //         'name' => $province['name'],
        //     ];
        // }
        // return $provinsis;

        $url = 'https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json';

        // Menggunakan HTTP Client untuk mengambil data dari URL
        $response = Http::get($url);

        // Mendapatkan data JSON dalam bentuk array
        $provinsi = $response->json();
        $provinsis = [];
        foreach ($provinsi as $province) {
            $url2 = "https://www.emsifa.com/api-wilayah-indonesia/api/regencies/{$province['id']}.json";
            $response = Http::get($url2)->json();

            $kota = [];
            
            $provinsis[] = [
                'id' => $province['id'],
                'name' => $province['name'],
                'kota' => $response
            ];
        }
        // return $provinsis;

        return view('admin.data-distributor-add', compact('provinsis'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $data = $request->validate([

            'nama_lengkap' => 'required',
            'alamat_lengkap' => 'required', 'no_wa' => 'required',
            'kota_id' => 'required', 'provinsi_id' => 'required',

        ]);

        DataDistributor::create($data);
        return redirect('data-distributor')
            ->with('success', ' Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $url = 'https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json';

        // Menggunakan HTTP Client untuk mengambil data dari URL
        $response = Http::get($url);

        // Mendapatkan data JSON dalam bentuk array
        $provinsi = $response->json();
        $provinsis = [];
        foreach ($provinsi as $province) {
            $provinsis[] = [
                'id' => $province['id'],
                'name' => $province['name'],
            ];
        }


        $data = DataDistributor::where('id', $id)
            ->first();

            $url2 = "https://www.emsifa.com/api-wilayah-indonesia/api/regencies/{$data->provinsi_id}.json";
            $response2= Http::get($url2);

            // Mendapatkan data JSON dalam bentuk array
            $kota = $response2->json();
            $kotas = [];
            foreach ($kota as $kotass) {
                $kotas[] = [
                    'id' => $kotass['id'],
                    'name' => $kotass['name'],
                ];
            }
            // return $kotas;
    
        return view('admin.data-distributor-edit', compact('data', 'id','provinsis','kotas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->validate([

            'nama_lengkap' => 'required',
            'alamat_lengkap' => 'required', 'no_wa' => 'required',
            'kota_id' => 'required', 'provinsi_id' => 'required',

        ]);

        DataDistributor::findOrFail($id)->update($data);
        return redirect('data-distributor')
        ->with('success',' Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DataDistributor::destroy($id);
      
        return redirect()->back()->with('success',' Berhasil DiHapus');
    }

    public function showByCity(Request $request)
    {
        // Ambil kota_id dari request
        $kotaId = $request->input('kota_id');

        // Query untuk mengambil data distributor berdasarkan kota_id
        $distributors = DataDistributor::where('kota_id', $kotaId)->get();

        // Kirim data ke view atau format lainnya (API response misalnya)
        return response()->json($distributors);
    }
}
