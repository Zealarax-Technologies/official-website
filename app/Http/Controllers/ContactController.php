<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function store(ContactRequest $request)
    {
        $contact = Contact::create($request->all());
    }

    public function update(BlogRequest $request, $id)
    {
        $contact = Contact::find($id);
        $contact->service_id = $request->service_id;
        $contact->referer = $request->referer;
        $contact->fullname = $request->fullname;
        $contact->company = $request->company;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->about = $request->about;
        $contact->save();
    }

    public function delete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
    }
}
