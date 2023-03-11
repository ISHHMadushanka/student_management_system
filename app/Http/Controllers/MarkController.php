<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mark;

class MarkController extends Controller
{
    /**
     * Display a listing of the marks.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marks = Mark::all();
        return view('marks.index', compact('marks'));
    }

    /**
     * Show the form for creating a new mark.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marks.create');
    }

    /**
     * Store a newly created mark in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'student_id' => 'required|integer',
            'subject_id' => 'required|integer',
            'mark' => 'required|numeric|min:0|max:100',
        ]);

        $mark = new Mark;
        $mark->student_id = $validatedData['student_id'];
        $mark->subject_id = $validatedData['subject_id'];
        $mark->mark = $validatedData['mark'];
        $mark->save();

        return redirect()->route('marks.index')
                         ->with('success', 'Mark created successfully');
    }

    /**
     * Show the form for editing the specified mark.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mark = Mark::findOrFail($id);
        return view('marks.edit', compact('mark'));
    }

    /**
     * Update the specified mark in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'student_id' => 'required|integer',
            'subject_id' => 'required|integer',
            'mark' => 'required|numeric|min:0|max:100',
        ]);

        $mark = Mark::findOrFail($id);
        $mark->student_id = $validatedData['student_id'];
        $mark->subject_id = $validatedData['subject_id'];
        $mark->mark = $validatedData['mark'];
        $mark->save();

        return redirect()->route('marks.index')
                         ->with('success', 'Mark updated successfully');
    }

    /**
     * Remove the specified mark from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mark = Mark::findOrFail($id);
        $mark->delete();

        return redirect()->route('marks.index')
                         ->with('success', 'Mark deleted successfully');
    }
}
