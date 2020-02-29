<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Province;
use app\Http\Requests;
use GuzzleHttp\Client;

class ProvinceController extends Controller
{
    public function APIsProvinceGet()
    {
    	$client = new Client();

        $response = $client->request('GET', 'https://api.rajaongkir.com/starter/province?key=0df6d5bf733214af6c6644eb8717c92c');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        // return $body;
        $data = json_decode($body,true);
        $events = $data['rajaongkir'];
        $item=$events['results'];
        // return $item;
        foreach($item as $items)
        {
            $values = new Province();
            $values->province_id = $items['province_id'];
            $values->province= $items['province'];
            $values->save();
        }
        return 'DATA PROVINCE BERHASIH DI TAMBAHKAN';
    }

    public function Province(Province $item){
        $items = $item->all();
        return response()->json($items);
    }

    public function ProvinceBy(Province $item,$id){
        $items = $item::where('province_id', '=', $id)->first();
        return response()->json($items);
    }
}
