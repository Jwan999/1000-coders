<?php

namespace App\Http\Controllers;

use App\Models\Code;
use Illuminate\Http\Request;

class CodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Code $code
     * @return \Illuminate\Http\Response
     */
    public function show(Code $code, Request $request)
    {
        if ($request->search != '' && $request->stage == 'stage1') {
            $codes = Code::where('name', 'LIKE', "%{$request->search}%")->orWhere('email', 'LIKE', "%{$request->search}%")->orWhere('phone', 'LIKE', "%{$request->search}%")->get();
            return json_encode($codes);
        }
        if ($request->search != '' && $request->stage == 'stage2') {
            $codes = Code::where('name', 'LIKE', "%{$request->search}%")->orWhere('email', 'LIKE', "%{$request->search}%")->orWhere('phone', 'LIKE', "%{$request->search}%")->get();
            return json_encode($codes);
        }


        $codes = Code::select('name', 'code', 'country', 'partner')->get();

        return json_encode($codes);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Code $code
     * @return \Illuminate\Http\Response
     */
    public function edit(Code $code)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Code $code
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Code $code)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Code $code
     * @return \Illuminate\Http\Response
     */
    public function destroy(Code $code)
    {
        //
    }
}
