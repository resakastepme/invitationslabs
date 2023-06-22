<?php

namespace App\Http\Controllers;

use App\Models\Tampilan;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TampilanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $temas = Tampilan::get();
        $orders = Order::where('id_user', Auth::user()->id)->first();
        return view('admin.tampilan.index', [
            'temas' => $temas,
            'orders' => $orders
        ]);
    }

    public function changeTampilan($id){
        $orders = Order::where('id_user', Auth::user()->id)->update([
            'id_tema' => $id
        ]);
        return redirect()->route('tampilan.index')->with('changed.succcessfully', 'Berhasil ubah tampilan!');
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
    public function show(Tampilan $tampilan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tampilan $tampilan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tampilan $tampilan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tampilan $tampilan)
    {
        //
    }
}
