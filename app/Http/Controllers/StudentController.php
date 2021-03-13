<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

use Illuminate\Support\Facades\Redirect;
use App\Exports\StudentsExport;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    public function export()
    {
        if (Auth::check()) {
            return Excel::download(new StudentsExport, 'students.xlsx');
        }
        return Redirect::route('login');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('signup');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->code);

        $rules = $this->validate($request, [
            "name" => "required",
            "email" => "required|email",
            "phone" => "required",
            "age" => "required",
            "country" => "required",
        ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->code . $request->phone,
            'age' => $request->age,
            'country' => $request->country,
        ];

        Student::create($data);;
        return redirect('/',)->withSuccess('تم التسجيل بنجاح');

    }

    public function charts(Request $request)
    {
        if (!Auth::check()) {
            return Redirect::route('login');
        }
        $students = Student::all()->groupBy('country')->map->count();
        return view('statistics',['students'=>$students]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student, Request $request)
    {
        if (!Auth::check()) {
            return Redirect::route('login');
        }

        $query = Student::orderByDesc('created_at');

        if ($request->has('country')) {
            $students = $query->where('country', $request->country);
        }
        $students = $query->paginate(15);
        return view('/registers', ['students' => $students]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
