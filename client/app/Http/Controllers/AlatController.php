<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AlatController extends Controller
{
    public function index()
    {
        $url = 'http://localhost:2020/api/alat';
        $token = 'F1q5Baw2TwQCJOef2IMPQfxrqEvnlDktXkv6uDUW5fcad335';

        $request = Http::withToken($token)->get($url);

        // dd($request->json());
        $alat = $request->json();
        $alat = $alat['data'];

        // dd($alat);
        return view('alat', compact('alat'));
    }
}
