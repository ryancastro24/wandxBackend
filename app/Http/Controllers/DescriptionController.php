<?php

namespace App\Http\Controllers;

use App\Http\Requests\DescriptionRequest;
use App\Models\Description;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{

    public function index()
    {
    
        $descriptions = Description::all();
    
        return $descriptions;
    }
        public function save_descriptions(DescriptionRequest $request){
            $validated = $request->validated();
            $descriptions = Description::create($validated);
            return $descriptions;
        }
    //
}
