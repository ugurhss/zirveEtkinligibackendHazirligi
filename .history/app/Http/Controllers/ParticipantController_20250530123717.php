<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
public function index()
    {
        $search = request('search');

        $participants = Participant::when($search, function($query) use ($search) {
            return $query->where('full_name', 'like', '%'.$search.'%')
                        ->orWhere('email', 'like', '%'.$search.'%')
                        ->orWhere('phone', 'like', '%'.$search.'%');
        })
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        return view('admin.participants.index', compact('participants'));
    }

    public function show(Participant $participant)
    {
        return view('admin.participants.show', compact('participant'));
    }

    public function destroy(Participant $participant)
    {
        $participant->delete();
        return redirect()->route('admin.participants.index')
            ->with('success', 'Katılımcı başarıyla silindi');
    }


     public function create()
    {
        return view('pages.participant');
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
