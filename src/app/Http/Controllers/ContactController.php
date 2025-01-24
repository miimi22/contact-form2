<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;

class ContactController extends Controller
{
    public function index()
    {

        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel', 'address', 'building', 'kinds', 'detail']);
        return view('confirm', compact('contact'));
    }

    public function thanks(Request $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel', 'address', 'building', 'kinds', 'detail']);
        Contact::create($contact);
        return view('thanks');
    }

    public function admin(Request $request)
    {
        $contacts = Contact::Paginate(7);
        return view('admin', ['contacts' => $contacts]);
    }

    public function register()
    {
        return view('register');
    }

    public function login(RegisterRequest $request)
    {
        $user = $request->only(['name', 'email', 'password']);
        User::create($user);
        return view('login');
    }

    public function search(Request $request)
    {
        $contacts = Contact::with('keyword')->KeywordSearch($request->keyword)->GenderSearch($request->gender)->KindsSearch($request->kinds)->DateSearch($request->date)->get();
        $keywords = Keyword::all();

        return view('admin', compact('contacts', 'keywords'));
    }
}
