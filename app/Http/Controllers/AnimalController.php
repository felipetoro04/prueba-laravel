<?php
namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use App\Http\Resources\AnimalResource;

class AnimalController extends Controller
{
    public function index()
    {
        $Animals = Animal::orderBy('name')->get();
        return ANimalResource::collection($animal);
    }
    public function show(Animal $animal)
    {
        return new AnimalResource($animal);
    }
    public function validateRequest()
    {
        return request()->validate([
            'DogId'=> 'required',
            'name'=> 'required',
        ]);
    }

    public function store()
    {
        $data = $this ->validateRequest();
        $dog = Animal::create($data);
        return new AnimalResource($animal);
    }

    public function update(Animal $animal)
    {
        $data = $this->validateRequest();
        $animal->update($data);
        return new AnimalResource($Animal);
    }
    public function destroy(Animal $Animal)
    {
        $Animal->delete();
        return \response()->noContent();
    }
}
