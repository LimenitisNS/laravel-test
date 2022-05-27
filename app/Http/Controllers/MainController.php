<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MainController
{
    public function main_page() {
        $categories = DB::table('categories')->get();
        $count = DB::table('categories')->count();

        return view('index', [
            "categories" => $categories,
            "count" => $count
        ]);
    }
}
