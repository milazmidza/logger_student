<?php

namespace App\Http\Controllers;

use App\mode\LecturerModule;
use Illuminate\Http\Request;
use App\model\Lecturer;
use App\mode\PeriodModule;

class LecturerModuleController extends Controller
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
        $modules = array();
        $allPeriodModules = PeriodModule::all();
        foreach ($allPeriodModules as $value) {
            # code...
            if($value->period->is_active){
                array_push($modules,$value);
            }
        }

        return view("assignlecturermodules",["periodModules"=>$modules,"lecturers"=>Lecturer::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        LecturerModule::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mode\LecturerModule  $lecturerModule
     * @return \Illuminate\Http\Response
     */
    public function show(LecturerModule $lecturerModule)
    {
        //
        return $lecturerModule;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mode\LecturerModule  $lecturerModule
     * @return \Illuminate\Http\Response
     */
    public function edit(LecturerModule $lecturerModule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mode\LecturerModule  $lecturerModule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LecturerModule $lecturerModule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mode\LecturerModule  $lecturerModule
     * @return \Illuminate\Http\Response
     */
    public function destroy(LecturerModule $lecturerModule)
    {
        //
    }
}
