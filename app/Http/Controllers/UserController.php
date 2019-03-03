<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Document;
use Auth;
use App\User;

class UserController extends Controller
{

    private $rules = [
        'document' => 'required|mimes:docx,doc'
    ];  

    private $messages = [
        'required' => ' fayli boş qoymaq olmaz.',
        'max' => ' çox uzundur.(max:255)',
        'date' => ' tarix olmalıdır.',
        'mimes' => ' format .docx olmalıdır.',
        'integer' => ' rəqəm olmalıdır.'
    ];

    public function myDocuments() 
    {
        $documents = Auth::user()->documents;
        return view('site.user.document.mydocument', [
            'documents' => $documents
        ]);
    }
  
}
