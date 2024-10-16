<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        $title = 'Trang lien he chung toi';
        return view('contact.contact', compact('title'));
    }

    public function submit(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required',
        ]);
        return redirect()->route('contact.index')->with('success', 'Cảm ơn bạn đã liên hệ với chúng tôi!, Chúng tôi sẽ liên hệ bạn sớm nhất');

    }

}
