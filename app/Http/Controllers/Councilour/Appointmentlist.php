<?php

namespace App\Http\Controllers\Councilour;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Timeslot;
use App\User;
use DB;

class Appointmentlist extends Controller
{
    public function index()
    {

        $timescheds = DB::table('users')
        ->join('timeslots', 'timeslots.user_id', '=', 'users.id')
        ->select('users.idnum', 'timeslots.time', 'timeslots.date')
        ->get()->toArray();

        return view('admin.users.councilour.viewtime')->with(['timescheds' => $timescheds]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'time' => 'required',
          ]);
        $timeslot = new Timeslot;
        $timeslot->user_id = $request->user()->id;
        $timeslot->time=$request->input('time');
        $timeslot->date=$request->input('date');
        $timeslot->save();

        return redirect()->route('stdnttime')->with('success','Time Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

