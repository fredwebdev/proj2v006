<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Evenement;

use Session;
class EvenementAdminController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $evenements = Evenement::get();
        return view('Admin.Evenement.index', ['evenements'=>$evenements]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Evenement.create');
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
        $article = Evenement::create($request->all());
        // on renvoie vers la page admin
        return redirect(route('evenements.index'));
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
        $evenement = Evenement::findOrFail($id);
        return view('Admin.Evenement.edit', ['evenement'=>$evenement]);
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
        $evenement = Evenement::findOrFail($id);
        $evenement->update($request->all());

        Session::flash('flash_message', "l'article bien été modifié");

        return redirect(route('evenements.index', $id));
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
        $evenement = Evenement::findOrFail($id);
        $evenement->delete();

        Session::flash('flash_message', "l'article bien été supprimé");

        return redirect(route('evenements.index'));
    }
}
