<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data['users'] = User::get();

        return view('welcome', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('create');
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

        $rules = [
            'nomor_induk' => 'required|string|unique:users',
            'nama' => 'required|string',
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
            'tanggal_bergabung' => 'required|date'
           
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) 
        {
            return redirect('create')
                            ->with('status','Data tidak berhasil ditambahkan, silahkan mengisi form dengan lengkap dan benar')
                            ->withErrors($validator)
                            ->withInput();
        }

        $user = new User;
        $user->nomor_induk = $request->nomor_induk;
        $user->nama = $request->nama;
        $user->alamat = $request->alamat;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->tanggal_bergabung = $request->tanggal_bergabung;

        $user->save();
        
        return redirect('/')->with('status', 'Pengguna dengan nama '.$user->name.' telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nomor_induk)
    {
        //

        if($nomor_induk!=null) {
            $data['user'] = User::where('nomor_induk', $nomor_induk)->first();

            return view('detail', $data);
        } else return redirect('/');
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
    public function destroy($nomor_induk)
    {
        //
        if($nomor_induk!=null) {
            $data['user'] = User::where('nomor_induk', $nomor_induk)->first();
            $data['user']->delete();

            return redirect('/');
        } else return redirect('/');
    }
}
