<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::all();
        return view('admin.drivers.index')
          -> with('drivers', $drivers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
          'name' => 'required',
          'address' => 'required',
          'contact' => 'required|numeric',
        ];
        $customMsg = [
          'name.required' => 'Please enter Driver\'s Name',
          'address.required' => 'Please enter Driver\'s Address',
          'contact.required' => 'Please enter Driver\'s Phone No',
          'contact.numeric' => 'Please enter Numbers only',
        ];
        $this->validate($request, $rules, $customMsg);
        $driver = new Driver;
        $driver->name = $request->name;
        $driver->address = $request->address;
        $driver->contact = $request->contact;
        //$driver->photo = $request->photo;

        $driver->save();
        return redirect()
            ->route('drivers.index')
            ->withSuccessMessage('Driver added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = Driver::find($id);
        return view('admin.drivers.edit')
          -> with('driver', $driver);
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
          'name' => 'required',
          'address' => 'required',
          'contact' => 'required|numeric',
        ];
        $customMsg = [
          'name.required' => 'Please enter Driver\'s Name',
          'address.required' => 'Please enter Driver\'s Address',
          'contact.required' => 'Please enter Driver\'s Phone No',
          'contact.numeric' => 'Please enter Numbers only',
        ];
        $this->validate($request, $rules, $customMsg);
        $driver = Driver::find($id);
        $driver->name = $request->name;
        $driver->address = $request->address;
        $driver->contact = $request->contact;
        //$driver->photo = $request->photo;

        $driver->save();
        return redirect()
            ->route('drivers.index')
            ->withSuccessMessage('Driver updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver = Driver::find($id);
        $driver->delete();
        return redirect()
            ->route('drivers.index')
            ->withSuccessMessage('Driver deleted successfully!');
    }
}
