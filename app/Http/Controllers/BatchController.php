<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Http\Requests\StoreBatchRequest;
use App\Http\Requests\UpdateBatchRequest;

class BatchController extends Controller
{
    public function index()
    {
        $batches = Batch::all();
        return response()->json($batches);
    }

    public function store(StoreBatchRequest $request)
    {
        $batch = new Batch();

        $batch->save();
        return response()->json($batch, 201);
    }

    public function show(string $batch_id)
    {
        $batch = Batch::find($batch_id);
        return response()->json($batch);
    }

    public function update(UpdateBatchRequest $request, string $batch_id)
    {
        $batch = Batch::find($batch_id);
        
    }

    public function destroy(string $batch_id)
    {
        $batch = Batch::find($batch_id);
        
    }
}
