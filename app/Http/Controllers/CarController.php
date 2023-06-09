<?php

namespace App\Http\Controllers;


use App\Models\Car;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Http\Resources\CarResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::paginate();
        return CarResource::collection($cars);

        //update
        // $filter = new CarQuery() ;
        // $queryItems = $filter->transform($request);

        // if (count($queryItems) == 0){
        //     $cars = Car::paginate();
        //     return CarResource::collection($cars);
        // } else {
        //     $cars = Car::where($queryItems)->paginate();
        //     return CarResource::collection($cars);
        // }
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
     * @param  \App\Http\Requests\StoreCarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request)
    {
        if(Car::create($request->all())){
            $message = 'Great news! The data has been successfully added to the API.';
        } else {
            $message = 'Great news! The data has been successfully added to the API.';
        }
        return ['message' => $message];
        // return CarResource::collection($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::where('id',$id)->get();
        return CarResource::collection($car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $id,)
    {
        return $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarRequest  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, Car $id)
    {
        // return $id;
        return $id->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $id)
    {
        if($id->delete()){
            return "Berhasil";
        }
        return "Gagal";
    }
}
