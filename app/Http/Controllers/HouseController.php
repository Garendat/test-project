<?php

namespace App\Http\Controllers;

use App\Http\Filters\HouseFilter;
use App\Http\Requests\HouseFilterRequest;
use App\Http\Resources\HouseResource;
use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{

    public function index(HouseFilterRequest $request)
    {
        $house_filter = new HouseFilter( $request->validated() );

        $filteredHouses = House::filter( $house_filter )->get();

        return HouseResource::collection( $filteredHouses );

    }


}
