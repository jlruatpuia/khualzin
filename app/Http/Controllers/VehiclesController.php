<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Driver;
use App\Models\Route;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('admin.vehicles.index')
          -> with ('vehicles', $vehicles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $routes = Route::all();
        $drivers = Driver::all();
        return view('admin.vehicles.create')
          -> with ('routes', $routes)
          -> with ('drivers', $drivers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
          'route_id' => 'required',
          'driver_id' => 'required',
          'vehicle_no' => 'required',
          'vehicle_name' => 'required',
          'travel_days' => 'required',
          'owner_name' => 'required',
          'owner_address' => 'required',
          'owner_contact' => 'required',
        ];
        $customMsg = [
          'route_id.required' => 'Please select Route',
          'driver_id.required' => 'Please select Driver',
          'vehicle_no.required' => 'Please enter Vehicle Registration No',
          'vehicle_name.required' => 'Please enter Vehicle Name',
          'travel_days.required' => 'Please select Travel Days',
          'owner_name.required' => 'Please enter Owner\'s Name',
          'owner_address.required' => 'Please enter Owner\'s Address',
          'owner_contact.required' => 'Please enter Owner\'s Phone No',
        ];
        $this->validate($request, $rules, $customMsg);

        $vehicle = new Vehicle;
        $vehicle->route_id = $request->route_id;
        $vehicle->driver_id = $request->driver_id;
        $vehicle->vehicle_no = $request->vehicle_no;
        $vehicle->vehicle_name = $request->vehicle_name;
        $vehicle->travel_days = json_encode($request->travel_days);
        $vehicle->owner_name = $request->owner_name;
        $vehicle->owner_address = $request->owner_address;
        $vehicle->owner_contact = $request->owner_contact;

        $vehicle->save();

        return redirect()->route('vehicles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $v = Vehicle::find($id);
        dd(getAttribute($v->travel_days));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $routes = Route::all();
        $drivers = Driver::all();
        $vehicle = Vehicle::find($id);
        return view('admin.vehicles.edit')
          -> with ('routes', $routes)
          -> with ('drivers', $drivers)
          -> with ('vehicle', $vehicle);
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
      $rules = [
        'route_id' => 'required',
        'driver_id' => 'required',
        'vehicle_no' => 'required',
        'vehicle_name' => 'required',
        'travel_days' => 'required',
        'owner_name' => 'required',
        'owner_address' => 'required',
        'owner_contact' => 'required',
      ];
      $customMsg = [
        'route_id.required' => 'Please select Route',
        'driver_id.required' => 'Please select Driver',
        'vehicle_no.required' => 'Please enter Vehicle Registration No',
        'vehicle_name.required' => 'Please enter Vehicle Name',
        'travel_days.required' => 'Please select Travel Days',
        'owner_name.required' => 'Please enter Owner\'s Name',
        'owner_address.required' => 'Please enter Owner\'s Address',
        'owner_contact.required' => 'Please enter Owner\'s Phone No',
      ];
      $this->validate($request, $rules, $customMsg);

      $vehicle = Vehicle::find($id);
      $vehicle->route_id = $request->route_id;
      $vehicle->driver_id = $request->driver_id;
      $vehicle->vehicle_no = $request->vehicle_no;
      $vehicle->vehicle_name = $request->vehicle_name;
      $vehicle->travel_days = json_encode($request->travel_days);
      $vehicle->owner_name = $request->owner_name;
      $vehicle->owner_address = $request->owner_address;
      $vehicle->owner_contact = $request->owner_contact;

      $vehicle->save();

      return redirect()->route('vehicles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();

        return redirect()->route('vehicles.index');
    }
}
