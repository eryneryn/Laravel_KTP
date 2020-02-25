<?php

namespace App\Http\Controllers;

use App\KTP;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;


class KTPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ktp = KTP::all();
        return view('welcome', ['ktp' => $ktp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ktp = new KTP;
        $ktp->nik = $request->nik;
        // $ktp->image = $request->image;
        $ktp->nama = $request->nama;
        $ktp->ttl = $request->ttl;
        $ktp->gender = $request->gender;
        $ktp->goldar = $request->goldar;
        $ktp->alamat = $request->alamat;
        $ktp->rr = $request->rr;
        $ktp->kd = $request->kd;
        $ktp->camat = $request->camat;
        $ktp->agama = $request->agama;
        $ktp->status = $request->status;
        $ktp->pekerjaan = $request->pekerjaan;
        $ktp->warga = $request->warga;
        $ktp->berlaku = $request->berlaku;
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move(public_path().'/Uploads', $filename);
            $ktp->image = $filename;

            $ktp->save();

            return redirect('/');
        }
        else{
            $ktp->image='';
            return $request;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KTP  $kTP
     * @return \Illuminate\Http\Response
     */
    public function show(KTP $kTP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KTP  $kTP
     * @return \Illuminate\Http\Response
     */
    public function edit(KTP $kTP)
    {
        return view('edit', compact('kTP'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KTP  $kTP
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KTP $kTP)
    {
        $kTP->nik = $request->nik;
        $kTP->nama = $request->nama;
        $kTP->ttl = $request->ttl;
        $kTP->gender = $request->gender;
        $kTP->goldar = $request->goldar;
        $kTP->alamat = $request->alamat;
        $kTP->rr = $request->rr;
        $kTP->kd = $request->kd;
        $kTP->camat = $request->camat;
        $kTP->agama = $request->agama;
        $kTP->status = $request->status;
        $kTP->pekerjaan = $request->pekerjaan;
        $kTP->warga = $request->warga;
        $kTP->berlaku = $request->berlaku;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move(public_path().'/Uploads', $filename);
            $kTP->image = $filename;

            $kTP->save();

            return redirect('/');
        }
        else {
            $kTP->image = '';
            return $request;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KTP  $kTP
     * @return \Illuminate\Http\Response
     */
    public function destroy(KTP $kTP)
    {
        KTP::destroy($kTP->id);
        return redirect('/');
    }
}
