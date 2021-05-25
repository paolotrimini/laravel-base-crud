<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Ospiti;

    class TestController extends Controller
    {
        public function home(){
            $ospiti = Ospiti::all();
            //dd($ospiti);

            return view('pages.home', compact(
                'ospiti'
            ));
        }

    }
