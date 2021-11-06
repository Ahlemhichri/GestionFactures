<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends BaseController
{  


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
        $factures=Facture::latest()->paginate(5);
         return view('factures.index',compact('factures'))->with('i',(request()->input('page',1)-1)*4);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
      return view('factures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'designation' =>'required',
          'description' =>'required',
          'prix_ht' =>'required',
        ]);
         
         
         $facture = new Facture();
         $facture->designation=$request->input('designation');
         $facture->description=$request->input('description');
         $facture->prix_ht=$request->input('prix_ht');
         $facture->prix_ttc=$facture->prix_ht+20*$facture->prix_ht;
         $facture->save();
         return redirect()->route('factures.index')->with('success', ' facture céé avec succés.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Facture $facture)
    {
      
     return view ('factures.show',compact('facture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Facture $facture)
    {
        return view ('factures.edit',compact('facture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Facture $facture)
    {
        $request->validate([
            'designation' =>'required',
          'description' =>'required',
          'prix_ht' =>'required',
          ]);

          $facture->designation=$request->input('designation');
          $facture->description=$request->input('description');
          $facture->prix_ht=$request->input('prix_ht');
          $facture->prix_ttc=$facture->prix_ht+20*$facture->prix_ht;
          $facture->save();
          return redirect()->route('factures.index')->with('success','facture mis a jour avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facture $facture)
    {
        $facture->delete();
       return redirect()->route('factures.index')->with('success','facture supprimée avec success');
    }
}
