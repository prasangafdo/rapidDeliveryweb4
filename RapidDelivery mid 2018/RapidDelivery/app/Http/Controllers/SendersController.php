<?php

namespace RapidDelivery\Http\Controllers;

use RapidDelivery\Sender;
use Illuminate\Http\Request;

class SendersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //print("Sender. But neet to add views");
        $sender =Sender::all();
        return view('senders.index', ['senders'=>$sender]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \RapidDelivery\Sender  $sender
     * @return \Illuminate\Http\Response
     */
    public function show(Sender $sender)
    {
        $dd= Sender::find($sender->id);//Check the migration
        return view('senders.show', ['sender'=>$dd]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \RapidDelivery\Sender  $sender
     * @return \Illuminate\Http\Response
     */
    public function edit(Sender $sender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \RapidDelivery\Sender  $sender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sender $sender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \RapidDelivery\Sender  $sender
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sender $sender)
    {
        //
    }
}
