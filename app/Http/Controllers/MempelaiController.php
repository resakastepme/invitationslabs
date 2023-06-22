<?php

namespace App\Http\Controllers;

use App\Models\Mempelai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MempelaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $URL = $_SERVER['REQUEST_URI'];
        $HOST = $_SERVER['HTTP_HOST'];
        $FULL = "https://".$HOST.$URL;
        return view('admin.mempelai.index', [
            'link' => $FULL
        ]);
    }

    public function upPria(Request $request)
    {
        $image = $request->image;

        list($type, $image) = explode(';', $image);
        list(, $image)      = explode(',', $image);

        $image = base64_decode($image);
        $image_name= time().'.png';
        // $path = public_path('storage/users/'.md5(Auth::user()->name).'/img/'.$image_name);
        $path = public_path('storage/images_test/'. $image_name);

        file_put_contents($path, $image);

        return response()->json(['status'=>true]);
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
    public function show(Mempelai $mempelai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mempelai $mempelai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mempelai $mempelai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mempelai $mempelai)
    {
        //
    }
}
