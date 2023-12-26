<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\upDataRequest;
use App\Models\barang;

class barangControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = barang::all();

        return view('welcome', ['barangs' => $barangs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah');
    }
    
    public function detail()
    {
        $barangs = barang::all();
        return view('shop', ['barangs' => $barangs]);
    }
    /**
     * Store a newly created resource in storage.
     * 
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => "required",
            'deskripsi' => "required",
            'harga' => 'required',
            'gambar' => 'required'
        ]);

        $input = $request->all();
        
        if ($image = $request->file('gambar')){
            $destinationPath = 'images/';
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['gambar'] = "$imageName";

        }
        barang::create($input);
        return back()->with('success', 'Add succesfull');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barangs = barang::find($id);
        return view('edit',['barangs'=> $barangs]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => "required",
            'deskripsi' => "required",
            'harga' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $barangs = barang::find($id);

        $barangs->nama = $request->input('nama');
        $barangs->deskripsi = $request->input('deskripsi');
        $barangs->harga = $request->input('harga');

        if ($request->hasFile('gambar')) {
            // Jika ada file gambar yang diunggah, proses untuk menyimpan gambar baru
            $destinationPath = 'images/';
            $imageName = time().'.'.$request->file('gambar')->getClientOriginalExtension();
            $request->file('gambar')->move($destinationPath, $imageName);

            // Hapus gambar lama jika ada
            if ($barangs->gambar && file_exists($destinationPath . $barangs->gambar)) {
                unlink($destinationPath . $barangs->gambar);
            }

            $barangs->gambar = $imageName;
        }

        $barangs->save();

        return redirect()->route('shop')->with('success', 'Update sukses!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barangs = barang::find($id);
        $barangs->delete();
        return redirect()->route('shop')->with('success', 'Terhapus!');
    }
}
