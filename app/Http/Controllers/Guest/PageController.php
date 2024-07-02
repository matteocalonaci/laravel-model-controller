<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guest;
use App\Models\Staff;

class PageController extends Controller
{
    public function home(){
        // variabile d'appoggio
        $guests = Guest::all();

        $dati = [
            "store" => config("data"),
            "guests" => $guests
        ];
        return view('home', $dati);
    }

    public function staff(){
        // variabile d'appoggio
        $staff = Staff::all();
        
        $dati = [
            "store" => config("data"),
            "staff" => $staff
        ];
        return view('staff', $dati);
    }
}
