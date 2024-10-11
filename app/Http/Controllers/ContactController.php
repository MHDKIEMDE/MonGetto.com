<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{



    public function dashboardReview()
    {
        $contacts = Contact::paginate(10);

        return view('dashboard.dashboard_Review',compact('contacts'));
    }



    public function edit()
    {
        $contacts = Contact::paginate(10);

        return view('dashboard.', compact('contacts'));
    }


    public function create()
    {
        return view('contact.create');
    }
    public function store(ContactRequest $request)
    {
        $contact = new Contact();
        $contact->user_id = null;
        $contact->name = $request->input('name');
        $contact->last_name = $request->input('last_name');
        $contact->email = $request->input('email');
        $contact->number = $request->input('number');
        $contact->message = $request->input('message');
        $contact->save();

        return redirect()->back();
    }

    public function show(string $blog)
    {
        $contact = Contact::findOrFail($blog);

        return view('dashboard.contact.show', compact('contacts'));
    }


    public function destroy($id)
    {
        $contacts = Contact::findOrFail($id);
        $contacts->delete();

        return redirect()->back()->with('success', 'Message supprimés avec succès!');
    }
}
