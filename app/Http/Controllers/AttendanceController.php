<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Http\Requests\StoreAttendanceRequest;
use App\Http\Requests\UpdateAttendanceRequest;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::all();
        return response()->json($attendances);
    }

    public function store(StoreAttendanceRequest $request)
    {
        $attendance = new Attendance();
        $attendance->save();
        return response()->json($attendance, 201);
    }

    public function show(string $id)
    {
        $attendance = Attendance::find($id);
        return response()->json($attendance);
    }

    public function update(UpdateAttendanceRequest $request,string $id)
    {
        $attendance = Attendance::find($id);
    }

    public function destroy(int $id)
    {
        $attendance = Attendance::find($id);
    }
}
