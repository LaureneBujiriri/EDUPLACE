<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    @if(session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg shadow text-center">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="mt-8">
                        <h3 class="text-lg font-bold mb-4 text-blue-700">Prendre la présence</h3>
                        <form method="POST" action="{{ route('presence.store') }}" class="space-y-4">
                            @csrf
                            <div>
                                <label for="employe" class="block text-gray-700">Employé</label>
                                <select name="employe" id="employe" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                                    @foreach(App\Models\User::all() as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
                                    @endforeach
                                </select>
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
            </div>
        </div>
    </div>
</x-app-layout>
