<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index() {
        $users = DB::table('pages')->select('text')->get();

        return view('index')->with('loremipsum', $users);
    }

    public function contact() {
        return view('pages.contact');
    }

    public function agenda() {
        return view('pages.agenda');
    }

    public function activiteiten() {
        return view('pages.activiteiten');
    }

    public function bijenstal() {
        return view('pages.bijenstal');
    }

    public function cursussen() {
        return view('pages.cursussen');
    }

    public function foto() {
        return view('pages.foto');
    }

    public function nieuws() {
        return view('pages.nieuws');
    }

    public function stertselaar() {
        return view('pages.stertselaar');
    }
    public function vereniging() {
        return view('pages.vereniging');
    }

    public function winkel() {
        return view('pages.winkel');
    }

    public function zwermgezien() {
        return view('pages.zwermgezien');
    }
}
