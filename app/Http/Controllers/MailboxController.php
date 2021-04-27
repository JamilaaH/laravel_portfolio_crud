<?php

namespace App\Http\Controllers;

use App\Models\Mailbox;
use Illuminate\Http\Request;

class MailboxController extends Controller
{
    public function index(){
        $mails = Mailbox::all();
        return view('backoffice.email.indexMail', compact('mails'));
    }
    public function store(Request $request){
        request()->validate([
            "nom" => ["required"],
            "mail" => ["required", "email"],
            "sujet" => ["required"],
            "message" => ["required"],
            ]);

        $mail = new Mailbox();
        $mail->nom = $request->nom;
        $mail->mail = $request->mail;
        $mail->sujet = $request->sujet;
        $mail->message = $request->message;
        $mail->save();
        return redirect('/#contact')->with('success', 'Message bien envoyé');
    }

    public function destroy(Mailbox $id){
        $id->delete();
        return redirect()->route('mail.index');
    }
}
