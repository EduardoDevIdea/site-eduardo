<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logomarca;
use Illuminate\Support\Facades\Storage;

class LogomarcaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logomarca = Logomarca::first();
        
        if(blank($logomarca)){
            return view('logomarca.create');
        }
        else{
            return view('logomarca.edit', compact('logomarca'));
        }
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
        if($request->hasFile('logo') && $request->logo->isValid()){

            $imgPath = $request->logo->store('logomarca');

            $logomarca = new Logomarca;

            $logomarca->path = $imgPath;

            $logomarca->save();

            return redirect()->action('LogomarcaController@index')->with('store', 'Logomarca armazenada com sucesso!');
        }
        else{
            return redirect()->back()->with('erroStore', 'Erro ao armazenar Logomarca!');
        }
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
        if($request->hasfile('logo') && $request->logo->isValid()){

            $logomarca = Logomarca::find($id);

            if($logomarca->path && Storage::exists($logomarca->path)){
                Storage::delete($logomarca->path);
            }

            $imgPath = $request->logo->store('logomarca');

            $logomarca->path = $imgPath;

            $logomarca->save();

            return redirect()->action('LogomarcaController@index')->with('update', 'Logomarca atualizada com sucesso!');
        }
        else{
            return redirect()->back()->witch('erroUpdate', 'Erro ao atualizar imagem!');
        }
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
