<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Http\Resources\v2\PersonResource;
use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function show(Person $person) : PersonResource
    {
        return new PersonResource($person);
    }
}
