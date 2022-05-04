<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommunityRequest;
use App\Models\Commuity;
use App\Models\Community;
use App\Models\Topic;
use Illuminate\Http\Request;

class CommunityController extends Controller
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
        $topics = Topic::all();
        return view('communities.create', compact('topics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CommunityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommunityRequest $request)
    {
        $community = Community::create($request->validated() + ['user_id' => auth()->id()]);
        $community->topics()->sync($request->topics);
        return redirect(route('communities.show'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commuity  $commuity
     * @return \Illuminate\Http\Response
     */
    public function show(Commuity $commuity)
    {
        return $commuity->name;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commuity  $commuity
     * @return \Illuminate\Http\Response
     */
    public function edit(Commuity $commuity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commuity  $commuity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commuity $commuity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commuity  $commuity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commuity $commuity)
    {
        //
    }
}
