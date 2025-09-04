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
            'employe' => 'required|exists:users,id',
            'date' => 'required|date',
            'statut' => 'required|in:present,absent',
        ]);

        $user = \App\Models\User::find($request->employe);
        if (!$user) {
            return redirect()->back()->with('error', "L'employé sélectionné n'existe pas.");
        }

        Presence::create([
            'user_id' => $user->id,
            'nom' => $user->name,
            'prenom' => $user->prenom ?? '',
            'date' => $request->date,
            'statut' => $request->statut,
        ]);

        return redirect()->back()->with('success', 'Présence enregistrée !');
    }
}
