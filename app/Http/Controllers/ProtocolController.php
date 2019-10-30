<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateCreateForm;
use App\Mail\ProtocolMail;
use App\Protocol;

class ProtocolController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $protocols = Protocol::all();
        return view('home', compact('protocols'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('protokolle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidateCreateForm $request)
    {
        $data = $request->validated();
        $protocol = new Protocol();
        $protocol->title = $data['title'];
        $protocol->category = $data['category'];
        $protocol->body = $data['body'];
        $protocol->save();

        Mail::to('smilie79@web.de')->send(new ProtocolMail($data));

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Protocol $protocol)
    {
        return view('protokolle.show', compact('protocol'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Protocol $protocol)
    {
        return view('protokolle.edit', compact('protocol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Protocol $protocol, ValidateCreateForm $request)
    {
        $data = $request->validated();
        $protocol->update([
            'title' => $data['title'],
            'category' => $data['category'],
            'body' => $data['body']
        ]);
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Protocol $protocol)
    {
        $protocol->delete();
        return redirect('home');
    }
}
