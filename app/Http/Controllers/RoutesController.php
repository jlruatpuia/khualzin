<?php

namespace App\Http\Controllers;

use App\Models\Town;
use Illuminate\Http\Request;
use App\Models\Route;

class RoutesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routes = Route::all();

        return view('admin.routes.index') -> with('routes', $routes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $towns = Town::all();
        return view('admin.routes.create')
            -> with('towns', $towns);
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
            'from' => 'required',
            'dest' => 'required|different:from',
            'fare' => 'required|numeric',
        ];
        $customMsg = [
            'from.required' => 'Please enter Travelling from Location',
            'dest.required' => 'Please enter Travelling to Location',
            'dest.different' => 'Source of travel and Destination cannot be the same',
            'fare.required' => 'Please enter Fare amount',
            'fare.numeric' => 'Please enter Numbers only',
        ];
        $this->validate($request, $rules, $customMsg);

        $route = new Route;
        $route->from = $request->from;
        $route->dest = $request->dest;
        $route->rate = $request->fare;

        $route->save();

      return redirect()
          ->route('routes.index')
          ->withSuccessMessage('Route successfully added!');
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
        $towns = Town::all();
        $route = Route::find($id);
        return view('admin.routes.edit')
            ->with('route', $route)
            ->with('towns', $towns);
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
        'from' => 'required',
        'dest' => 'required',
        'fare' => 'required|numeric',
      ];
      $customMsg = [
        'from.required' => 'Please enter Travelling from Location',
        'dest.required' => 'Please enter Travelling to Location',
        'fare.required' => 'Please enter Fare amount',
        'fare.numeric' => 'Please enter Numbers only',
      ];
      $this->validate($request, $rules, $customMsg);

      $route = Route::find($id);
      $route->from = $request->from;
      $route->dest = $request->dest;
      $route->rate = $request->fare;

      $route->save();

      return redirect()
          ->route('routes.index')
          ->withSuccessMessage('Route successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $route = Route::find($id);
        $route->delete();
        return redirect()->route('routes.index');
    }
}
