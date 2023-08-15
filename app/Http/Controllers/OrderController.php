<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Tema;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function google(Request $request)
    {
        $data = $request->image;
        $dummy = $request->dummy;
        $fotoSiapa = $request->fotoSiapa;

        $path = public_path('storage/dummy/' . $dummy . '/');
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }


        list($type, $data) = explode(';', $data);
        list(, $data) = explode(',', $data);


        $data = base64_decode($data);
        $image_name = $fotoSiapa . '.png';
        Storage::put('public/dummy/' . $dummy . '/' . $image_name, $data);


        return response()->json(['success' => 'done'])->with('success', $image_name);
    }

    public function cropper(Request $request)
    {

        $path = public_path('storage/images_test/');
        !is_dir($path) &&
            mkdir($path, 0777, true);

        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $image_name = uniqid() . '.png';
        $image_full_path = $path . $image_name;
        file_put_contents($image_full_path, $image_base64);

        return response()->json([
            'success' => 'Image Uploaded Successfully'
        ]);

    }

    public function index($id)
    {
        if (Session::has('tema_order')) {
            $temas = Tema::where('kode_tema', $id)->first();
            return view('beranda.plan.index', [
                'temas' => $temas
            ]);
        } elseif (!Session::has('tema_order')) {

            Session::put('plan_order', $id);
            $temas = Tema::get();
            return view('beranda.tema.index', [
                'temas' => $temas
            ]);

        }
    }

    public function simpan_data_session($identifier)
    {

        switch ($identifier) {
            case 'datauser':
                $datauser = [
                    'domain' => Request('domain'),
                    'email' => Request('email'),
                    'password' => bcrypt(Request('password')),
                    'phone' => Request('phone')
                ];
                Session::put('datauser', $datauser);

            case 'mempelai':
                $datamempelai = [
                    'nama_lengkap_pria' => Request('nama_lengkap_pria'),
                    'nama_panggilan_pria' => Request('nama_panggilan_pria'),
                    'nama_ayah_pria' => Request('nama_ayah_pria'),
                    'nama_ibu_pria' => Request('nama_ibu_pria'),
                    'nama_lengkap_wanita' => Request('nama_lengkap_wanita'),
                    'nama_panggilan_wanita' => Request('nama_panggilan_wanita'),
                    'nama_ayah_wanita' => Request('nama_ayah_wanita'),
                    'nama_ibu_wanita' => Request('nama_ibu_wanita')
                ];
                Session::put('datamempelai', $datamempelai);
        }

    }


    /**
     * Show the form for creating a new resource.
     */

    // ORDER1-DATAUSER
    public function create()
    {
        if (!Session::has('plan_order') || !Session::has('tema_order')) {
            return redirect()->to('/');
        } else {
            if (!Session::has('checkpoint') || Session('checkpoint') <= 1) {
                Session::put('checkpoint', 1);
            }
            return view('order.order1-datauser');
        }
    }

    // ORDER2-Mempelai
    public function mempelai(Request $r)
    {

        if (!Session::has('plan_order') || !Session::has('tema_order')) {
            return redirect()->to('/');
        } else {

            $submit = $r->submit;

            if ($submit != NULL) {
                $cekdomain = Order::where('domain', $r->domain)->count();
                if (!$cekdomain == 0) {
                    return redirect()->to('/new/order/1')
                        ->with('errors', 'Domain sudah dipakai. Silahkan gunakan domain lain!')
                        ->with('domain_old', $r->domain)
                        ->with('email_old', $r->email)
                        ->with('password_old', $r->password)
                        ->with('phone_old', $r->phone);
                    exit();
                }

                $rules = [
                    'domain' => 'required',
                    'email' => 'required',
                    'password' => 'required',
                    'phone' => 'required',
                ];

                $text = [
                    'domain' => 'Silahkan isi domain!',
                    'email' => 'Silahkan isi email!',
                    'password' => 'Silahkan isi password!',
                    'phone' => 'Silahkan isi Nomor HP/Whatsapp!',
                ];

                $validate = Validator::make($r->all(), $rules, $text);

                if ($validate->fails()) {
                    return redirect()->to('/new/order/1')
                        ->with('errors', $validate->errors()->first())
                        ->with('domain_old', $r->domain)
                        ->with('email_old', $r->email)
                        ->with('password_old', $r->password)
                        ->with('phone_old', $r->phone);
                    exit();
                }

                if (isset($r->submit)) {
                    $this->simpan_data_session('datauser');
                }

                //BUAT IDENTITAS DUMMY
                if (!Session::has('dummy')) {
                    $dummy = sha1(Session('datauser')['domain']);
                    Session::put('dummy', $dummy);
                }

                if (Session('checkpoint') <= 2) {
                    Session::put('checkpoint', 2);
                }
            }

            //CHECKPOINT
            if (Session('checkpoint') >= 2) {
                return view('order.order2-mempelai');
            } else {
                return redirect()->to('/new/order/checkpoint');
            }
        }

    }

    // ORDER3-ACARA
    public function acara(Request $r)
    {

        if (!Session::has('plan_order') || !Session::has('tema_order')) {
            return redirect()->to('/');
        } else {

            $submit = $r->submit;

            if ($submit != NULL) {

                $rules = [
                    'nama_lengkap_pria' => 'required',
                    'nama_panggilan_pria' => 'required',
                    'nama_ayah_pria' => 'required',
                    'nama_ibu_pria' => 'required',
                    'nama_lengkap_wanita' => 'required',
                    'nama_panggilan_wanita' => 'required',
                    'nama_ayah_wanita' => 'required',
                    'nama_ibu_wanita' => 'required'
                ];
                $text = [
                    'nama_lengkap_pria' => 'Mohon lengkapi form nya!',
                    'nama_panggilan_pria' => 'Mohon lengkapi form nya!',
                    'nama_ayah_pria' => 'Mohon lengkapi form nya!',
                    'nama_ibu_pria' => 'Mohon lengkapi form nya!',
                    'nama_lengkap_wanita' => 'Mohon lengkapi form nya!',
                    'nama_panggilan_wanita' => 'Mohon lengkapi form nya!',
                    'nama_ayah_wanita' => 'Mohon lengkapi form nya!',
                    'nama_ibu_wanita' => 'Mohon lengkapi form nya!'
                ];
                $validate = Validator::make($r->all(), $rules, $text);
                if ($validate->fails()) {

                    return back()
                            ->with('fail', $validate->errors()->first())
                            ->with('id', $validate->attributes()[0]);
                    exit();

                }
                if (isset($r->submit)) {
                    $this->simpan_data_session('mempelai');
                }
                if (Session('checkpoint') <= 3) {
                    Session::put('checkpoint', 3);
                }
                //CHECKPOINT
                if (Session('checkpoint') >= 3) {
                    return view('order.order3-acara');
                } else {
                    return redirect()->to('/new/order/checkpoint');
                }

            }
        }


    }

    // ORDER4-CERITA
    public function cerita()
    {

        return view('order.order4-cerita');

    }

    // ORDER5-GALLERY
    public function gallery()
    {

        return view('order.order5-gallery');

    }

    // FILEUPLOAD-GALLERY
    public function fileUpload(Request $request)
    {

        $avatar = $request->file('file');
        $generate = sha1('gwdangw');
        $path = 'test/' . $generate;

        // return $avatar;

        // folder e
        if (!file_exists($path)) {
            // mkdir('test/'.$generate, 0777,true);
            // Storage::makeDirectory('test/'.$generate);
            File::makeDirectory('test/' . $generate);
        }

        //generate dan cek nama file
        for ($i = 1; $i <= 10; $i++) {
            $pathName = 'test/' . $generate . '/album' . $i . '.png';
            if (!file_exists($pathName)) {
                $ok = array("no" => $i, "dummy" => $generate);
                $avatar->move(public_path('test/' . $generate), 'album' . $i . '.png');
                echo json_encode($ok);
                break;
            }
        }

    }

    //DEL-GALLERY
    public function del(Request $request)
    {

        $id = $_POST['id'];
        $generate = sha1('gwdangw');
        $file = 'test/' . $generate . '/album' . $id . '.png';
        unlink(public_path($file));
        echo json_encode("sukses");

    }

    //ORDER6-FINISH
    public function finish()
    {
        return view('order.order6-finish');
    }

    //ORDER7-SAVE
    public function save()
    {
        sleep(5);
        Session::flush();
        return view('order.order7-success');
    }

    //CHECKPOINT
    public function checkpoint()
    {
        $checkpoint = Session('checkpoint');
        switch ($checkpoint) {
            case 1:
                return redirect()->to('/new/order/1');
            case 2:
                return redirect()->to('new/order/2');
            case 3:
                return redirect()->to('new/order/3');
            case 4:
                return redirect()->to('new/order/4');
            case 5:
                return redirect()->to('new/order/5');
        }
    }

}
