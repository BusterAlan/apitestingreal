<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Qvshealthstate extends Controller {

    public function mine(Request $request) {

        $data = $request->json()->all();

        $gender = $data['gender'];
        $user = $data['user'];
        $aPsiastolic = $data['aPsiastolic'];
        $aPdiastolic = $data['aPdiastolic'];
        $glucose = $data['glucose'];
        $ColesterolT = $data['ColesterolT'];
        $HDL = $data['HDL'];
        $LDL = $data['LDL'];
        $Trigliceridos = $data['Trigliceridos'];

        DB::insert('insert into healthstatetable (gender, user, aPsiastolic, aPdiastolic, glucose, ColesterolT, HDL, LDL, Trigliceridos) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [$gender, $user, $aPsiastolic, $aPdiastolic, $glucose, $ColesterolT, $HDL, $LDL, $Trigliceridos]);

        return response()->json(

            [
                'message' => 'Data stored successfully',

            ],

            201

        );

    }

}

