<?php

namespace App\Http\Controllers;
use App\Industri;
use App\Jurusan;
use Illuminate\Http\Request;

class IndustriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industris = Industri::with('Jurusan')->get();
        return view('industri.index',compact('industris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusans = Jurusan::all();
         return view('industri.create',compact('jurusans'));
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
            'logo' => 'required|',
            'nama' => 'required|',
            'deskripsi' => 'required|',
            'jurusan_id' => 'required'
        ]);
        $industris = new Industri;
        $industris->nama = $request->nama;
        $industris->deskripsi = $request->deskripsi;
        $industris->jurusan_id = $request->jurusan_id;
      
         //apload foto
        if ($request->hasFile('logo')){
            $file=$request->file('logo');
            $destinationPath=public_path().'/assets/admin/images/icon/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces= $file->move($destinationPath,$filename);
            $industris->logo= $filename;
        }

        $industris->save();
        return redirect()->route('industri.index');
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
        $industris = Industri::findOrFail($id);
         $jurusans = Jurusan::all();
         $selectedJurusan = Jurusan::findOrFail($id)->jurusan_id;
        return view('industri.edit',compact('industris','jurusans','selectedJurusan'));
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
            'logo' => 'image|max:2048',
            'nama' => 'required|',
            'deskripsi' => 'required|',
            'jurusan_id' => 'required'
        ]);
        $industris = Industri::findOrFail($id);
        $industris->logo = $request->logo;
        $industris->nama = $request->nama;
        $industris->deskripsi = $request->deskripsi;
        $industris->jurusan_id = $request->jurusan_id;


        if ($request->hasFile('logo')) {
            $uploaded_logo = $request->file('logo');
            $extension = $uploaded_logo->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . '/assets/admin/images/icon/';
            $uploaded_logo->move($destinationPath, $filename);
    
     $industris->logo=$filename;
        $industris->save();
    }
        return redirect()->route('industri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $industris = Industri::findOrFail($id);
        $industris->delete();
        return redirect()->route('industri.index');
    }
}
