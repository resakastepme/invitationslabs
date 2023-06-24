<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaturan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PengaturanController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $db = Pengaturan::where('id', Auth::user()->id)->first();

        return view('admin.pengaturan.index', [
            'data' => $db
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        if($request->password == ''){

            Pengaturan::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone
            ]);

            return redirect()->route('pengaturan.index')->with('success', 'Berhasil disimpan!');

        }elseif(!$request->password == ''){
            Pengaturan::where('id', $id)->update([
                'name' => $request->name,
                'password' => $request->password,
                'email' => $request->email,
                'phone' => $request->phone
            ]);

            return redirect()->route('pengaturan.index')->with('success', 'Berhasil disimpan!');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
