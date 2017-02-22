<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Request;
use App\Http\Controllers\Controller;
use Form;
use Html;
use Input;
use Redirect;
use View;
use App\Golongan;
use Validator;
use App\User;

class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function __construct()
    {
        $this->middleware('HRD');
    }



    public function index()
    {
        $gol = Golongan::paginate(5);
        $searchuser=User::where('name',request('name'))->paginate(5);
        if (request()->has('name')) {
            $searchuser=User::where('name')->paginate(5);
        }
        else {
            $searchuser=User::paginate(5);
        }
        
        return view('Golongan.index',compact('gol'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Golongan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $jab=['Kode_golongan' => 'required|unique:golongans,Kode_golongan',
            'Nama_golongan' => 'required','Besaran_uang' =>'required'];
        $atan=[
            'Kode_golongan.required' => 'harus diisi!',
            'Kode_golongan.unique' => 'data sudah ada!',
            'Nama_golongan.required' => 'harus diisi!',
            'Besaran_uang.required' => 'harus diisi!',
            ];
        $validasi = Validator::make(Input::all(),$jab,$atan);
        if($validasi->fails()){
            return redirect()->back()
            ->withErrors($validasi)
            ->withInput();
        }
        $gol = $request::all();
        Golongan::create($gol);
        return redirect('Golongan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Golongan::find($id);
        return view('Golongan.show',compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Golongan::find($id);
        return view('Golongan.edit',compact('data'));
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
        $dataUpdate = Request::all();
        $data = Golongan::find($id);
        $data->update($dataUpdate);
        return redirect('Golongan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Golongan::find($id)->delete();
        return redirect('Golongan');
    }
}
