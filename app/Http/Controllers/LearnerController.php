<?php

namespace App\Http\Controllers;

use App\Models\Learner;
use App\Http\Requests\StoreLearnerRequest;
use App\Http\Requests\UpdateLearnerRequest;
use Dotenv\Repository\RepositoryInterface;

class LearnerController extends Controller
{
    public function index()
    {
        $learners = Learner::all();
        return response()->json($learners);
    }

    public function store(StoreLearnerRequest $request)
    {
        $learner = new Learner();

        $learner->save();
        return response()->json($learner, 201);
    }

    public function show(string $lid)
    {
        $learner = Learner::find($lid);
        return response()->json($learner);
    }

    public function update(UpdateLearnerRequest $request,string $lid)
    {
        $learner = Learner::find($lid);
        
    }

    public function destroy(string $lid)
    {
        $learner = Learner::find($lid);
        
    }
}
