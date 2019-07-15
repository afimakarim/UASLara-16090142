<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use App\Tim;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pagesUser.home');
    }
    public function login()
    {
        return view('pagesAdmin.jadwal');
    }
    public function jadwalUser()
    {
        $jadwalPertandingan = \App\Jadwal::where('status', 'bertanding')->orWhere('status','menunggu')->get();
        return view('pagesUser.jadwalUSer',['jadwalPertandingan' => $jadwalPertandingan ]);
    }
    public function score()
    {
        $jadwalPertandingan = \App\Jadwal::where('status', 'selesai')->get();
        return view('pagesUser.score',['jadwalPertandingan' => $jadwalPertandingan ]);
    }
    public function daftarTimUser()
    {
        $daftarPemain = \App\Pemain::all();
        return view('pagesUser.daftarTimUser',compact('daftarPemain'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
    }
}
