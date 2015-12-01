<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Problem;
use App\Product;
use App\User;
use Session;

class ProblemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $problems = Problem::all();
        return view('problem/index', ['problems'=>$problems]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::lists('name','id');
        $products = Product::lists('name','id');
        return view('problem/create', ['users'=>$users,'products'=>$products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Problem::create($request->all());
        return redirect()->route('problem.index');
        //dd($request->all());
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
        $problem = Problem::findOrFail($id);
        return view('problem.show', ['problem'=>$problem]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $problem = Problem::findOrFail($id);
        $users = User::lists('name','id');
        $products = Product::lists('name','id');
        return view('problem.edit', ['problem'=>$problem, 'products'=>$products, 'users'=>$users]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $problem = Problem::findOrFail($id);
        $problem->delete();
        Session::flash('flash_message', 'Problem Deleted');
        return redirect()->route('problem.index');
    }
}
