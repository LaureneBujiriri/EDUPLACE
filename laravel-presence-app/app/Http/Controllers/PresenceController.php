<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presence;
use Illuminate\Support\Facades\Auth;

class PresenceController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'date' => 'required|date',
            'statut' => 'required|in:present,absent',
        ]);

        Presence::create([
            'user_id' => Auth::id(),
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'date' => $request->date,
            'statut' => $request->statut,
        ]);

        return redirect()->back()->with('success', 'Présence enregistrée !');
    }
}
