<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        \App\Models\Contact::create($validated);

        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }

    public function index()
    {
        $messages = \App\Models\Contact::latest()->paginate(10);
        return view('admin.messages.index', compact('messages'));
    }

    public function show(\App\Models\Contact $contact)
    {
        return view('admin.messages.show', ['message' => $contact]);
    }
}