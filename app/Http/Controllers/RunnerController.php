<?php

namespace App\Http\Controllers;

use App\Runner;
use App\City;
use Illuminate\Http\Request;
use App\Http\Requests\RunnerStoreRequest;
use App\Utils\PhoneNumberConverter;
use App\Utils\ImageUpload;
use App\Image;

class RunnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $runners = Runner::all();

        return view('runners.index',compact('runners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        return view('runners.create',compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RunnerStoreRequest $request)
    {
        $runner = new Runner();
        $request['phone'] = PhoneNumberConverter::phoneNo09To959($request->phone);
        $image_url = ImageUpload::uploadImage($request);

        $created_runner = $runner->create($request->all());

        $image = new Image();
        $image = $created_runner->imagable()->save($image);
        $image->url = $image_url;
        $image->save();

        $created_runner->update(['image_id'=>$image->id]);

        return redirect()->route('runners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Runner  $runner
     * @return \Illuminate\Http\Response
     */
    public function show(Runner $runner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Runner  $runner
     * @return \Illuminate\Http\Response
     */
    public function edit(Runner $runner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Runner  $runner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Runner $runner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Runner  $runner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Runner $runner)
    {
        //
    }
}
