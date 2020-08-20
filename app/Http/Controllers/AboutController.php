<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
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
        $about = About::first();

        if( blank($about)) {
            return view('about.create');
        }
        else {
            return view('about.edit', compact('about'));
        }
    }

    // return path of curriculo to show on the view when user click at the button "curriculo"
    public function showCurriculo() {
        
        $about = About::first(); //pega o único registro e na view exibe apenas o campo curriculo da taberla abouts

        return view('showCurriculo', compact('about'));
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
        $about = new About;
            
            if($request->hasFile('img') && $request->img->isValid()){

                $imgPath = $request->img->store('about/image');
                $about->img = $imgPath;
            }

            if($request->hasFile('curriculo') && $request->curriculo->isValid()){

                $curriculoPath = $request->curriculo->store('about/curriculo');
                $about->curriculo = $curriculoPath;
            }
        
        $about->bio = $request->bio;

        $about->save();

        return redirect()->action('AboutController@index')->with('store', 'Dados armazenados com sucesso!');
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
        $about = About::find($id);

        if($request->hasFile('img') && $request->img->isValid()){

            if($about->img && Storage::exists($about->img)){
                Storage::delete($about->img);
            }

            $imgPath = $request->img->store('about/image');

            $about->img = $imgPath;
        }

        if($request->hasFile('curriculo') && $request->curriculo->isValid()){

            if($about->curriculo && Storage::exists($about->curriculo)){
                Storage::delete($about->curriculo);
            }

            $curriculoPath = $request->curriculo->store('about/curriculo');

            $about->curriculo = $curriculoPath;
        }

        $about->bio = $request->bio;

        $about->save();

        return redirect()->action('AboutController@index')->with('update', 'Dados Atualizados com sucesso');
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
