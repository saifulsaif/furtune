<?php

namespace App\Http\Controllers;

use App\appointment;
use App\doctors;
use App\listAppointment;
use DB;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(appointment $appointment)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(appointment $appointment)
    {
        //
    }

    public function getDoctor()
    {
        $doctors = doctors::with('times')->orderBy('id', 'DESC')->get();
        $site_infos= first_row_date('site_infos');
        return view('fontend.appoinment.appointment',compact('doctors','site_infos'));
    }

    public function getAppoinmet($id)
    {
       $doctors = doctors::with('times')->orderBy('id', 'DESC')->where('id',$id)->first();
       $site_infos= first_row_date('site_infos');
       return view('fontend.appoinment.appointment_form',compact('doctors','site_infos'));
    }
    public function sendAppointment()
    {
        $data = array(
            'doctor_id' => request()->doctor_id,
            'firstName' => request()->firstName,
            'lastName' => request()->lastName,
            'email' => request()->email,
            'dateOfAppoinment' => request()->dateOfAppoinment,
            'timeAppoinment' => request()->timeAppoinmen,
            'phoneNumber' => request()->phoneNumber,
            'diseaseTopic' => request()->diseaseTopic,
        );
        // DB::table('list_appointments')->insert($data);
        $appointment = new listAppointment;
        $appointment->doctor_id = request()->doctor_id;
        $appointment->firstName = request()->firstName;
        $appointment->lastName = request()->lastName;
        $appointment->email = request()->email;
        $appointment->dateOfAppoinment = request()->dateOfAppoinment;
        $appointment->timeAppoinment = request()->timeAppoinment;
        $appointment->phoneNumber = request()->phoneNumber;
        $appointment->diseaseTopic = request()->diseaseTopic;
        if ($appointment->save()) {
            $notification = array(
                'message' => $msg,
                'alert-type' => "Successfull Send"
            );
        }
        else {
            $notification = array(
                'message' => $msg,
                'alert-type' => "Not Sended"
            );
        }
        return view('fontend.appoinment.appointment_form',compact('notification'));

    }




}
