<?php

namespace App\Http\Controllers;

use App\Models\Logang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogangController extends Controller
{
    
    /**
     * Display a listingmagang of the resource.
     */
    public function index() {
        return view('listingmagang.index', [
            'listingmagang' => Logang::latest()->filter(request(['Tags', 'search']))->paginate(6)
        ]);
    }

    // Show single listingmagang
    public function show(Logang $id) {
        return view('listingmagang.show', [
            'listingmagang' => $id
        ]);
    }

    // Show Create Form
    public function create() {
        return view('listingmagang.create');
    }

    // Store Listingmagang Data
    public function store(Request $request) {

        $image      =$request->file('logo');
        $filename   =date('Y-m-d').$image->getClientOriginalName();
        $path       ='/imglogo/'.$filename;

        Storage::disk('public')->put($path,file_get_contents($image));
                  
        Logang::create([
            'NamaPerusahaan' => $request->NamaPerusahaan,
            'Posisi' => $request->Posisi,
            'Alamat' => $request->Alamat,
            'Pengalaman' => $request->Pengalaman,
            'Gaji' => $request->Gaji,
            'TipeMagang' => $request->TipeMagang,
            'Deskripsi' => $request->Deskripsi,
            'Website' => $request->Website,
            'Email' => $request->Email,
            'Tags' => $request->Tags,
            'Logo' => $filename

        ]);

        return redirect('/logang')->with('message', 'Listingmagang created successfully!');
    }

    public function edit(Request $request,$id) {
        $logang = Logang::find($id);
        return view('listingmagang.edit', compact('logang') );
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

         if ($request->Logo) {
            $Logo      =$request->file('Logo');
            $filename   =date('Y-m-d').$Logo->getClientOriginalName();
            $path       ='/imglogo/'.$filename;

            Storage::disk('public')->put($path,file_get_contents($Logo));
        }
        Logang::whereId($id)->update([
            'NamaPerusahaan' => $request->NamaPerusahaan,
            'Posisi' => $request->Posisi,
            'Alamat' => $request->Alamat,
            'Pengalaman' => $request->Pengalaman,
            'Gaji' => $request->Gaji,
            'TipeMagang' => $request->TipeMagang,
            'Deskripsi' => $request->Deskripsi,
            'Website' => $request->Website,
            'Email' => $request->Email,
            'Tags' => $request->Tags,
            'Logo' => $filename

        ]);

        return redirect()->route('manage.view')->with('success', 'lowongan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $logang = Logang::find($id);
        if ($logang){
            $logang->delete();
        }
        return redirect()->route('manage.view')->with('success', 'Lowongan deleted successfully');
    }

    // Manage Listingmagang
    public function manage() {
        return view('listingmagang.manage', ['listingmagang' =>Logang::all()]);
    }
}