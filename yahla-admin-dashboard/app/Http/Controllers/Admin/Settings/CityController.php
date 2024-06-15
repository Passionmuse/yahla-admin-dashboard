<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Models\City;
use App\Models\Region;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::orderBy("name", "ASC")->get();
        $regions = Region::orderBy("name", "ASC")->get();
        $countries = Country::orderBy("name", "ASC")->get();
        return view("content.settings.cities.index", compact("cities", "regions", "countries"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCityRequest $request)
    {
        $validated = $request->validated();

        $cities = $validated['cities'];
        unset($validated['cities']);
        
        foreach ($cities as $city)
            City::create(array_merge($validated, ['zipcode' => $city['zipcode'], 'name' => $city['name']]));

        return back()->with("success", "City successfully added.");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCityRequest $request, $id)
    {
        $validated = $request->validated();

        $city = City::find($id);
        $city->fill($validated);
        $city->save();

        return back()->with("success", "City successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::find($id);

        $city->delete();

        return back()->with("success", "City successfully deleted.");
    }
}
