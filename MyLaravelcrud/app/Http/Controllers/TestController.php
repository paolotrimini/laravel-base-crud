<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Ospite;

    class TestController extends Controller
    {
        public function home(){
            $ospiti = Ospite::all();
            //dd($ospiti);

            return view('pages.home', compact(
                'ospiti'
            ));
        }

        public function ospite($id){

            $ospite = Ospite::findOrFail($id);

            return view('pages.ospite', compact(
                'ospite'
            ));
        }

        public function create(){

            return view ('pages.create');
        }

        public function store(Request $request){

            $validate = $request -> validate([
                'name' => 'nullable|max:255',
                'lastname' => 'nullable|max:255',

            ]);

            $ospite = Ospite::create($validate);
            dd($ospite);
        }

    }
