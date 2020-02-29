<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\City;
use app\Http\Requests;
use GuzzleHttp\Client;

class CityController extends Controller
{
    public function APIsCityGet()
    {
    	$client = new Client();

        $response = $client->request('GET', 'https://api.rajaongkir.com/starter/city?key=0df6d5bf733214af6c6644eb8717c92c');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        // return $body;
        $data = json_decode($body,true);
        $events = $data['rajaongkir'];
        $item=$events['results'];
        // return $item;
        foreach($item as $items)
        {
            $values = new City();
            $values->city_id = $items['city_id'];
            $values->province_id= $items['province_id'];
            $values->province = $items['province'];
            $values->type= $items['type'];
            $values->city_name = $items['city_name'];
            $values->postal_code= $items['postal_code'];
            $values->save();
        }
        return 'DATA CITY BERHASIH DI TAMBAHKAN';
    }

    public function City(City $item){
        $items = $item->all();
        return response()->json($items);
    }

    public function CityBy(City $item,$id){
        $items = $item::where('city_id', '=', $id)->first();
        return response()->json($items);
    }
}
