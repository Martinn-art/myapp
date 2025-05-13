<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)
{
    // Pokud robot vyplnil honeypot pole, odmítneme požadavek
    if (!empty($request->input('website'))) {
        abort(403, 'Záznam zablokován – pravděpodobně robot.');
    }

    // Validace "normálních" polí
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
    ]);

    // Uložení do databáze nebo další logika
    // Example: Contact::create($validated);

    return back()->with('success', 'Formulář byl úspěšně odeslán.');
}

}
