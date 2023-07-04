<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Tema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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

    // ORDER4-CERITA
    public function cerita(){

        return view('order.order4-cerita');

    }

    // ORDER5-GALLERY
    public function gallery(){

        return view('order.order5-gallery');

    }

    // FILEUPLOAD-GALLERY
    public function fileUpload(Request $request){

        $avatar = $request->file('file');
        $generate = sha1('gwdangw');
        $path = 'test/'.$generate;

        // return $avatar;

        // folder e
        if(!file_exists($path)){
        	// mkdir('test/'.$generate, 0777,true);
            // Storage::makeDirectory('test/'.$generate);
            File::makeDirectory('test/'.$generate);
        }

        //generate dan cek nama file
        for($i=1;$i<=10;$i++){
        	$pathName = 'test/'.$generate.'/album'.$i.'.png';
        	if(!file_exists($pathName)){
        		$ok = array("no"=>$i,"dummy"=>$generate);
        		$avatar->move(public_path('test/'.$generate),'album'.$i.'.png');
        		echo json_encode($ok);
        		break;
        	}
        }

    }

    //DEL-GALLERY
    public function del(Request $request){

        $id = $_POST['id'];
        $generate = sha1('gwdangw');
        $file = 'test/'.$generate.'/album'.$id.'.png';
        unlink(public_path($file));
        echo json_encode("sukses");

    }

    //ORDER6-FINISH
    public function finish(){
        return view('order.order6-finish');
    }

    //ORDER7-SAVE
    public function save(){
        sleep(5);
        return view('order.order7-success');
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
