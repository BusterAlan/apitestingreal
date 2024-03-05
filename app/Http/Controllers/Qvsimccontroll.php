<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Qvsimccontroll extends Controller {

    public function other(Request $request) {

        $data = $request->json()->all();

        $gender = $data['gender'];
        $user = $data['user'];
        $peso = $data['peso'];
        $altura = $data['altura'];
        $cintura = $data['cintura'];

        DB::insert('insert into imcdatavalues (gender, user, peso, altura, cintura) values (?, ?, ?, ?, ?)', [$gender, $user, $peso, $altura, $cintura]);

        return response()->json(

            [
                'message' => 'Data stored successfully',

            ],

            201

        );

    }

}

