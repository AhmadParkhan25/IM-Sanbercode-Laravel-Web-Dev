<?php

namespace App\Http\Controllers;

class TableControl extends Controller
{
    public function table(){
        return view('table');
    }

    public function dataTables(){
        return view('data-tables');
    }
}
