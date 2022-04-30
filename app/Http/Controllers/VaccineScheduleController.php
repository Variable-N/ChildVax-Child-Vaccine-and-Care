<?php

namespace App\Http\Controllers;

use App\Child;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VaccineScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->level == 0)
            $data = Auth::user()->children()->get();
        else
            $data = Child::get();
        return view('vaccine-schedule.index')->with(['data' => $data]);

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->level > 0)
        {
            $child = Child::find($request->child_id);
            if($child->vaccines->find($request->vaccine_id))
                $child->vaccines()->detach($request->vaccine_id);
            else
                $child->vaccines()->attach($request->vaccine_id);
        }
        return redirect()->back();
        //
    }

}
