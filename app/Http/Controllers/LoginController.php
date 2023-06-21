<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login.index');
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
        $email = $request->email;
        $password = $request->password;

        if (!$email && !$password) {
            return redirect()->to('login')->with([
                'email' => 'Email tidak boleh kosong!',
                'password' => 'Password tidak boleh kosong!'
            ]);
        } elseif (!$email) {
            return redirect()->to('login')->with([
                'email' => 'Email tidak boleh kosong!'
            ]);
        } elseif (!$password) {
            return redirect()->to('login')->with([
                'password' => 'Password tidak boleh kosong!',
                'email_value' => $email
            ]);
        } else {

            $q = User::where('email', $email)->first();

            if (!$q) {
                return redirect()->to('login')->with([
                    'error' => 'Email atau Password salah!',
                    'email_value' => $email
                ]);
            } else {

                if ($q && !$q['password'] == $password) {
                    return redirect()->to('login')->with([
                        'error' => 'Email atau Password salah!',
                        'email_value' => $email
                    ]);
                } else {
                    Auth::login($q);
                    $request->session()->put('attempt', time());
                    return redirect()->to('admin');
                }

            }
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
