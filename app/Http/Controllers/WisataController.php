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
    public function __construct()
    {
        $this->middleware('is_admin');
    }
    public function wisataAdmin()
    {
        $wisata = Wisata::all();
        $jumlah = Wisata::count();
        return view('wisata.index', compact('wisata', 'jumlah'));
    }

    public function create()
    {
        return view('wisata.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'picture' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $pictureName = time() . '.' . $request->picture->extension();
        $request->picture->move(public_path('/images'), $pictureName);

        $wisata = Wisata::create([
            'title' => $request['title'],
            'desc' => $request['desc'],
            'categorie' => $request['categorie'],
            'location' => $request['location'],
            'picture' => $pictureName,
        ]);
        return redirect('/admin/wisata');
    }

    public function edit($id)
    {
        $wisata = Wisata::find($id);
        return view('wisata.edit', compact('wisata'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'picture' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $pictureName = time() . '.' . $request->picture->extension();
        $request->picture->move(public_path('/images'), $pictureName);
        $wisata = Wisata::find($id);

        $wisata->title = $request->title;
        $wisata->desc = $request->desc;
        $wisata->categorie = $request->categorie;
        $wisata->location = $request->location;
        $wisata->picture = $pictureName;
        $wisata->save();
        return redirect('/admin/wisata');
    }

    public function destroy($id)
    {
        $wisata = Wisata::find($id);
        $wisata->delete();
        return redirect('/admin/wisata');
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
            ->where('status', '=', 'Accept')
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
}
