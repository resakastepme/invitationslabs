<?php

namespace App\Http\Controllers;

use App\Models\Cerita;
use Illuminate\Http\Request;

class CeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.cerita.index');
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
    public function show(Cerita $cerita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cerita $cerita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cerita $cerita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cerita $cerita)
    {
        //
    }
}
