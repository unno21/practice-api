<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Animal\InsertAnimalRequest;
use App\Http\Requests\Animal\UpdateAnimalRequest;
use App\Http\Resources\AnimalResource;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::query()->paginate(10);
        return AnimalResource::collection($animals);
    }

    public function find(Animal $animal)
    {
        return AnimalResource::make($animal);
    }

    public function insert(InsertAnimalRequest $request)
    {
        $animal = Animal::query()
            ->create($request->all());

        return $animal;
    }

    //public function update(Animal $animal, Request $request)
    //{
    //    $animal->update($request->all());
    //
    //    return $animal;
    //}

    public function update(UpdateAnimalRequest $request)
    {
        $animal = Animal::query()->find($request->id);
        $animal->update($request->all());

        return $animal;
    }

    public function delete(Animal $animal, Request $request)
    {
        return $animal->delete();
    }
}
