<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ProfileController extends Controller
{
    
    public function searchMentor()
    {
        try {
            $newPage = 1;
            $jsonData = [
                'rq' => [
                    'page' => $newPage,
                    'pageSize' => 4
                ]
            ];                          
           
            // Send POST request to the API
            $response = Http::post('https://be.youth.com.vn/mentor/SearchMentor',
                    $jsonData
                );
            
            if ($response->successful()) {
                // Process the response data
                $data = $response->json();
                // dd($data['data']);
                return view('homepage', compact('data'));
            } else {
                // If the request failed, return an error message
                return response()->json(['error' => 'API request failed'], $response->status());
            }
        } catch (\Exception $e) {
            // Handle exceptions
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
