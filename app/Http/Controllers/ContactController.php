<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1. Validation des données
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        // 2. Envoi du mail
        Mail::to('c18755789@gmail.com')->send(new ContactMessage($validated));

        // 3. Retour vers la page avec un message de succès
        return redirect()->to(url()->previous() . '#contact')->with('success', 'Votre message a bien été envoyé !');
    }
}

