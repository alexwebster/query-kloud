<?php

namespace App\Http\Controllers;

use App\Models\LocalSearch;
use App\Http\Requests\StoreLocalSearchRequest;
use App\Http\Requests\UpdateLocalSearchRequest;

class LocalSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'index message from LocalSearchController.php';
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user_registered.search_local.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLocalSearchRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLocalSearchRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LocalSearch  $localSearch
     * @return \Illuminate\Http\Response
     */
    public function show(LocalSearch $localSearch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LocalSearch  $localSearch
     * @return \Illuminate\Http\Response
     */
    public function edit(LocalSearch $localSearch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLocalSearchRequest  $request
     * @param  \App\Models\LocalSearch  $localSearch
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocalSearchRequest $request, LocalSearch $localSearch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LocalSearch  $localSearch
     * @return \Illuminate\Http\Response
     */
    public function destroy(LocalSearch $localSearch)
    {
        //
    }
}
