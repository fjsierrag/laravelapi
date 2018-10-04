<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Entities\Producto;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    public function home(){
        return view('main.home');
    }

    public function productos()
    {
        $data=["productos"=>Producto::all()];
        return view('main.productos',$data);
    }
    public function productosCrear()
    {
        Producto::create(['nombre'=>'producto']);
        $data=["productos"=>Producto::all()];
        return view('main.productos',$data);
    }

    public function customers()
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://google.com/api/',
        ]);
        $request=$client->request('GET', 'orders', [
            'headers' => [
                'Accept'     => 'application/json',
                'Authorization'      => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbGFyYXZlbGFwaS50ZXN0L2FwaS9sb2dpbiIsImlhdCI6MTUzNzEzNjEyNywiZXhwIjoxNTM3MTM5NzI3LCJuYmYiOjE1MzcxMzYxMjcsImp0aSI6InphVm00MUd4dFQ5SUxxVk0iLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.80qQCYMZbOhyAwHHHRKUnWVUV26o4zbCzIz026fUdzc'
            ]
        ]);
        $response=$client->send($request);
        $body = $response->getBody();
// Implicitly cast the body to a string and echo it
        echo $body;
        //return view('main.productos',$data);
    }

    public function dbdemo()
    {
        return DB::table("Orders as o")->select("o.ShippedDate")->get();
    }

}
