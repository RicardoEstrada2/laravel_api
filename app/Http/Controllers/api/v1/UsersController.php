<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;
use App\Http\Resources\UsersResource;
use App\Models\Users;
use \Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Log;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return UsersResource::collection(Users::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsersRequest $request)
    {
        $user = Users::create($request->validated());
//        Log::info($user);
        $user_resp = Users::find($user->id);
        return UsersResource::make($user_resp);
    }

    /**
     * Display the specified resource.
     */
    public function show($id): UsersResource
    {
        $users = Users::find($id);
        return UsersResource::make($users);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsersRequest $request, $id)
    {
//        Log::info(Users::find($id));
        $users = Users::find($id);
        $users->update($request->validated());
//        $user_resp = Users::find($users->id);
        return UsersResource::make($users);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Log::info(Users::find($id));
        $users = Users::find($id);
        $users->delete();
        return response('User Deleted');
    }
}
