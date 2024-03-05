<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Qvsapireq extends Controller {

    public function store(Request $request) {

        $data = $request->json()->all();

        $username = $data['username'];
        $testnumber = $data['testnumber'];
        $testresult = $data['testresult'];

        DB::insert('insert into testdata (username, testnumber, testresult) values (?, ?, ?)', [$username, $testnumber, $testresult]);

        return response()->json(

            [
                'message' => 'Data stored successfully',

            ],

            201

        );

    }

}

