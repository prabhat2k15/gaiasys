<?php

namespace App\Http\Controllers;

use App\ToolGroup;
use Illuminate\Http\Request;
use App\Http\Resources\ToolGroupResource;

class ToolGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ToolGroup  $toolGroup
     * @return \Illuminate\Http\Response
     */
    public function show(ToolGroup $toolGroup)
    {
        return $toolGroup->all();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\ToolGroup  $toolGroup
     * @return \Illuminate\Http\Response
     */
    public function showById(ToolGroup $toolGroup, $id)
    {
        $toolGroup = $toolGroup->find($id);
        return new ToolGroupResource($toolGroup);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ToolGroup  $toolGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(ToolGroup $toolGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ToolGroup  $toolGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ToolGroup $toolGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ToolGroup  $toolGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(ToolGroup $toolGroup)
    {
        //
    }
}
