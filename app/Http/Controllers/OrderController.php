<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Tema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        if( Session::has('tema_order') ){
            $temas = Tema::where('kode_tema', $id)->first();
            return view('beranda.plan.index', [
                'temas' => $temas
            ]);
        }elseif( !Session::has('tema_order') ){

            Session::put('plan_order', $id);
            $temas = Tema::get();
            return view('beranda.tema.index', [
                'temas' => $temas
            ]);

        }
    }

    /**
     * Show the form for creating a new resource.
     */

    // ORDER1-DATAUSER
    public function create()
    {
        if(!Session::has('plan_order') && !Session::has('tema_order') ){
            return redirect()->to('/');
        }else{
            return view('order.order1-datauser');
        }
    }

    // ORDER2-Mempelai
    public function mempelai(){

        return view('order.order2-mempelai');

    }

    // ORDER3-ACARA
    public function acara(){

        return view('order.order3-acara');

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
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
