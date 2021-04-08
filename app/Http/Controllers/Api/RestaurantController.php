<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RestaurantResource;
use App\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        return RestaurantResource::collection(Restaurant::all());
    }
}
