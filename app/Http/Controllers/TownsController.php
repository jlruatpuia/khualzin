<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Town;
use Yajra\DataTables\Facades\DataTables;

class TownsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $towns = Town::all();
        return view('admin.towns.index')->with('towns', $towns);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'town_name' => 'required'
        ], [
            'town_name.required' => 'Please enter Name of City/Town/Village'
        ]);
        $town = new Town;
        $town->town_name = $request->town_name;
        $town->save();
        return redirect()->back()->withSuccessMessage('City/Town/Village added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $town = Town::find($id);
        return view('admin.towns.edit')->with('town', $town);
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
        $this->validate($request, [
            'town_name' => 'required'
        ], [
            'town_name.required' => 'Please enter Name of City/Town/Village'
        ]);
        $town = Town::find($id);
        $town->town_name = $request->town_name;
        $town->save();
        return redirect()->route('towns.index')->withSuccessMessage('City/Town/Village updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Town::find($id)->delete();
        return redirect()->route('towns.index')->withSuccessMessage('City/Town/Village deleted successfully');
    }
}
