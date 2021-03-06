<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\WisataModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');        
    }
    public function show(Request $request, Wisata $wisata)
    {
        $data['wisata'] = $wisata->load(['reviews']);

        return view('wisata.detail', $data);
    }

    public function UserLookWisata()
    {

        $wisata = DB::table('wisatas')
            ->select('*')
            ->where('status', '=', 'Accepted')
            ->get();
        return view('wisata.index')->with([
            'title' => 'Data Wisata',
            'data' => $wisata
        ]);
    }

    public function UserLookDetailWisata($id)
    {

        $wisata = Wisata::find($id);

        return view('wisata.detail')->with([
            'data' => $wisata
        ]);
    }
    public function showWisataDataPending() {

        $wisata = DB::table('wisatas')
            ->select('*')
            ->where('status','=','Pending')
            ->get();
        return view('DataWisataPending')->with([
            'title' => 'Data Wisata',
            'data' => $wisata
        ]);
    
    }

    public function showWisataData() {

        $wisata = DB::table('wisatas')
            ->select('*')
            ->where('status','=','Accepted')
            ->get();
        return view('DataWisata')->with([
            'title' => 'Data Wisata',
            'data' => $wisata
        ]);
    
    }

    public function UpdateWisataData($id) {

        $wisata = WisataModel::find($id);

        return view('EditDataWisata')->with([
            'title' => 'Edit Data Wisata',
            'data' => $wisata
        ]);
    }

    public function EditWisataData(Request $request)
    {
        
        DB::table('wisatas')->where('id_wisata',$request->id_wisata)->update([
            'title' => $request->title,
            'categorie' => $request->categorie,
            'location' => $request->location,
            'desc' => $request->desc,
            'status' => $request->status
        
        ]);

        return redirect('DataWisataPending');
    }

    public function DeleteWisataData($id) {

        DB::table('wisatas')->where('id_wisata',$id)->delete();

        return redirect('DataWisataPending');
    }

}
