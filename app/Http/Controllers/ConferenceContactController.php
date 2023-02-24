<?php

namespace App\Http\Controllers;

use App\Models\ConferenceContact;
use Illuminate\Http\Request;

class ConferenceContactController extends Controller
{
    public function tmac_contact(Request $request) {
        try {
            $data = [
                "full_name" => $request->input("full_name"),
                "email" => $request->input("email"),
                "phone" => $request->input("phone"),
                "type" => $request->input("type"),
            ];
            ConferenceContact::create($data);
            return response()->json([
                'success' => true
            ], 200);
        }catch (\Exception $e){
            return response()->json([
                'success' => false
            ], 400);
        }

    }
}
