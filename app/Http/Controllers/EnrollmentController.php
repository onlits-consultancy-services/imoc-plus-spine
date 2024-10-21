<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Http\Requests\StoreEnrollmentRequest;
use App\Http\Requests\UpdateEnrollmentRequest;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::all();
        return response()->json($enrollments);
    }

    public function store(StoreEnrollmentRequest $request)
    {
        $enrollment = new Enrollment();
        
        $enrollment->save();
        return response()->json($enrollment, 201);
    }

    public function show(string $enrollmentNo)
    {
        $enrollment = Enrollment::find($enrollmentNo);
        return response()->json($enrollment);
    }

    public function update(UpdateEnrollmentRequest $request, string $enrollmentNo)
    {
        $enrollment = Enrollment::find($enrollmentNo);
        
    }

    public function destroy(string $enrollmentNo)
    {
        $enrollment = Enrollment::find($enrollmentNo);
        
    }
}
