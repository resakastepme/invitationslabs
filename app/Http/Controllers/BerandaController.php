<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\Tema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $dbtema = Tema::where('nama_tema', 'NOT LIKE', 'demo')->get();
        Session::pull('plan_order');
        Session::pull('tema_order');
        $dbtema = Tema::get();

        return view('beranda.mainlayout', [
            'dbtema' => $dbtema
        ]);
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
    public function show(Beranda $beranda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beranda $beranda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Beranda $beranda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beranda $beranda)
    {
        //
    }
}
