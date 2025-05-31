<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
     public function create()
    {
        return view('participants.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'age' => 'required|integer|min:1',
            'gender' => 'required|string|in:male,female,other',
        ]);

        $participant = new Participant($validated);
        $participant->ip_address = $request->ip();
        $participant->save();

        return redirect()->route('participants.create')
            ->with('success', 'Kaydınız başarıyla alındı!');
    }
}
