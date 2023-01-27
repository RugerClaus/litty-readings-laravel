<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function update(Request $request) 
    {
        DB::table('home_page')->update([
            "introblurb" => $request->blurb
        ]);

    }
}
