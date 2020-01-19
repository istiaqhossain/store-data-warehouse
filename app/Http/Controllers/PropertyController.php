<?php

namespace App\Http\Controllers;

use App\Store;
use App\Property;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Store $store)
    {
        $properties = $store->properties()->all();
        
        return response()->json(['data'=>$properties],200);
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
    public function store(Request $request, Store $store)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if($validator->fails()){
            $errors = (new ValidationException($validator))->errors();
            return response()->json(['errors' => $errors], 422);
        }

        $property = $store->properties()->create(['name' => $request->get('name')]);

        return response()->json(['data'=>$property],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Store  $store
     * @param  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store, $property)
    {
        $property = $store->properties()->find($property);

        return response()->json(['data'=>$property],200);
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
