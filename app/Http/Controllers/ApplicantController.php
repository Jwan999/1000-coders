<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Dawson\Youtube\Facades\Youtube;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
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
        $rules = $this->validate($request, [
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "age" => "required",
            "country" => "required",
            "partner" => "required",
            "title" => "required",
            "description" => "required",
            "test_code" => "required",
            "video" => "mimetypes:video/avi,video/mpeg,video/quicktime",
        ]);

        $fileNameWithExt = $request->file('video')->getClientMimeType();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('video')->getClientOriginalExtension();
        $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
        $path = $request->file('video')->storeAs('public/videos', $fileNameToStore);

        $data = [
            'test_code' => $request->test_code,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->code . $request->phone,
            'age' => $request->age,
            'country' => $request->country,
            'title' => $request->title,
            'description' => $request->description,
            'partner' => $request->partner,
            'video' => $fileNameToStore,
        ];

//        dd($data);

        Applicant::create($data);


        return redirect('/',)->withSuccess('تم التسجيل بنجاح');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Applicant $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant)
    {

        $query = Applicant::orderByDesc('created_at');

        $applicants = $query->paginate(15);
        return view('dashboard/thirdStage', ['applicants' => $applicants]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Applicant $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Applicant $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Applicant $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        //
    }
}
