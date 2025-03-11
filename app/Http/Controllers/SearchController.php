<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function searchByName()
    {
        $response = Http::get('https://bit.ly/48ejMhW');
        $data = $response->json();
        
        $result = array_filter($data, function($item) {
            return isset($item['name']) && $item['name'] === 'Turner Mia';
        });

        return response()->json($result);
    }

    public function searchByNim()
    {
        $response = Http::get('https://bit.ly/48ejMhW');
        $data = $response->json();
        
        $result = array_filter($data, function($item) {
            return isset($item['nim']) && $item['nim'] === '9352078461';
        });

        return response()->json($result);
    }

    public function searchByYmd()
    {
        $response = Http::get('https://bit.ly/48ejMhW');
        $data = $response->json();
        
        $result = array_filter($data, function($item) {
            return isset($item['ymd']) && $item['ymd'] === '20230405';
        });

        return response()->json($result);
    }
}