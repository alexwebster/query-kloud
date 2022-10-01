<?php

namespace App\Http\Controllers;

use App\Models\SearchResults;
use App\Http\Requests\StoreSearchResultsRequest;
use App\Http\Requests\UpdateSearchResultsRequest;

class SearchResultsController extends Controller
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
     * @param  \App\Http\Requests\StoreSearchResultsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSearchResultsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SearchResults  $searchResults
     * @return \Illuminate\Http\Response
     */
    public function show(SearchResults $searchResults)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SearchResults  $searchResults
     * @return \Illuminate\Http\Response
     */
    public function edit(SearchResults $searchResults)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSearchResultsRequest  $request
     * @param  \App\Models\SearchResults  $searchResults
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSearchResultsRequest $request, SearchResults $searchResults)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SearchResults  $searchResults
     * @return \Illuminate\Http\Response
     */
    public function destroy(SearchResults $searchResults)
    {
        //
    }
}
