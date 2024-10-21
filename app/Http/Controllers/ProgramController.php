<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Http\Requests\StoreProgramRequest;
use App\Http\Requests\UpdateProgramRequest;

class ProgramController extends Controller
{
    public function index()
    {
        $program = Program::all();
        return response()->json($program);
    }

    public function store(StoreProgramRequest $request)
    {
        //
    }

    public function show(string $program_id)
    {
        $program = Program::find($program_id);
        return response()->json($program);
    }

    public function update(UpdateProgramRequest $request, Program $program)
    {
        //
    }

    public function destroy(Program $program)
    {
        //
    }
}
