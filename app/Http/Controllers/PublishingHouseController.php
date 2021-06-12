<?php

namespace App\Http\Controllers;

use App\Models\PublishingHouse;
use Illuminate\Http\Request;

class PublishingHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publishingHouses = PublishingHouse::all();
        return view('Dashboard.PublishingHouses.AllPublishingHouses', compact('publishingHouses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.PublishingHouses.AddPublishingHouses');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'publishing_house_name' => 'required|unique:publishing_houses|max:255',
            'publishing_house_address' => 'required',
        ], [
            'author_name.required' => 'يرجى ادخال اسم دار النشر',
        ]);
        PublishingHouse::create([
            'publishing_house_name' => $request->publishing_house_name,
            'publishing_house_address' => $request->publishing_house_address,
        ]);
        $publishingHouses = PublishingHouse::all();
        return redirect('/publishing_houses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PublishingHouse  $publishingHouse
     * @return \Illuminate\Http\Response
     */
    public function show(PublishingHouse $publishingHouse)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PublishingHouse  $publishingHouse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publishingHouse = PublishingHouse::find($id);
        return view('Dashboard.PublishingHouses.EditPublishingHouses', compact('publishingHouse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PublishingHouse  $publishingHouse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PublishingHouse $publishingHouse)
    {
        $publishingHouse = PublishingHouse::findOrFail($request->id);

        $publishingHouse->update([
            'publishing_house_name' => $request->publishing_house_name,
            'publishing_house_address' => $request->publishing_house_address,
        ]);

        return redirect('publishing_houses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PublishingHouse  $publishingHouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $publishingHouse = PublishingHouse::findOrFail($request->id);
        $publishingHouse->delete();
        return redirect('publishing_houses');
    }
}
