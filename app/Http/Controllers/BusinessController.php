<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $businesses = Business::all();
        return view('businesses.index', compact('businesses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('businesses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //return view('business.')
    }

    /**
     * Display the specified resource.
     */
    public function show(Business $business)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Business $business)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Business $business)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Business $business)
    {
        //
    }
}
