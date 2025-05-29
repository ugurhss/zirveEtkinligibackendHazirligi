<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
 public function index()
{
    $search = request('search');

    $messages = Message::when($search, function($query) use ($search) {
                    $query->where('name', 'like', "%$search%")
                          ->orWhere('email', 'like', "%$search%")
                          ->orWhere('subject', 'like', "%$search%")
                          ->orWhere('message', 'like', "%$search%");
                })
                ->orderBy('created_at', 'desc')
                ->paginate(10);

    return view('admin.pages.contact.contact', compact('messages'));
}

    public function show(Message $message)
    {
        // Mesajı okundu olarak işaretle
        if(!$message->is_read) {
            $message->update(['is_read' => true]);
        }

        return view('admin.pages.contact.show', compact('message'));
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('admin.contact.index')
                         ->with('success', 'Mesaj başarıyla silindi.');
    }

     public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Message::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Mesajınız başarıyla gönderildi.');
    }

    public function showForm()
{
    return view('pages.contact');
}

}
