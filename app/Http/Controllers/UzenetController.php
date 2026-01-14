<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class UzenetController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('created_at', 'desc')->get(); // legfrissebb elöl
        return view('uzenetek.index', compact('messages'));
    }
}
