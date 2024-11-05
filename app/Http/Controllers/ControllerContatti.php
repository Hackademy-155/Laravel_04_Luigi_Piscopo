<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ControllerContatti extends Controller
{
        public function contatti(){
           return view('contatti');
            
        }


        public function invio(Request $request){
             $contattoMail = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'descrizione' => $request->input('descrizione'),
             ];

             Mail::to('TheNumberOne@hotmail.it')->send(new AdminMail($contattoMail));

             return redirect()->back()->with('message', 'Il messaggio e stato inviato corretamente');
        }
}
