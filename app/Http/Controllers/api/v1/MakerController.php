<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMakerRequest;
use App\Http\Requests\UpdateMakerRequest;
use App\Http\Resources\MakerResource;
use App\Models\Maker;
use Illuminate\Support\Facades\Log;

class MakerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MakerResource::collection(Maker::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMakerRequest $request)
    {
        Log::info($request);
        $maker = Maker::create($request->validated());
        return MakerResource::make($maker);
    }

    /**
     * Display the specified resource.
     */
    public function show(Maker $maker)
    {
        Log::info($maker);
        return MakerResource::make($maker);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMakerRequest $request, Maker $maker)
    {
        $maker->update($request->validated());
        return MakerResource::make($maker);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Maker $maker)
    {
        $maker->delete();
        return response('Maker Deleted');
    }
}
