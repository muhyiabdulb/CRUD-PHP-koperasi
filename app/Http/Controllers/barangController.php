<?php

namespace App\Http\Controllers;
use DB;
use App\barang;
use App\distributor;
use Illuminate\Http\Request;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = barang::latest()->paginate(5);
        $distributor=DB::table("view_barangs")->get();
  
        return view('barang.index',compact('distributor'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dis = distributor::all();
        return view('barang.create',compact('dis'));
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
            'id_barang' => 'required',
            'nama' => 'required',
            'id_distributor' => 'required',
            'keterangan' => 'required',
        ]);
  
        barang::create($request->all());
   
        return redirect()->route('barang.index')
                        ->with('success','barang created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
        $distributor=DB::table("view_barangs")->find($id);
        return view('barang.show',compact('distributor'));
         
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(barang $barang)

    {
        $distributor = distributor::all();
        return view('barang.edit',['barang'=>$barang],['distributor'=>$distributor]);
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barang $barang)
    {
        $request->validate([
            'id_barang' => 'required',
            'nama' => 'required',
            'id_distributor' => 'required',
            'keterangan' => 'required',
        ]);
  
        $barang->update($request->all());
  
        return redirect()->route('barang.index')
                        ->with('success','barang updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(barang $barang)
    {
        $barang->delete();
  
        return redirect()->route('barang.index')
                        ->with('success','barang deleted successfully');    
    }
}   