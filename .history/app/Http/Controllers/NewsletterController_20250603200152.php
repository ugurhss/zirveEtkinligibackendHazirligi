<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterSubscription;

class NewsletterController extends Controller
{
     public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscriptions,email',
            'terms' => 'accepted'
        ]);

        NewsletterSubscription::create([
            'email' => $request->email,
            'approved' => true,
        ]);

        return back()->with('success', 'Abonelik başarıyla gerçekleşti!');
    }

    public function index()
    {
        $aboneler = NewsletterSubscription::all();
        return view('admin.abone.index', compact('aboneler'));
    }
}
