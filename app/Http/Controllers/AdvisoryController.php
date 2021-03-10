<?php

namespace App\Http\Controllers;

use App\Models\Advisory;
use Illuminate\Http\Request;

class AdvisoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advisories = Advisory::all();

        return view('asesoria.index', compact('advisories'));
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
        $asesorium = Advisory::find($id);

        return view('asesoria.show', compact('asesorium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $advisory = Advisory::find($id);
        $advisories = Advisory::all();

        return view('asesoria.edit', compact('advisory', 'advisories'));
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
        $asesorium = Advisory::FindOrFail($id);

        if( $request ){
            // $icon = $request['icon'];
            $asesorium::whereId($id)->update([
                'subh4' => $request->subh4,
                'icon' => $request->icon,
                'p1' => $request->p1,
            ]);
        }
        else{
            $asesorium->update($request->all());
        }

        return redirect()->route('asesoria.show', compact('asesorium'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advisory = Advisory::find($id)->delete();

        return back();
    }
}
