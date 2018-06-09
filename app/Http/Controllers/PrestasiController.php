<?php

namespace App\Http\Controllers;
use App\Ekskul;
use App\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasis = Prestasi::with('Ekskul')->get();
        return view('prestasi.index',compact('prestasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ekskuls = Ekskul::all();
         return view('prestasi.create',compact('ekskuls'));
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
            'perolehan' => 'required|',
            'ekskul_id' => 'required'
        ]);
        $prestasis = new Prestasi;
        $prestasis->nama = $request->nama;
        $prestasis->perolehan = $request->perolehan;
        $prestasis->ekskul_id = $request->ekskul_id;
        $prestasis->save();
        return redirect()->route('prestasi.index');
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
        $prestasis = Prestasi::findOrFail($id);
         $ekskuls = Ekskul::all();
         $selectedEkskul = Prestasi::findOrFail($id)->ekskul_id;
        return view('prestasi.edit',compact('prestasis','ekskuls','selectedEkskul')); 
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
            'perolehan' => 'required|',
            'ekskul_id' => 'required'
        ]);
        $prestasis = Prestasi::findOrFail($id);
        $prestasis->nama = $request->nama;
        $prestasis->perolehan = $request->perolehan;
        $prestasis->ekskul_id = $request->ekskul_id;
        $prestasis->save();
        return redirect()->route('prestasi.index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prestasis = Prestasi::findOrFail($id);
        $prestasis->delete();
        return redirect()->route('prestasi.index');
    }
}
