@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-br from-blue-100 via-purple-100 to-pink-100 py-12">
    <div class="w-full max-w-md bg-white rounded-xl shadow-xl p-8">
        <h2 class="text-2xl font-bold text-blue-700 mb-6 text-center">Prendre la présence</h2>
        <form method="POST" action="{{ route('presence.store') }}" class="space-y-4">
            @csrf
            <div>
                <label for="nom" class="block text-gray-700">Nom</label>
                <input type="text" name="nom" id="nom" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>
            <div>
                <label for="prenom" class="block text-gray-700">Prénom</label>
                <input type="text" name="prenom" id="prenom" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400" required>
            </div>
            <div>
                <label for="date" class="block text-gray-700">Date</label>
                <input type="date" name="date" id="date" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400" required>
            </div>
            <div>
                <label for="statut" class="block text-gray-700">Statut</label>
                <select name="statut" id="statut" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                    <option value="present">Présent</option>
                    <option value="absent">Absent</option>
                </select>
            </div>
            <button type="submit" class="w-full py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">Enregistrer</button>
        </form>
    </div>
</div>
@endsection
