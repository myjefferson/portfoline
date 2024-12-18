<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::select()->where(['id_user' => Auth::user()->id])->get();
        return view('pages.dashboard.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Course::create([
                'id_user' => Auth::user()->id,
                'title' => $request->title,
                'institution' => $request->institution,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'duration' => $request->duration,
                'description' => $request->description
            ]);
            return redirect(route('dashboard.courses'))->with(['success' => 'Curso criada com sucesso!']);
        } catch (\Exception $e) {
            return redirect(route('dashboard.courses'))->with(['error' => 'Ocorreu um erro criar o urso. Reporte os detalhes: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
