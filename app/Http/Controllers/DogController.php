<?php
namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;
use App\Http\Resources\DogResource;



class DogController extends Controller
{
    public function index()
    {
        $dogs = Dog::orderBy('name')->get();
        return DogResource::collection($dogs);
    }
    public function show(Dog $dog)
    {
        return new DogResource($dog);
    }
    public function validateRequest()
    {
        return request()->validate([
            'name'=> 'required',
            'age'=> 'required',
        ]);
    }

    public function store()
    {
        $data = $this ->validateRequest();
        $dog = Dog::create($data);
        return new DogResource($dog);
    }

    public function update(Dog $dog)
    {
        $data = $this->validateRequest();
        $dog->update($data);
        return new DogResource($dog);
    }
    public function destroy(Dog $dog)
    {
        $dog->delete();
        return \response()->noContent();
    }
}
