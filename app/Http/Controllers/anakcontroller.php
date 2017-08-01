<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\budak;
use App\ortu;
class anakcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
                 $anak=budak::all();
    return view('anak.index',compact('anak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ortu=ortu::all();
        return view('anak.create', compact('ortu'));
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
        $anak=new budak;
        $anak->nama=$request->a;
        $anak->ortu_id=$request->b;
        $anak->umur=$request->c;
        $anak->alamat=$request->e;
        $anak->save();
        return redirect('anak');
    
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
         $anak=budak::findOrFail($id);
         $ortu=ortu::all();
        return view('anak.show',compact('anak','ortu'));
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
         $anak=budak::findOrFail($id);
         $ortu=ortu::all();
        return view('anak.edit',compact('anak','ortu'));
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
        $anak= budak::findOrFail($id);
        $anak->nama=$request->a;
        $anak->ortu_id=$request->b;
        $anak->umur=$request->c;
        $anak->alamat=$request->d;
        $anak->save();
        return redirect('anak');

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
         $ortu=budak::findOrFail($id);
            $ortu->delete();
        return redirect('anak');
    }
}
