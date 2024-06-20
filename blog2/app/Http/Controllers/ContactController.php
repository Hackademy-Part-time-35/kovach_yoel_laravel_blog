<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{   

    public function contatti()
    {
        return view('contatti');
    }


    public function invia(Request $request)
    {
        $mail = new \App\Mail\richiesta($request->name, $request->email, $request->message);

        Mail::to('admin@example.com')->send($mail);

        return redirect()->back()->with(['success' => 'Form inviato correttamente.']);
    }
}