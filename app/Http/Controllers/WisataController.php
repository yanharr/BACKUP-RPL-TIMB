<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{
    // septi
    // public function index(Request $request)
    // {
    //     $data['listWisata'] = Wisata::with(['reviews'])
    //         ->when($request->has('searchWisata') && $request->searchWisata != null, function ($query) use ($request) {
    //             $query->where('title', 'LIKE', '%' . $request->searchWisata . '%');
    //         })->when($request->has('searchCategory') && $request->searchCategory != null, function ($query) use ($request) {
    //             $query->where('categorie', $request->searchCategory);
    //         })->paginate(3);

    //     return view('wisata.index', $data);
    // }

    public function show(Request $request, Wisata $wisata)
    {
        $data['wisata'] = $wisata->load(['reviews']);

        return view('wisata.detail', $data);
    }

    public function UserLookWisata() {

        $wisata = DB::table('wisatas')
            ->select('*')
            ->where('status','=','Accept')
            ->get();
        return view('wisata.index')->with([
            'title' => 'Data Wisata',
            'data' => $wisata
        ]);
    
    }

    public function UserLookDetailWisata($id) {

        $wisata = Wisata::find($id);

        return view('wisata.detail')->with([
            'data' => $wisata
        ]);
        
    
    }
}
