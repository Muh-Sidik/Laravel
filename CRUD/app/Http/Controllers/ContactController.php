<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function list()
    {
        $data = Contact::paginatio(5);
        // $data2 = Contact::find($id);
        return view('contacts.contact', compact('data'));
    }

    public function sign()
    {
        return view('contasts.sign');
    }

    public function create(Request $request)
    {
        $contact = new Contact();
        $contact->name_contact = $request->input('nama');
        $contact->email = $request->input('email');
        $contact->address = $request->input('alamat');

        if($contact->save()) {
            return redirect('/list');
        }

        return redirect()->back();
    }

    public function delete($id)
    {
        $contact = Contact::find($id);
        if($contact->delete()) {
            return redirect()->back();
        }
        return;
    }

    public function update($id)
    {
        $contactData = Contact::find($id);
        return view('contacts.update', compact('contactData'));
    }

    public function edit(Request $request)
    {
        $contact = Contact::find($request->input('id'));
        $contact->name_contact = $request->input('nama');
        $contact->email = $request->input('email');
        $contact->address = $request->input('alamat');

        if($contact->save()) {
            return redirect('/list');
        }

        return;
    }


}