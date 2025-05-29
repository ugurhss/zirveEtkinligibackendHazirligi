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
        return redirect()->route('admin.messages.index')
                         ->with('success', 'Mesaj başarıyla silindi.');
    }
}
