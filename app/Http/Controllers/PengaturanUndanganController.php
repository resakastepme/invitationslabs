<?php

namespace App\Http\Controllers;

use App\Models\PengaturanUndangan;
use App\Models\Order;
use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengaturanUndanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::where('id_user', Auth::user()->id)->first(); //get orders.domain based from auth id
        $datas = Data::where('id_user', Auth::user()->id)->first(); //get data from datas table based from auth id
        return view('admin.pengaturanundangan.index', [
            'orders' => $orders,
            'datas' => $datas
        ]);
    }

    public function simpanDomain(Request $request){
        $orders = Order::where('id_user', Auth::user()->id)->first(); //get orders.domain
        if($request->domain == $orders->domain){
            // return view('admin.pengaturanundangan.index', [
            //     'domain.nothingchange' => 'Tidak ada perubahan domain!'
            // ]);
            return redirect()->route('pengaturan-undangan.index')->with('domain.nothingchange', 'Tidak ada perubahan domain!');
        }elseif($request->domain == ""){
            return redirect()->route('pengaturan-undangan.index')->with('domain.empty', 'domain tidak boleh kosong!');
        }else{
            $q = Order::where('id_user', Auth::user()->id)->update([
                'domain' => $request->domain
            ]);
            return redirect()->route('pengaturan-undangan.index')->with('domain.changedsuccessfully', 'domain berhasil diubah!');
        }
    }

    public function salamPembukaSubmit(Request $request){
        $q = Data::where('id_user', Auth::user()->id)->update([
            'salam_pembuka' => $request->salam_pembuka,
            'wa_atas' => $request->wa_atas,
            'wa_bawah' => $request->wa_bawah
        ]);
        return redirect()->to('/admin/pengaturan-undangan/')->with('greetings.successfully', 'Berhasil ditambahkan!');
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
    public function show(PengaturanUndangan $pengaturanUndangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PengaturanUndangan $pengaturanUndangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PengaturanUndangan $pengaturanUndangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PengaturanUndangan $pengaturanUndangan)
    {
        //
    }
}
