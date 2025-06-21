<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000'
        ]);

        // Save to database
        ContactMessage::create($validated);

        // Optional: Send email notification
         Mail::to('admin@futbook9.com')->send(new ContactFormMail($validated));

        return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}