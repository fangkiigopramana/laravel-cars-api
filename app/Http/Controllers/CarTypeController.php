<?php

namespace App\Http\Controllers;

use App\Models\CarType;
use App\Http\Requests\StoreCarTypeRequest;
use App\Http\Requests\UpdateCarTypeRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\CarTypeResource;

class CarTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = CarType::all();
        return CarTypeResource::collection($types);
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
     * @param  \App\Http\Requests\StoreCarTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarType  $carType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type = CarType::where('id',$id)->get();
        return CarTypeResource::collection($type);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarType  $carType
     * @return \Illuminate\Http\Response
     */
    public function edit(CarType $carType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarTypeRequest  $request
     * @param  \App\Models\CarType  $carType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarTypeRequest $request, CarType $carType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarType  $carType
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarType $carType)
    {
        //
    }
}
