<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Document;
use App\Notification;
use Auth;

class DocumentController extends Controller
{

    private $adminName;
    
    private $rules = [
        'document' => 'required|mimes:docx,doc'
    ];  
    public $data = [

    ];

    private $messages = [
        'required' => ' fayli boş qoymaq olmaz.',
        'max' => ' çox uzundur.(max:255)',
        'date' => ' tarix olmalıdır.',
        'mimes' => ' format .docx olmalıdır.',
        'integer' => ' rəqəm olmalıdır.'
    ];


    public function __construct() {
        $this->adminName = $this->getAdminNameAndSurname();
        $this->data = [
            'admin' => [
                'adminName' => $this->adminName
            ]
        ];
        $this->middleware('admin')->except(['store', 'show']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.documents.index')
            ->with(['data' => $this->data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules, $this->messages);
        if($validator->fails()){
            return redirect()->route('home')
                ->withErrors($validator)
                ->withInput();
        }

        
        $document = new Document();
        $source = Document::upload($request);
        $document->source = $source;
        $document->user_id = Auth::user()->id;
        if($document->save()){
            $notification = new Notification();
            $notification->user_id = Auth::user()->id;
            $notification->notification_type = 1;
            $notification->save();
            Session::flash('document', 'success');
        }else{
            Session::flash('document', 'fail');
        }
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //api 

    public function apiIndex() 
    {
        $documents = Document::with(['user'])
                    ->orderBy('id', 'desc')
                    ->paginate(7);
        return response()->json($documents, 200);
    }

    public function apiUpdate($id,Request $request) 
    {   
        $document = Document::with(['user'])->find($id);
        if($document) { 
        
            if($request->has('status')) {
                $document->status = $request->get('status');
                $document->save();
            }
            return response()->json([
                'message' => 'succes'
            ], 200);
        }

        return response()->json([
            'message' => 'Not found'
        ], 404);

    }

    public function apiDelete($id) 
    {
        $document = Document::find($id);
        if($document) {
            $document->deleteFile();
            $document->delete();
            return response()->json([
                'message' => 'succes'
            ], 200);
        }
        return response()->json([
            'message' => 'Not found'
        ], 404);
    }

}