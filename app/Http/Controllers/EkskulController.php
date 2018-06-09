<?php

namespace App\Http\Controllers;
use App\Ekskul;
use Illuminate\Http\Request;

class EkskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ekskuls = Ekskul::all();
        return view ('ekskul.index',compact('ekskuls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ekskul.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|',
            'keterangan' => 'required|'
        ]);
        $ekskuls = new Ekskul;
        $ekskuls->nama = $request->nama;
        $ekskuls->keterangan = $request->keterangan;
        $ekskuls->save();
        return redirect()->route('ekskul.index');
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
        $ekskuls = Ekskul::findOrFail($id);
        return view('ekskul.edit',compact('ekskuls'));
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
        $this->validate($request,[
            'nama' => 'required|',
            'keterangan' => 'required|'
        ]);
        $ekskuls = Ekskul::findOrFail($id);
        $ekskuls->nama = $request->nama;
        $ekskuls->keterangan = $request->keterangan;
        $ekskuls->save();
        return redirect()->route('ekskul.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ekskuls = Ekskul::findOrFail($id);
         $ekskuls->delete();
        return redirect()->route('ekskul.index');
    }
}
