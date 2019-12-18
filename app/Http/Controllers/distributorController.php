<?php

namespace App\Http\Controllers;

use App\distributor;
use Illuminate\Http\Request;

class distributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distributors = distributor::latest()->paginate(5);
  
        return view('distributor.index',compact('distributors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('distributor.create');
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
            'id_distributor' => 'required',
            'distributor' => 'required',
        ]);
  
        distributor::create($request->all());
   
        return redirect()->route('distributor.index')
                        ->with('success','distributor created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function show(distributor $distributor)
    {
        return view('distributor.show',compact('distributor'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function edit(distributor $distributor)
    {
        return view('distributor.edit',compact('distributor'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, distributor $distributor)
    {
        $request->validate([
            'id_distributor' => 'required',
            'distributor' => 'required',
        ]);
  
        $distributor->update($request->all());
  
        return redirect()->route('distributor.index')
                        ->with('success','distributor updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function destroy(distributor $distributor)
    {
        $distributor->delete();
  
        return redirect()->route('distributor.index')
                        ->with('success','distributor deleted successfully');    
    }
}