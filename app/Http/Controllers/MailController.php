<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function contact_us(){
        return view('contact_us');
    }

    public function send_email(Request $request){
        // $contact_mail = [
        //     'name'=> $request->input('name'),
        //     'email'=> $request->input('email'),
        //     'description'=> $request->input('description'),
        // ];
    // ! assegnazione del mass assignment
        Contact::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'description'=> $request->description,
        ]);
        

        return redirect()->back()->with('message', 'La tua richiesta é stata inviata correttamente!');
    }
}
