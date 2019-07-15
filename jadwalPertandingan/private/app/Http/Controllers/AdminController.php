<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use App\Tim;
use App\Pemain;
use App\pertandingan;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function admin()
    {
        return view('pagesAdmin.home');
    }
    public function login()
    {
        return view('pagesAdmin.login');
    }
    public function homeAdmin()
    {
        $data['jadwalPertandingan'] = \App\Jadwal::all();
        $data['teams'] = Tim::all();
        return view('pagesAdmin.jadwal')->with($data);
    }
    public function store()
    {
        Jadwal::create([ 
            'tim_1' => request('tim_1'),
            'tim_2' => request('tim_2'),
            'score' => request('score'),
            'tanggal' => request('tanggal'),
            'jam_tanding' => request('jam_tanding'),
            'tempat' => request('tempat'),
            'status' => request('status')
            ]);
        return redirect('admin')->with('sukses','Data berhasil di Input');
    }



    public function tim()
    {
        $daftarTim = \App\Tim::all();
        return view('pagesAdmin.daftarTim',['daftarTim' => $daftarTim ]);
    }
    public function store2(Request $request)
    {
        Tim::create([ 
            'namaTim' => request('namaTim'),
            'asal' => request('asal')
            ]); 
        return redirect('daftarTim')->with('sukses','Data berhasil di Input');
    }


    
    public function pemain()
    {
        $daftarPemain['daftarPemain'] = \App\Pemain::all();
        $daftarPemain['teams'] = Tim::all();
        return view('pagesAdmin.daftarPemain')->with($daftarPemain);
    }

    public function store3(Request $request)
    {
        Pemain::create([ 
            'nama_tim' => request('nama_tim'),
            'nama_pemain' => request('nama_pemain'),
            'no_punggung' => request('no_punggung')
            ]); 
        return redirect('daftarPemain')->with('sukses','Data berhasil di Input');
    }

    public function setting()
    {
        return view('pagesAdmin.pengaturan');
    }
    public function logout()
    {
        return view('pagesUser.home');
    }
    public function editJadwal($id)
    {
        $jadwalEdit =\App\Jadwal::find($id);
        return view('pagesAdmin.editJadwal',['jadwal' =>$jadwalEdit ]);
    }

    public function editTim($id)
    {
        $timEdit =\App\Tim::find($id);
        return view('pagesAdmin.editTim',['daftarTim' =>$timEdit ]);
    }

    public function editPemain($id)
    {
        $pemainEdit =\App\Pemain::find($id);
        return view('pagesAdmin.editPemain',['daftarPemain' =>$pemainEdit ]);
    }
    

    public function updateTim(Request $request, $id)
    {
        $timUpdate = Tim::find($id);
        $timUpdate->update($request->all());
        return redirect('daftarTim')->with('sukses','Data berhasil di Update');
    }

    public function updateJadwal(Request $request, $id)
    {
        $jadwalUpdate = Jadwal::find($id);
        $jadwalUpdate->update($request->all());
        return redirect('admin')->with('sukses','Data berhasil di Update');
    }

    public function updatePemain(Request $request, $id)
    {
        $pemainUpdate = Pemain::find($id);
        $pemainUpdate->update($request->all());
        return redirect('daftarPemain')->with('sukses','Data berhasil di Update');
    }

    public function deletePemain(Request $request, $id)
    {
        $pemainDelete = Pemain::find($id);
        $pemainDelete->delete();
        return redirect('daftarPemain')->with('sukses','Data berhasil di delete');
    }

    public function deleteTim(Request $request, $id)
    {
        $timDelete = Tim::find($id);
        $timDelete->delete();
        return redirect('daftarTim')->with('sukses','Data berhasil di delete');
    }

    public function deleteJadwal(Request $request, $id)
    {
        $jadwalDelete = Jadwal::find($id);
        $jadwalDelete->delete();
        return redirect('admin')->with('sukses','Data berhasil di delete');
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
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

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
