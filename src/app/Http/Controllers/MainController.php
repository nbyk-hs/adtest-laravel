<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class MainController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function confirm(ContactRequest $request){

        $contact = $request->only(['last-name', 'first-name'])

        return view('confirm', compact('contact'));
    }
}
