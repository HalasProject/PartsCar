<?php

namespace App\Http\Controllers;

use App\command as command;
use Illuminate\Http\Request;

class CommandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $newCommand = new command();
        $newCommand->nom = $request->nom;
        $newCommand->email = $request->email;
        $newCommand->numero = $request->numero;
        $newCommand->marque = $request->marque;
        $newCommand->modele = $request->modele;
        $newCommand->vif = $request->vif;
        $newCommand->year = $request->year;
        $newCommand->pays = $request->pays;
        $newCommand->ville = $request->ville;
        $newCommand->message = $request->message;

        if( $newCommand->save()){
            return response('created !');
        }
        else{
            return response('problem !');
        }
       
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\command  $command
     * @return \Illuminate\Http\Response
     */
    public function show(command $command)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\command  $command
     * @return \Illuminate\Http\Response
     */
    public function edit(command $command)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\command  $command
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, command $command)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\command  $command
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteme = command::findOrFail($id);
        $deleteme->delete();
        return response('good');
       
    }
}
