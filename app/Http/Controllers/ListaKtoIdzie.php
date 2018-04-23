<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\IdeRequest;

use Illuminate\Support\Facades\DB;
use App\KtoIdzie;
use Illuminate\Support\Facades\Auth;

class ListaKtoIdzie extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $Uzytkownicy = User::Paginate(30);
        

        $CzyJest = DB::Table('ktoidzies')
        ->select('id')
        ->where('ktoidzies.id','=',  Auth::user()->id)
        ->count();
        if($CzyJest==0)
        return view('TakIde');
        else 
        return view('lista',compact('Uzytkownicy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $CzyJest = DB::Table('ktoidzies')
        ->select('id')
        ->where('ktoidzies.id','=',  Auth::user()->id)
        ->count();
        if($CzyJest==0)
        return view('TakIde');
        else 
        return redirect("/");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IdeRequest $request)
    {
        
        KtoIdzie::create([
            'id' => $request->id,
            'idzie' => $request->idzie,
        ]);
        return redirect("/");
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
