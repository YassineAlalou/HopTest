<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Validation\contactsValidator;
use App\Http\Validation\ContactValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class contactController extends Controller
{
    public function get_ListeDesContacts()
    {
        $contacts = Contact::all();
        return view('contacts/listeDesContacts', compact('contacts'));
    }

    public function show_DetailsContact($id)
    {
        $contact = Contact::find($id);
        return view('contacts/modifierContact', compact('contact'));
    }

    public function delete_Contact($id)
    {
        $contact = Contact::find($id);
        if ($contact) {$contact->delete();}
    }

    public function find_by_id($id)
    {
        $contact = Contact::find($id);
    }

    public function edit_Contact(request $request, contactsValidator $validation, $id)
    {
        $validator = Validator::make($request->all(), $validation->rules(), $validation->messages());
        $contact = Contact::find($id);

        if ($validator->fails()) {return view('contacts/modifierContact', compact('contact'));}

        $contact->nom               = $request->nom;
        $contact->prenom            = $request->prenom;
        $contact->fonction          = $request->fonction;
        $contact->service           = $request->service;
        $contact->date_de_naissance = date("Y-m-d", strtotime($request->datedenaissance));
        $contact->email             = $request->email;
        $contact->tel               = $request->tel;
        $contact->nom_societe       = $request->nomsociete;
        $contact->adresse           = $request->adresse;
        $contact->ville             = $request->ville;
        $contact->code_postal       = $request->cp;
        $contact->site_web          = $request->siteweb;

        $contact->save();
        $contacts = Contact::all();
        return view('contacts/listeDesContacts', compact('contacts'));
    }

}
