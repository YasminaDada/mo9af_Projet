<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BricolageController extends Controller
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
        return view('bricolage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //Validation rules
         $request->validate([
            'CIN'=>'required',
            'Nom_employe'=>'required',
            'Prenom_employe'=>'required',
            'Numero_Tel'=>'required',
            'categorie'=>'required',
            'Adresse'=>'required',
            'file' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx,png,jpeg,jpg,pjp,jfif,pjpeg,pjp,ppt,pptx',
        ]);
        //Reserver pour le fichier et sonn  nom
        $name = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->store('public/files');

        $bricolage = new Bricolage();
        $bricolage->CIN = $request->input('CIN');
        $bricolage->Nom_employe = $request->input('Nom_employe');
        $bricolage->Prenom_employe = $request->input('SPrenom_employe');
        $bricolage->Numero_Tel = $request->input('Numero_Tel');
        $bricolage->categorie = $request->input('categorie');
        $bricolage->SousCategorie = $request->input('SousCategorie');
        $bricolage->Email = $request->input('Email');
        $bricolage->Adresse= $request->input('Adresse');
        $bricolage->name = $name;
        $bricolage->path = $path;
        $bricolage->save();
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
}
