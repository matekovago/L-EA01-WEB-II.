<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class KapcsolatController extends Controller
{
    public function showForm()
    {
        return view('kapcsolat');
    }

    public function sendMessage(Request $request)
    {
        // validáció
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string|min:10|max:2000',
        ]);

        // mentés adatbázisba
        Message::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'message' => $request->message,
        ]);

        // visszajelzés
        return redirect()->back()->with('success', 'Üzenetedet sikeresen elküldtük!');
    }
}
