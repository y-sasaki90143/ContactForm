<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('home')->with('contacts',$contacts);
    }

    public function delete(Request $request, $id, Contact $contact)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/home');
 
    }
}
