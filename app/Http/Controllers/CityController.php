<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = City::all();

        return response()->view('cms.cities.index',['cities'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = City::all();

        return response()->view('cms.cities.create',['cities'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:45'
        ]);

        City::create(
            [
                'name' => $request->input('name'),
            ]
        );
        session()->flash('message', 'Activity added to the city');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {


        return response()->view('cms.cities.edit',['city'=>$city]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:45'
        ]);

        if ($city) {
            $city->update([
                'name' => $request->input('name'),
            ]);

            session()->flash('message', 'City updated successfully');
        } else {
            session()->flash('error', 'City not found');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->back();
    }
}
