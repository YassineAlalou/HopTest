<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function get_ListeDesContacts()
    {
        return view('contacts/listeDesContacts');
    }

    public function show_DetailsContact()
    {
        return view('contacts/modifierContact');
    }
}
