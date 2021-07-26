<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $list = Apartment::all();
        return view('list', [
            'list'=>$list
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $apartment = new Apartment();
        $apartment->fill($request->all());
        $apartment->save();
        return redirect('/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        $detail = Apartment::find($id);
        return view('edit', [
            'edit'=>$detail
        ]);
    }

    /**
     * Update the specified resource in storage.
     *

     */
    public function update(Request $request, $id)
    {
        $detail = Apartment::find($id);
        $detail->update($request->all());
        $detail->save();
        return redirect('/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        $detail = Apartment::find($id);
        $detail->delete();
        return redirect('/list');
    }
}
