<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\pelatihan;

class peserta extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index()
    {
          $user = User::get();
        return view('web.user',compact('user'));
    }

    public function changeStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }

    public function windex()
    {
        return view('web.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.daftar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelatihan=pelatihan::where('id',$request->pelatihan_id)->first();
        $daftar=User::where('pelatihan_id',$request->pelatihan_id)->get();
        $nubRow=count($daftar)+1;
        if($nubRow <10){
            $std_id=$pelatihan->short_name.date('Y')."00".$nubRow;
        }
        elseif($nubRow >=10 && $nubRow<=99){
            $std_id=$pelatihan->short_name.date('Y')."00".$nubRow;
        }
        elseif($nubRow <= 100){
            $std_id=$pelatihan->short_name.date('Y')."00".$nubRow;
        }
        $data = new User;
        $data->name=$request->name;
        $data->std_id=$std_id;
        $data->email=$request->email;
        $data->tlp=$request->tlp;
        $data->alamat=$request->alamat;
        $data->jenis_k=$request->jenis_k;
        $data->pelatihan_id=$request->pelatihan_id;
        $data->password=$request->password;
        $data->save();
        return back()->with('success',"data add successfully id is $std_id");
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
