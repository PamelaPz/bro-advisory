<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Imgclients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImgclientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $category = Clients::find($id);
        $clientimg = Imgclients::find($id);
        $images = Imgclients::all();

        return view('img_clients.show', compact('clientimg', 'images', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientimg = Imgclients::find($id);

        return view('img_clients.edit', compact('clientimg'));
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
        $clientimg = Imgclients::FindOrFail($id);

        if( $request->hasFile('img') ){
            $file = $request->file('img');
            $name = str_replace(' ','-', $file->getClientOriginalName());
            $path = 'Images/' . $name;
            Storage::putFileAs('/public/' . 'Images/', $file, $name );
            
            $clientimg::whereId($id)->update([
                'img_cliente' => $path,
            ]);
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientimgs = Imgclients::find($id)->delete();

        return back();
    }
}
