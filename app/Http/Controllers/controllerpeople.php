<?php

namespace App\Http\Controllers;

use App\Models\people;
use Illuminate\Http\Request;

class controllerpeople extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people=people::all();
        return response(\App\Http\Resources\peopleresources::collection($people),200);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $people=people::create($request->all());
        return response(new peopleResource($people), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\people  $people
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(people $people, int $id)
    {
        //$people=\App\Http\Models\people::find($id);
        return response(people::find($id),200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\people  $people
     * @return \Illuminate\Http\Response
     */
    public function edit(people $people)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\people  $people
     * @param int $id
     * @param string $name
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, people $people, int $id, string $name)
    {
        $ppl=people::find($id);
        $ppl->update(['name' => $name]);
        return response($ppl, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\people  $people
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(people $people, int $id)
    {
        $people=people::destroy($id);
    }
}
