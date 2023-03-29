<?php

namespace App\Http\Controllers;

use App\Models\QReistration;
use Illuminate\Http\Request;

class QReistrationController extends Controller
{
    public function registration(Request $request) {
        try {
            $exists = QReistration::query()
                ->where("email", $request->input("email"))
                ->orWhere("phone", $request->input("phone"))
                ->first();
            if($exists == null){
                QReistration::create($request->all());
                return response()->json([
                    "success" => true,
                    "ar_message" => "تم التسجيل بنجاح",
                    "fr_message" => "Inscription réussie",
                    "en_message" => "Registration success",
                ]);
            }else{
                return response()->json([
                    "success" => false,
                    "ar_message" => "تم التسجيل بالفعل",
                    "fr_message" => "Inscription déja fait",
                    "en_message" => "Registration already done",
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                "success" => false,
                "ar_message" => "فشلت العلية",
                "fr_message" => "Inscription échoue",
                "en_message" => "Registration failed",
                "message" => $e->getMessage()
            ], 400);
        }
    }
}
