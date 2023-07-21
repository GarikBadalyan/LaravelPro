<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

    return redirect()->route('home')->with('success' ,'сообщение было добавлено');
//dd($request);/
//dd($request->input('name'));
    }

    public function allData()
    {
       $contact = Contact::all();
//        dd($contact);
//        return view('messages',['data' => $contact->where("name", '=', "Narek")->get()]);
        return view('messages',['data' => Contact::all()]);
    }

    public function showOneMessage($id)
    {
        $contact = Contact::all();
        return view('one-messages',['data' => $contact ->find($id)]);
    }

    public function updateMessage($id)
    {
        $contact = Contact::all();
        return view('update-messages',['data' => $contact ->find($id)]);
    }

}
