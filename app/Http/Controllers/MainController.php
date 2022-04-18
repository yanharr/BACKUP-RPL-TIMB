<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $wisata = DB::table('wisatas')
            ->select('*')
            ->where('status','=','Accepted')
            ->orderBy('wisatas.created_at', 'DESC')
            ->limit(5)
            ->get();
        $review = DB::table('reviews')
            ->join('users', 'users.id', '=', 'reviews.id_user')
            ->join('wisatas', 'wisatas.id_wisata', '=', 'reviews.id_wisata')
            ->select('users.photo_user', 'users.name', 'reviews.desc', 'wisatas.title', 'reviews.id', 'reviews.id_wisata', 'reviews.id_user')
            ->orderBy('reviews.created_at', 'DESC')
            ->limit(4)
            ->get();
        return view('customer.home.index', compact('wisata', 'review'));
    }
}
