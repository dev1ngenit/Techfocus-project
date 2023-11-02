<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\State;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\StateRequest;

class CountryStateCityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.countryStateCity.index', [
            'countries' => Country::get(),
            'states'    => State::get(),
            'cities'    => City::get(),
        ]);
    }

    /**
     * Country Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCountry(CountryRequest $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);

        $data = $request->only(['name', 'status']);
        Country::create($data);

        toastr()->success('Country has been saved successfully!');
        return redirect()->back();
    }

    /**
     * State Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeState(StateRequest $request)
    {
        $request->validate([
            'country_id' => 'required|exists:countries,id',
            'name' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);

        $data = $request->only(['country_id', 'name', 'status']);
        State::create($data);

        toastr()->success('State has been saved successfully!');
        return redirect()->back();
    }

    /**
     * State Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCity(CityRequest $request)
    {
        $request->validate([
            'state_id' => 'required|exists:states,id',
            'name' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);

        $data = $request->only(['state_id', 'name', 'status']);
        City::create($data);

        toastr()->success('City has been saved successfully!');
        return redirect()->back();
    }

    /**
     * Update Country the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCountry(CountryRequest $request, $id)
    {
        $status = $request->get('status');

        // Update the country status
        Country::where('id', $id)->update(['status' => $status]);

        // Update the status of states related to this country
        State::where('country_id', $id)->update(['status' => $status]);

        // Fetch the states to get their ids
        $stateIds = State::where('country_id', $id)->pluck('id');

        // Update the status of cities related to these states
        City::whereIn('state_id', $stateIds)->update(['status' => $status]);

        toastr()->success('Country, states, and cities have been updated successfully!');
        return redirect()->back();
    }

    /**
     * Update State the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateState(StateRequest $request, $id)
    {
        $status = $request->get('status');

        // Update the status of the state
        State::where('id', $id)->update(['status' => $status]);

        // Update the status of cities related to this state
        City::where('state_id', $id)->update(['status' => $status]);

        toastr()->success('State and related cities have been updated successfully!');
        return redirect()->back();
    }

    /**
     * Update City the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCity(CityRequest $request, $id)
    {
        $status = $request->get('status');

        // Update the status of the city
        City::where('id', $id)->update(['status' => $status]);

        toastr()->success('City has been updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyCountry($id)
    {
        DB::transaction(function () use ($id) {
            // Deleting cities related to states of this country
            City::whereIn('state_id', State::where('country_id', $id)->pluck('id'))->delete();

            // Deleting states related to this country
            State::where('country_id', $id)->delete();

            // Deleting the country itself
            Country::where('id', $id)->delete();
        });
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyState($id)
    {
        DB::transaction(function () use ($id) {
            // Deleting cities related to this state
            City::where('state_id', $id)->delete();

            // Deleting the state itself
            State::where('id', $id)->delete();
        });
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyCity($id)
    {
        // Deleting the city itself
        City::where('id', $id)->delete();
    }
}
