<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\MakerResource;
use App\Models\Maker;
use Illuminate\Http\Request;

class IsActiveMakerController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Maker $maker)
    {
        $maker->is_active = $request->is_active;
        $maker->save();

        return MakerResource::make($maker);
    }
}
